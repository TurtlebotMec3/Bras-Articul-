//#include "UART.h"
//#include "LibrairieFonctions.h"
#include "Configuration Bits.h"


/****************Variables Globales****************/
uart UART1_;
uart UART2_;

char PILE_FIFO[PILE_FIFO_MAX][UART1_TAILLE_BUFFER];
u8 COMPTEUR_PILE_FIFO = 0;
/*************************************************/


void envoyer_Char_UART(u8 canal, u8 caractere)
{
// UART1 :
    if(canal == UART1_.ID_UART)
    {
        while(U1STAbits.UTXBF); 
        U1TXREG = caractere;
    }

// UART2 :
    else if(canal == UART2_.ID_UART)
    {
        while(U2STAbits.UTXBF); 
        U2TXREG = caractere;
    }
}

void envoyer_String_UART(u8 canal, const char* chaine)
{
    do
    {
        envoyer_Char_UART(canal, *chaine);
    }while (*chaine++);
}


void envoyer_Int_UART(u8 canal, u32 data)
{
	//Technique pour envoyer les nombres supérieurs à 10
	u8 nombresDecimaux[10];	//Dans 32bits je peux obtenir maximum 10 chiffres à envoyer
	u8 compteur = 0;
	u32 i;
        
        data = absolue(data);
        
	while(data > 9)
	{
		i = data;
		while(i > 9)
		{
			i -= 10;
		}
		nombresDecimaux[compteur] = i;
		nombresDecimaux[compteur++] += '0';	//On passe en code ASCII et on incrémente pour savoir combien de fois on est passé
		data /= 10;
	}
	
	data += '0';	//On passe en code ASCII
	nombresDecimaux[compteur++] = data;	//On récpère le dernier chiffre

	for(i=0; i<compteur; i++)
	{
		envoyer_Char_UART(canal, nombresDecimaux[compteur - i - 1]);
	}
}


void envoyer_Float_UART(u8 canal, double data, u8 nbrDigits)
{
	//Technique pour envoyer les nombres supérieurs à 10
	u8 nombreVirgules;	//on admet que le nombres de chiffres après la virgule ne dépasse pas 5 chiffres
	u8 compteur = 0;
	
        if(data < 0.)
        {
            envoyer_Char_UART(canal, '-');
            data = -data;
        }
        
	envoyer_Int_UART(canal, (u32)data);	//Affiche la partie entière pour ensuite afficher la virgule
	envoyer_Char_UART(canal, '.');
	
	data -= (u32)data;	//On enlève la partie entière
	//while(data != 0. && compteur < nbrDigits)
	while(compteur < nbrDigits)
	{
		data *= 10;
		nombreVirgules = (u8)data;
		nombreVirgules += '0';	//On passe aux chiffres codés en ASCII et on incrémente pour savoir combien de fois on est passé
		envoyer_Char_UART(canal, nombreVirgules);	//On affiche
		compteur++;
		data -= (u8)data;	//On enlève la partie entière
	}
}


