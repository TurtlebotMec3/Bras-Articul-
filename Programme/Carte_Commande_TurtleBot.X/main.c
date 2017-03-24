/* 
 * File:   main.c
 * Author: user
 *
 * Created on 7 novembre 2016, 18:39
 */
#include "Configuration Bits.h"


int main(int argc, char** argv)
{
    init_Clock();
    init_GPIO();
    init_UART();
    init_PWM();
    init_Timer();
    init_Priorite_Interruption();
    init_Moteurs();     //Configure Positions Initiales
    delay_ms(200);      //Attend que les moteurs aient fini de bougés
    
    u8 i,j;
    for(i=0; i<PILE_FIFO_MAX; i++)
        for(j=0; j<UART1_TAILLE_BUFFER; j++)
            PILE_FIFO[i][j] = 0;
    
    envoyer_String_UART(UART2_.ID_UART, "Debut code PIC\n");
    
//    char* trame= "G0 S000";
//    u32 test = 0;
//    for(i = 0; i<7; i++)
//    { 
//    test += trame[i];
//    }
//    test = test % 256;
//    delay_ms(2000);
//    envoyer_Int_UART(UART2_.ID_UART, test);
    
//    u32 temp = COMPTEUR_1ms;
//    float angle;
    char commande[2];  
//    char commande2[3]; 
    
    while(1)
    {
/******************************GESTION TRAMES UART*******************************/
        if(UART1_.FLAG_TRAITEMENT == Activer)
        {
            UART1_.FLAG_TRAITEMENT = Desactiver;
            
            Inserer_Trame_Pile(UART1_.BUFFER); //(durée moyenne : )
            
        //On veut comparer la commande envoyée avec la commande de mouvement (commande "G0"). Si c'est le cas alors on attend pour l'éxecuter. Sinon on éxecute directement
            commande[0] = UART1_.BUFFER[0];
            commande[1] = UART1_.BUFFER[1];
//            commande2[0] = UART1_.BUFFER[0];
//            commande2[1] = UART1_.BUFFER[1];
//            commande2[2] = UART1_.BUFFER[2];
            if(strcmp(commande, MOUVEMENT_RAPIDE) != 0 && strcmp(commande, HOMING) != 0) //Si on a pas une trame de mouvement alors on traite directement la trame
            {
                envoyer_String_UART(UART2_.ID_UART, "Traitement prematuree\n");
                traitement_reception_UART(COMPTEUR_PILE_FIFO);   //(durée moyenne : 1ms +- 0,2ms -> daté du 20.12.16)
            }
        }
        
        if(COMPTEUR_PILE_FIFO > 0 &&
           NEMA_X.EN_MOUVEMENT == Non && NEMA_Z.EN_MOUVEMENT == Non &&
           SAVOX.EN_MOUVEMENT == Non && MG996.EN_MOUVEMENT == Non && CAMERA.EN_MOUVEMENT == Non)    //Si on a une trame à traiter
            traitement_reception_UART(1);       //Traite la première trame de la pile
/********************************************************************************/
        if(COMPTEUR_PILE_FIFO > 0 && NEMA_X.EN_MOUVEMENT == Non && NEMA_Z.EN_MOUVEMENT == Non && SAVOX.EN_MOUVEMENT == Non)
        {
            envoyer_String_UART(UART2_.ID_UART, "Encore à traiter : ");
            envoyer_Int_UART(UART2_.ID_UART, COMPTEUR_PILE_FIFO);
            envoyer_String_UART(UART2_.ID_UART, " trames\n");
        }
        
/******************************GESTION MOTEURS PAS A PAS*************************/
        if(NEMA_X.FLAG_MOUVEMENT == Activer)
        {
            NEMA_X.FLAG_MOUVEMENT = Desactiver;
            
//            envoyer_String_UART(UART2_.ID_UART, "Flag X\n");
            float angle = NEMA_X.CONSIGNE - NEMA_X.ANGLE;     //Calcul la différence d'ange à effectuer pour atteindre la consigne
            Envoi_Moteur_Pas_a_Pas_angle_dynamique(MOTEUR_X, angle);        //Modifie la consigne du moteur pas à pas. Change le nombre de pas à effectuer
        }
        
        if(NEMA_Z.FLAG_MOUVEMENT == Activer)
        {
            NEMA_Z.FLAG_MOUVEMENT = Desactiver;
            
//            envoyer_String_UART(UART2_.ID_UART, "Flag Z\n");
            float angle = NEMA_Z.CONSIGNE - NEMA_Z.ANGLE;     //Calcul la différence d'ange à effectuer pour atteindre la consigne
            Envoi_Moteur_Pas_a_Pas_angle_dynamique(MOTEUR_Z, angle);        //Modifie la consigne du moteur pas à pas. Change le nombre de pas à effectuer
        }
        Envoi_Pas_a_Pas_dynamique();    //Permet de faire bouger les moteurs pas à pas d'UN PAS.
/********************************************************************************/
        
        
/******************************GESTION SERVOMOTEURS******************************/
        if(SAVOX.FLAG_MOUVEMENT == Activer)
        {
            SAVOX.FLAG_MOUVEMENT = Desactiver;
            
//            envoyer_String_UART(UART2_.ID_UART, "Flag SAVOX\n");
            Envoi_PWM_angle_dynamique(MOTEUR_SAVOX, SAVOX.CONSIGNE);
        }
        
        if(MG996.FLAG_MOUVEMENT == Activer)
        {
            MG996.FLAG_MOUVEMENT = Desactiver;
            
            Envoi_PWM_angle_dynamique(MOTEUR_MG996, MG996.CONSIGNE);
        }
        
        if(CAMERA.FLAG_MOUVEMENT == Activer)
        {
            CAMERA.FLAG_MOUVEMENT = Desactiver;
            
            if(CAMERA.CONSIGNE == 90)       //Permet de mettre la caméra bien droite! Pour un meilleur confort utilisateur (correcteur du hard en software)
                CAMERA.CONSIGNE = 82;
            
            Envoi_PWM_angle(MOTEUR_CAMERA, CAMERA.CONSIGNE);
//            Envoi_PWM_angle_dynamique(MOTEUR_CAMERA, CAMERA.CONSIGNE);
        }
        Envoi_PWM_dynamique();
/********************************************************************************/
    
//        if(COMPTEUR_1ms - temp > 1000)
//        {
//            temp = COMPTEUR_1ms;
//            angle = Calcul_angle_actuel_Pas_a_Pas(NEMA_Z);
//            envoyer_Float_UART(UART2_.ID_UART, angle, 3);
//            envoyer_Char_UART(UART2_.ID_UART, '\n');
//        }
    }
    
    return(EXIT_SUCCESS);
}