u8 traitement_reception_UART(u8 Position)
{
    u8 positionCaractere = 0, positionCommande = 0, positionTemporaireCarac = 0, positionTemporaireCmd = 0;
    char commande[7][5];
    u32 checkSum = 0, verifCheckSum = 0;
    u8 flag_checkSum = Activer;
    
    for(positionCommande=0; positionCommande<7;positionCommande++)
        for(positionCaractere=0; positionCaractere<5; positionCaractere++)
            commande[positionCommande][positionCaractere] = 0;
    
    positionCommande = 0;
    positionCaractere = 0;

    
//On formate la trame pour qu'elle puisse être traitée par la fonction ensuite
    while(PILE_FIFO[Position - 1][positionCaractere] != '\n')
    {
        if(PILE_FIFO[Position - 1][positionCaractere] != 'A' && flag_checkSum == Activer)
            checkSum += PILE_FIFO[Position - 1][positionCaractere];
        else
            flag_checkSum = Desactiver;
        
        //Converti les chiffres écrient en ASCII vers les décimaux
        if(PILE_FIFO[Position - 1][positionCaractere] >= '0' && PILE_FIFO[Position - 1][positionCaractere] <= '9' && positionCommande > 0)
            PILE_FIFO[Position - 1][positionCaractere] -= '0';
            
        commande[positionCommande][positionTemporaireCarac] = PILE_FIFO[Position - 1][positionCaractere];
        
        positionCaractere++;
        positionTemporaireCarac++;
        
        if(PILE_FIFO[Position - 1][positionCaractere] == ' ')
        {
            positionCommande++;
            positionCaractere++;    //On avance d'un caractère pour ne pas rester sur le même
            positionTemporaireCarac = 0;
            checkSum += ' ';
        }
    }
    positionCommande++; //On incrémente la commande car la commande avant le \n n'a pas été comptée
    
 
//    envoyer_String_UART(UART2_.ID_UART, "Nombre Cmd / Carac = ");
//    envoyer_Int_UART(UART2_.ID_UART, positionCommande);
//    envoyer_String_UART(UART2_.ID_UART, " / ");
//    envoyer_Int_UART(UART2_.ID_UART, positionCaractere);
//    envoyer_String_UART(UART2_.ID_UART, "\n");
//    
//    
//    envoyer_String_UART(UART2_.ID_UART, "Tableau = ");
//    for(positionTemporaireCmd=0; positionTemporaireCmd<positionCommande; positionTemporaireCmd++)
//    {
//        for(positionTemporaireCarac=0; positionTemporaireCarac<5;positionTemporaireCarac++)
//            envoyer_Char_UART(UART2_.ID_UART, commande[positionTemporaireCmd][positionTemporaireCarac]); 
//    envoyer_String_UART(UART2_.ID_UART, "___ ");
//    }
//    envoyer_String_UART(UART2_.ID_UART, "F\n");
    
    positionTemporaireCmd = 1;  //On saute la première commande car c'est la commande G-Code ou M-Code (vérifié en dure)
    positionTemporaireCarac = 0;
    
/*    MEDAKA */  
    verifCheckSum = conversionTableauVariable_Char(commande[positionCommande - 1], 1, 4);
    checkSum -= ' '; // pour enlerver le dernier espace avent la checksum ( Axxx) 
    checkSum = checkSum % 256;
    
    envoyer_String_UART(UART2_.ID_UART, "checkSum : ");
    envoyer_Int_UART(UART2_.ID_UART, checkSum);
    envoyer_String_UART(UART2_.ID_UART, "\nVerifcheckSum : ");
    envoyer_Int_UART(UART2_.ID_UART, verifCheckSum);
    envoyer_String_UART(UART2_.ID_UART, "\n");
    
    
    if(checkSum != verifCheckSum)
    {
        envoyer_String_UART(UART2_.ID_UART, "Erreur dans la checkSum. Trame non pris en compte\n");
        Retirer_Trame_Pile(Position);   //Une fois la trame traitée il faut la jeter
        return ERREUR;
    }
    
    positionCommande--; // on soustrait position commande pour ne pas re-traité checkSum 
/**/
    
//On traite les commandes
    if(commande[0][0] == 'G')     //Trame G-Code
    {
        if(strcmp(commande[0], MOUVEMENT_RAPIDE) == 0)
        {
            while(positionTemporaireCmd < positionCommande)
            {
                
                if(commande[positionTemporaireCmd][0] == X_ROTATION)
                {
                    NEMA_X.CONSIGNE = conversionTableauVariable_Char(commande[positionTemporaireCmd], 1, 4);
                    NEMA_X.FLAG_MOUVEMENT = Active;
                    
//                    envoyer_String_UART(UART2_.ID_UART, "Consigne X = ");
//                    envoyer_Int_UART(UART2_.ID_UART, NEMA_X.CONSIGNE); 
//                    envoyer_Char_UART(UART2_.ID_UART, '\n');
//                    envoyer_String_UART(UART2_.ID_UART, "Actuel X = ");
//                    envoyer_Int_UART(UART2_.ID_UART, NEMA_X.ANGLE); 
//                    envoyer_Char_UART(UART2_.ID_UART, '\n');
                }
                else if(commande[positionTemporaireCmd][0] == Z_ROTATION)
                {
                    NEMA_Z.CONSIGNE = conversionTableauVariable_Char(commande[positionTemporaireCmd], 1, 4);
                    NEMA_Z.FLAG_MOUVEMENT = Active;
                    
//                    envoyer_String_UART(UART2_.ID_UART, "Consigne Z = ");
//                    envoyer_Int_UART(UART2_.ID_UART, NEMA_Z.CONSIGNE); 
//                    envoyer_Char_UART(UART2_.ID_UART, '\n');
//                    envoyer_String_UART(UART2_.ID_UART, "Actuel Z = ");
//                    envoyer_Int_UART(UART2_.ID_UART, NEMA_Z.ANGLE); 
//                    envoyer_Char_UART(UART2_.ID_UART, '\n');
                }
                else if(commande[positionTemporaireCmd][0] == SAVOX_ROTATION)
                {
                    SAVOX.CONSIGNE = conversionTableauVariable_Char(commande[positionTemporaireCmd], 1, 4);
                    SAVOX.FLAG_MOUVEMENT = Active;
                    
//                    envoyer_String_UART(UART2_.ID_UART, "Consigne SAVOX = ");
//                    envoyer_Int_UART(UART2_.ID_UART, SAVOX.CONSIGNE); 
//                    envoyer_Char_UART(UART2_.ID_UART, '\n');
//                    envoyer_String_UART(UART2_.ID_UART, "Actuel SAVOX = ");
//                    envoyer_Int_UART(UART2_.ID_UART, SAVOX.ANGLE); 
//                    envoyer_Char_UART(UART2_.ID_UART, '\n');
                }
                else if(commande[positionTemporaireCmd][0] == MG996_ROTATION)
                {
                    MG996.CONSIGNE = conversionTableauVariable_Char(commande[positionTemporaireCmd], 1, 4);
                    MG996.FLAG_MOUVEMENT = Active;
                    
//                    envoyer_String_UART(UART2_.ID_UART, "Consigne MG996 = ");
//                    envoyer_Int_UART(UART2_.ID_UART, MG996.CONSIGNE); 
//                    envoyer_Char_UART(UART2_.ID_UART, '\n');
//                    envoyer_String_UART(UART2_.ID_UART, "Actuel MG996 = ");
//                    envoyer_Int_UART(UART2_.ID_UART, MG996.ANGLE); 
//                    envoyer_Char_UART(UART2_.ID_UART, '\n');
                }
                else if(commande[positionTemporaireCmd][0] == CAMERA_ROTATION)
                {
                    CAMERA.CONSIGNE = conversionTableauVariable_Char(commande[positionTemporaireCmd], 1, 4);
                    CAMERA.FLAG_MOUVEMENT = Active;
                    
//                    envoyer_String_UART(UART2_.ID_UART, "Consigne CAMERA = ");
//                    envoyer_Int_UART(UART2_.ID_UART, CAMERA.CONSIGNE); 
//                    envoyer_Char_UART(UART2_.ID_UART, '\n');
//                    envoyer_String_UART(UART2_.ID_UART, "Actuel CAMERA = ");
//                    envoyer_Int_UART(UART2_.ID_UART, CAMERA.ANGLE); 
//                    envoyer_Char_UART(UART2_.ID_UART, '\n');
                }
                
                positionTemporaireCmd++;
            }
            
            envoyer_String_UART(UART2_.ID_UART, "Trame Mouvement traitee\n");
            
        }
        
        
        else if(strcmp(commande[0], ATTENTE) == 0)
        {   
            if(commande[1][0] == 'S')   //Attente en seconde
                delay_ms(conversionTableauVariable_Char(commande[1], 1, 4) * 1000);
            else if(commande[1][0] == 'P')  //Attente en millisecondes
                delay_ms(conversionTableauVariable_Char(commande[1], 1, 4));
            else
                envoyer_String_UART(UART2_.ID_UART, "Erreur Lettre Temps\n");
            
            envoyer_String_UART(UART2_.ID_UART, "Trame Attente traitee\n");
        }
        
        
        else if(strcmp(commande[0], HOMING) == 0)
        {   
        //Calcul des angles actuels de chaque moteur
            NEMA_X.ANGLE = Calcul_angle_actuel_Pas_a_Pas(NEMA_X);
            NEMA_Z.ANGLE = Calcul_angle_actuel_Pas_a_Pas(NEMA_Z);
            SAVOX.ANGLE = Calcul_angle_actuel_PWM(SAVOX);
            MG996.ANGLE = Calcul_angle_actuel_PWM(MG996);
            CAMERA.ANGLE = Calcul_angle_actuel_PWM(CAMERA);
            
        //Définition des nouvelles consignes
            NEMA_X.CONSIGNE = 90;
            NEMA_Z.CONSIGNE = 90;
            SAVOX.CONSIGNE = 0;
            MG996.CONSIGNE = 0;
            
        //Reset des valeurs de rotations
            NEMA_X.NBR_TOUR = 0;
            NEMA_X.CONSIGNE_TOUR = 0;
            NEMA_Z.NBR_TOUR = 0;
            NEMA_Z.CONSIGNE_TOUR = 0;
            
        //Activation des flags pour lancer le mouvement
            NEMA_X.FLAG_MOUVEMENT = Activer;
            NEMA_Z.FLAG_MOUVEMENT = Activer;
            SAVOX.FLAG_MOUVEMENT = Activer;
            MG996.FLAG_MOUVEMENT = Activer;
            
            envoyer_String_UART(UART2_.ID_UART, "Trame Homing traitee\n");
        }
        
        
        else if(strcmp(commande[0], ANGLE_ABSOLUE) == 0)
        {   
            envoyer_String_UART(UART2_.ID_UART, "Pas encore Impementee\n");
            envoyer_String_UART(UART2_.ID_UART, "Trame Config traitee\n");
        }
        
        
        else if(strcmp(commande[0], ANGLE_RELATIVE) == 0)
        {   
            envoyer_String_UART(UART2_.ID_UART, "Pas encore Impementee\n");
            envoyer_String_UART(UART2_.ID_UART, "Trame Config traitee\n");
        }
        
        
        else
        {
            envoyer_String_UART(UART2_.ID_UART, "Erreur Commande G-code\n");
            return ERREUR;  //Commande inconnue
        }
    }

    else if(commande[0][0] == 'M')        //Trame M-Code
    {
        if(strcmp(commande[0], ARRET_URGENCE) == 0)
        {   
            Configuration_Driver(EN_MOTOR_POSITION, Desactive);            //Arrête les moteurs pas à pas
 
            envoyer_String_UART(UART2_.ID_UART, "Trame Arret Urgence traitee\n");
            envoyer_String_UART(UART2_.ID_UART, "Il faut Reset le PIC\n");
            while(1);
        }
        
        
        else if(strcmp(commande[0], AFFICHER_MESSAGE) == 0)
        {
            envoyer_String_UART(UART2_.ID_UART, "Pas encore Impementee\n");
        }
        
        
        else if(strcmp(commande[0], DEFINIR_VITESSE) == 0)
        {
            while(positionTemporaireCmd < positionCommande)
            {
                if(commande[positionTemporaireCmd][0] == X_ROTATION)
                {
                    NEMA_X.ANGLE = Calcul_angle_actuel_Pas_a_Pas(NEMA_X);   //Calcul de la position avant de changer vitesse
                    envoyer_String_UART(UART2_.ID_UART, "Angle X : ");
                    envoyer_Float_UART(UART2_.ID_UART, NEMA_X.ANGLE, 2);
                    envoyer_Char_UART(UART2_.ID_UART, '\n');
                    
                    if(commande[positionTemporaireCmd][1] == UART_MODE_RAPIDE)
                        Configuration_Vitesse_Pas_a_Pas(MOTEUR_X, MODE_RAPIDE);
                    else if(commande[positionTemporaireCmd][1] == UART_MODE_DEMI_PAS)
                        Configuration_Vitesse_Pas_a_Pas(MOTEUR_X, MODE_DEMI_PAS);
                    else if(commande[positionTemporaireCmd][1] == UART_MODE_QUART_PAS)
                        Configuration_Vitesse_Pas_a_Pas(MOTEUR_X, MODE_QUART_PAS);
                    else if(commande[positionTemporaireCmd][1] == UART_MODE_MICRO_PAS)
                        Configuration_Vitesse_Pas_a_Pas(MOTEUR_X, MODE_MICRO_PAS);
                    else
                        envoyer_String_UART(UART2_.ID_UART, "Erreur Parametre Trame\n");

                    NEMA_X.FLAG_MOUVEMENT = Activer;    //On relance le calcul du nombre de tour (dépend de la vitesse)
                }
                
                else if(commande[positionTemporaireCmd][0] == Z_ROTATION)
                {
                    NEMA_Z.ANGLE = Calcul_angle_actuel_Pas_a_Pas(NEMA_Z);   //Calcul de la position avant de changer vitesse
                    envoyer_String_UART(UART2_.ID_UART, "Angle Z : ");
                    envoyer_Float_UART(UART2_.ID_UART, NEMA_Z.ANGLE, 2);
                    envoyer_Char_UART(UART2_.ID_UART, '\n');
                    
                    if(commande[positionTemporaireCmd][1] == UART_MODE_RAPIDE)
                        Configuration_Vitesse_Pas_a_Pas(MOTEUR_Z, MODE_RAPIDE);
                    else if(commande[positionTemporaireCmd][1] == UART_MODE_DEMI_PAS)
                        Configuration_Vitesse_Pas_a_Pas(MOTEUR_Z, MODE_DEMI_PAS);
                    else if(commande[positionTemporaireCmd][1] == UART_MODE_QUART_PAS)
                        Configuration_Vitesse_Pas_a_Pas(MOTEUR_Z, MODE_QUART_PAS);
                    else if(commande[positionTemporaireCmd][1] == UART_MODE_MICRO_PAS)
                        Configuration_Vitesse_Pas_a_Pas(MOTEUR_Z, MODE_MICRO_PAS);
                    else
                        envoyer_String_UART(UART2_.ID_UART, "Erreur Parametre Trame\n");

                    NEMA_Z.FLAG_MOUVEMENT = Activer;        //On relance le calcul du nombre de tour (dépend de la vitesse)
                }
                
                else if(commande[positionTemporaireCmd][0] == SAVOX_ROTATION)
                {
//                    envoyer_String_UART(UART2_.ID_UART, "Angle SAVOX : ");
//                    envoyer_Float_UART(UART2_.ID_UART, SAVOX.ANGLE, 2);
//                    envoyer_Char_UART(UART2_.ID_UART, '\n');
                    
                    if(commande[positionTemporaireCmd][1] == UART_MODE_RAPIDE)
                        SAVOX.VITESSE = PWM_VITESSE_RAPIDE;
                    else if(commande[positionTemporaireCmd][1] == UART_MODE_NORMAL)
                        SAVOX.VITESSE = PWM_VITESSE_NORMAL;
                    else if(commande[positionTemporaireCmd][1] == UART_MODE_LENT)
                        SAVOX.VITESSE = PWM_VITESSE_LENT;
                    else
                        envoyer_String_UART(UART2_.ID_UART, "Erreur Parametre Trame\n");
                }
                
                else if(commande[positionTemporaireCmd][0] == MG996_ROTATION)
                {
                    if(commande[positionTemporaireCmd][1] == UART_MODE_RAPIDE)
                        MG996.VITESSE = PWM_VITESSE_RAPIDE;
                    else if(commande[positionTemporaireCmd][1] == UART_MODE_NORMAL)
                        MG996.VITESSE = PWM_VITESSE_NORMAL;
                    else if(commande[positionTemporaireCmd][1] == UART_MODE_LENT)
                        MG996.VITESSE = PWM_VITESSE_LENT;
                    else
                        envoyer_String_UART(UART2_.ID_UART, "Erreur Parametre Trame\n");
                }
                
                else if(commande[positionTemporaireCmd][0] == CAMERA_ROTATION)
                {
                    if(commande[positionTemporaireCmd][1] == UART_MODE_RAPIDE)
                        CAMERA.VITESSE = PWM_VITESSE_RAPIDE;
                    else if(commande[positionTemporaireCmd][1] == UART_MODE_NORMAL)
                        CAMERA.VITESSE = PWM_VITESSE_NORMAL;
                    else if(commande[positionTemporaireCmd][1] == UART_MODE_LENT)
                        CAMERA.VITESSE = PWM_VITESSE_LENT;
                    else
                        envoyer_String_UART(UART2_.ID_UART, "Erreur Parametre Trame\n");
                }
                
                positionTemporaireCmd++;
            }
            
            envoyer_String_UART(UART2_.ID_UART, "Trame Changement Vitesse traitee\n");
//            delay_ms(100);       //Délai pour éviter les bug si on lance le changement de vitesse en même temps qu'un mouvement
        }
        
        
        else if(strcmp(commande[0], JOUER_SON) == 0)
        {
            envoyer_String_UART(UART2_.ID_UART, "Pas encore Impementee\n");
            envoyer_String_UART(UART2_.ID_UART, "Trame Jouer Son traitee\n");
        }
        
        
        else if(strcmp(commande[0], DEFINIR_PID) == 0)
        {
            envoyer_String_UART(UART2_.ID_UART, "Pas encore Impementee\n");
            envoyer_String_UART(UART2_.ID_UART, "Trame Changer PID traitee\n");
        }
        
        
        else if(strcmp(commande[0], INFO_CONFIG_FIRMWARE) == 0)
        {
            envoyer_String_UART(UART2_.ID_UART, "Angle X : ");
            envoyer_Float_UART(UART2_.ID_UART, NEMA_X.ANGLE, 2);
            envoyer_Char_UART(UART2_.ID_UART, '\n');
            envoyer_String_UART(UART2_.ID_UART, "Angle Z : ");
            envoyer_Float_UART(UART2_.ID_UART, NEMA_Z.ANGLE, 2);
            envoyer_Char_UART(UART2_.ID_UART, '\n');
            envoyer_String_UART(UART2_.ID_UART, "Angle Savox : ");
            envoyer_Float_UART(UART2_.ID_UART, SAVOX.ANGLE, 2);
            envoyer_Char_UART(UART2_.ID_UART, '\n');
            
//            envoyer_String_UART(UART2_.ID_UART, "Pas encore Impementee\n");
        }
        
        
        else if(strcmp(commande[0], CANCEL_TRAME) == 0)
        {
            NEMA_X.ANGLE = Calcul_angle_actuel_Pas_a_Pas(NEMA_X);
            NEMA_Z.ANGLE = Calcul_angle_actuel_Pas_a_Pas(NEMA_Z);
            SAVOX.ANGLE = Calcul_angle_actuel_PWM(SAVOX);
            MG996.ANGLE = Calcul_angle_actuel_PWM(MG996);
            CAMERA.ANGLE = Calcul_angle_actuel_PWM(CAMERA);
            
            NEMA_X.CONSIGNE = NEMA_X.ANGLE;
            NEMA_Z.CONSIGNE = NEMA_Z.ANGLE;
            SAVOX.CONSIGNE = SAVOX.ANGLE;
            MG996.CONSIGNE = MG996.ANGLE;
            CAMERA.CONSIGNE = CAMERA.ANGLE;
            
            
            NEMA_X.NBR_TOUR = 0;
            NEMA_X.CONSIGNE_TOUR = 0;
            NEMA_Z.NBR_TOUR = 0;
            NEMA_Z.CONSIGNE_TOUR = 0;
            SAVOX.PWM_CONSIGNE = SAVOX.PWM;
            MG996.PWM_CONSIGNE = MG996.PWM;
            CAMERA.PWM_CONSIGNE = CAMERA.PWM;
            
            NEMA_X.EN_MOUVEMENT = Non;
            NEMA_Z.EN_MOUVEMENT = Non;
            SAVOX.EN_MOUVEMENT = Non;
            MG996.EN_MOUVEMENT = Non;
            CAMERA.EN_MOUVEMENT = Non;
            
            envoyer_String_UART(UART2_.ID_UART, "Trame Cancel traitee\n");
        }
        
        
        else if(strcmp(commande[0], ECRIT_PARAM_EEPROM) == 0)
        {
            envoyer_String_UART(UART2_.ID_UART, "Pas encore Impementee\n");
            envoyer_String_UART(UART2_.ID_UART, "Trame Ecrire EEPROM traitee\n");
        }
        
        
        else if(strcmp(commande[0], LIT_PARAM_EEPROM) == 0)
        {
            envoyer_String_UART(UART2_.ID_UART, "Pas encore Impementee\n");
            envoyer_String_UART(UART2_.ID_UART, "Trame Lire EEPROM traitee\n");
        }
        
        
        else
        {
            envoyer_String_UART(UART2_.ID_UART, "Erreur Commande M-code\n");
            return ERREUR;  //Commande inconnue
        }
    }
    
    Retirer_Trame_Pile(Position);   //Une fois la trame traitée il faut la jeter
    return OK;
}