/*
envoyer_String_UART(UART2_.ID_UART, "Consigne PWM SAVOX = ");
envoyer_Int_UART(UART2_.ID_UART, SAVOX.PWM_CONSIGNE); 
envoyer_Char_UART(UART2_.ID_UART, '\n');
envoyer_String_UART(UART2_.ID_UART, "PWM SAVOX = ");
envoyer_Int_UART(UART2_.ID_UART, SAVOX.PWM); 
envoyer_Char_UART(UART2_.ID_UART, '\n');
*/


/****************************************************/
//Petite démo
//        for(i=0; i<45;i++)
//        {
//        Envoi_PWM_angle(MOTEUR_SAVOX, i);
//        delay_ms(50);
//        }
//        Envoi_PWM_angle(MOTEUR_SAVOX, 45);
//        Envoi_Moteur_Pas_a_Pas_angle(MOTEUR_X, -45.);
//        delay_ms(1000);
//        
//        Envoi_PWM_angle(MOTEUR_SAVOX, 90);
//        Envoi_Moteur_Pas_a_Pas_angle(MOTEUR_Z, -45.);
//        delay_ms(1000);
//        
//        Envoi_PWM_angle(MOTEUR_SAVOX, 45);
//        Envoi_Moteur_Pas_a_Pas_angle(MOTEUR_Z, 90.);
//        delay_ms(1000);
//        
//        Envoi_PWM_angle(MOTEUR_SAVOX, 180);
//        Envoi_Moteur_Pas_a_Pas_angle(MOTEUR_X, 45.);
//        delay_ms(1000);
/****************************************************/


/**************************************************/
    //Test 74HC595
//        Envoi_74HC595(255);
//        delay_ms(500);
/**************************************************/
        
        
/**************************************************/
    //Test Moteur PWM
/*Extrémités moteur! angle de 180°*/
//        Envoi_PWM_angle(MOTEUR_SAVOX, 0);
//        Envoi_PWM_brut(MOTEUR_SAVOX, VALEUR_PWM_MAX);
//        Envoi_PWM_brut(MOTEUR_MG996, VALEUR_PWM_MAX);
//        Envoi_PWM_brut(MOTEUR_PWM1ter, VALEUR_PWM_MAX);
//        Envoi_PWM_brut(MOTEUR_CAMERA, VALEUR_PWM_MAX);
/**************************************************/
        
        
/**************************************************/
    //Test Moteur pas à pas
//        CLK_Z = Active;
//        delay_us(350);
//        CLK_Z = Desactive;
//        delay_us(350);

//        for(i=0;i<5145;i++) //Test pou faire 90° (angle de 1.749 par pas)
//        {
//            CLK_Z = Active;
//            delay_us(500);
//            CLK_Z = Desactive;
//            delay_us(500);
//        }
//        delay_ms(5000);
/**************************************************/
        
        
/**************************************************/
    //Test UART
//        envoyer_string_uart(UART1_.ID_UART, "Hello World\n");
//        delay_ms(1000);
/**************************************************/