void Inserer_Trame_Pile(char buffer[])
{
    u8 i;
    
    //    IEC0bits.U1RXIE = Desactive;         //Déscative l'interruption pour ne pas fausser la trame qui est en train d'être copier dans la pile
    IEC1bits.U2RXIE = Desactive;               //Déscative l'interruption pour ne pas fausser la trame qui est en train d'être copier dans la pile
    
    if(COMPTEUR_PILE_FIFO < PILE_FIFO_MAX)
        for(i=0; i<UART1_.COMPTEUR_RECEPTION; i++)
            PILE_FIFO[COMPTEUR_PILE_FIFO][i] = buffer[i];
    else
        envoyer_String_UART(UART2_.ID_UART, "Erreur Liste Trame\n");

    UART1_.COMPTEUR_RECEPTION = 0;      //Alors on reset le compteur
    
//    IEC0bits.U1RXIE = Active;         //Réactive l'interruption pour de nouveau pouvoir enregistrer les caractères reçus
    IEC1bits.U2RXIE = Active;           //Réactive l'interruption pour de nouveau pouvoir enregistrer les caractères reçus
    
    COMPTEUR_PILE_FIFO++;
}


void Retirer_Trame_Pile(u8 Position)
{
    u8 i, j;
    
    for(i=(Position-1); i<COMPTEUR_PILE_FIFO; i++)
        for(j=0; j<UART1_TAILLE_BUFFER; j++)
        PILE_FIFO[i][j] = PILE_FIFO[i + 1][j];
    
    
    COMPTEUR_PILE_FIFO--;
}