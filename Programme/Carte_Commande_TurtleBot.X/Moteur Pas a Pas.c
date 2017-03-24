#include "Configuration Bits.h"


/****************Variables Globales****************/
u8 CONFIGURATION_EN_MOTOR;

moteur_nema NEMA_X;
moteur_nema NEMA_Z;
/*************************************************/


u8 Envoi_Moteur_Pas_a_Pas_brut(u8 numMoteur, u32 nbrTour)
{
    u32 i = 0;
    
    if(numMoteur == MOTEUR_X)
    {
        for(i=0; i<nbrTour; i++)
        {
            CLK_X = Active;
            delay_us(NEMA_X.DELAI_EXCITATION);
            CLK_X = Desactive;
            delay_us(NEMA_X.DELAI_EXCITATION);
        }
        
        return OK;
    }
    
    else if(numMoteur == MOTEUR_Z)
    {
        for(i=0; i<nbrTour; i++)
        {
            CLK_Z = Active;
            delay_us(NEMA_Z.DELAI_EXCITATION);
            CLK_Z = Desactive;
            delay_us(NEMA_Z.DELAI_EXCITATION);
        }
        
        return OK;
    }
    
    return ERREUR;
}



u8 Envoi_Moteur_Pas_a_Pas_angle(u8 numMoteur, float angle)
{
    u32 nombre_Pas;     //O mets un 32 bits car si on fait des micro-pas (donc on multiplie le nbr par 16) alors on peut monter à 329331 pas (pour 360°)

    if(angle < 0.)
        nombre_Pas = -angle;
    else
        nombre_Pas = angle;
    
    nombre_Pas /= ANGLE_PAS;            //Calcul le nombre de pas que devra faire le moteur
    nombre_Pas *= 100;                  //Rajoute la valeur après le réducteur 1:100
    
//Gère le sens de rotation
    if(numMoteur == MOTEUR_X)
    {
        nombre_Pas *= NEMA_X.VITESSE;       //On multiplie par la vitesse du moteur 
        
        if(angle > 0.)
            Envoi_Sens_Pas_a_Pas(MOTEUR_X, SENS_HORAIRE);
        else if(angle < 0.)
            Envoi_Sens_Pas_a_Pas(MOTEUR_X, SENS_ANTI_HORAIRE);
    }
    else if(numMoteur == MOTEUR_Z)
    {
        nombre_Pas *= NEMA_Z.VITESSE;   //On multiplie par la vitesse du moteur 
        
        if(angle > 0.)
            Envoi_Sens_Pas_a_Pas(MOTEUR_Z, SENS_HORAIRE);
        else if(angle < 0.)
            Envoi_Sens_Pas_a_Pas(MOTEUR_Z, SENS_ANTI_HORAIRE);
    }
    
    Envoi_Moteur_Pas_a_Pas_brut(numMoteur, nombre_Pas);
    
    return OK;
}


void Envoi_Moteur_Pas_a_Pas_angle_dynamique(u8 numMoteur, float angle)
{
    u32 nombre_Pas;     //On mets un 32 bits car si on fait des micro-pas (donc on multiplie le nbr par 16) alors on peut monter à 329331 pas (pour 360°)
    
    if(angle < 0.)
        nombre_Pas = -angle;
    else
        nombre_Pas = angle;
    
    nombre_Pas /= ANGLE_PAS;            //Calcul le nombre de pas que devra faire le moteur
    nombre_Pas *= 100;                  //Rajoute la valeur après le réducteur 1:100
    
//Gère le sens de rotation
    if(numMoteur == MOTEUR_X)
    {
        nombre_Pas *= NEMA_X.VITESSE;       //On multiplie par la vitesse du moteur 
        
        if(angle > 0.)
            Envoi_Sens_Pas_a_Pas(MOTEUR_X, SENS_HORAIRE);
        else if(angle < 0.)
            Envoi_Sens_Pas_a_Pas(MOTEUR_X, SENS_ANTI_HORAIRE);
        
        delay_ms(1);
        NEMA_X.CONSIGNE_TOUR = nombre_Pas;
    }
    else if(numMoteur == MOTEUR_Z)
    {
        nombre_Pas *= NEMA_Z.VITESSE;   //On multiplie par la vitesse du moteur 
        
        if(angle > 0.)
            Envoi_Sens_Pas_a_Pas(MOTEUR_Z, SENS_HORAIRE);
        else if(angle < 0.)
            Envoi_Sens_Pas_a_Pas(MOTEUR_Z, SENS_ANTI_HORAIRE);
        
        delay_ms(1);
        NEMA_Z.CONSIGNE_TOUR = nombre_Pas;
    }
}


void Envoi_Pas_a_Pas_dynamique(void)
{
    if(NEMA_X.NBR_TOUR != NEMA_X.CONSIGNE_TOUR) //Si la consigne d'angle diffère de la position actuelle
    {
        NEMA_X.EN_MOUVEMENT = Oui;
        
        CLK_X = Active;
        delay_us(NEMA_X.DELAI_EXCITATION);
        CLK_X = Desactive;
        if(NEMA_Z.EN_MOUVEMENT == Oui)      //Permet d'être plus rapide et ne pas attendre pour rien
            delay_us(100);  //100
        else
            delay_us(NEMA_X.DELAI_EXCITATION);
        
        if(NEMA_X.NBR_TOUR < NEMA_X.CONSIGNE_TOUR)
            NEMA_X.NBR_TOUR++;
        if(NEMA_X.NBR_TOUR > NEMA_X.CONSIGNE_TOUR)
            NEMA_X.NBR_TOUR--;
    }
    else
    {
        if(NEMA_X.EN_MOUVEMENT == Oui)
        {
//            NEMA_X.ANGLE = NEMA_X.CONSIGNE; //Le moteur à donc atteint sa consigne
            NEMA_X.ANGLE = Calcul_angle_actuel_Pas_a_Pas(NEMA_X); //Le moteur à donc atteint sa consigne (presque...)
            NEMA_X.EN_MOUVEMENT = Non;      //Le moteur n'est plus en mouvement
            NEMA_X.NBR_TOUR = 0;
            NEMA_X.CONSIGNE_TOUR = 0;
//            envoyer_String_UART(UART2_.ID_UART, "Mouvement Terminer X\n");
        }
    }
    
    
    if(NEMA_Z.NBR_TOUR != NEMA_Z.CONSIGNE_TOUR)
    {
        NEMA_Z.EN_MOUVEMENT = Oui;
        
        CLK_Z = Active;
        delay_us(NEMA_Z.DELAI_EXCITATION);
        CLK_Z = Desactive;
        if(NEMA_X.EN_MOUVEMENT == Oui)      //Permet d'être plus rapide et ne pas attendre pour rien
            delay_us(100);  //100
        else
            delay_us(NEMA_Z.DELAI_EXCITATION);
        
        if(NEMA_Z.NBR_TOUR < NEMA_Z.CONSIGNE_TOUR)
            NEMA_Z.NBR_TOUR++;
        if(NEMA_Z.NBR_TOUR > NEMA_Z.CONSIGNE_TOUR)
            NEMA_Z.NBR_TOUR--;
    }
    else
    {
        if(NEMA_Z.EN_MOUVEMENT == Oui)
        {
//            NEMA_Z.ANGLE = NEMA_Z.CONSIGNE;
            NEMA_Z.ANGLE = Calcul_angle_actuel_Pas_a_Pas(NEMA_Z); //Le moteur à donc atteint sa consigne (presque...)
            NEMA_Z.EN_MOUVEMENT = Non;
            NEMA_Z.NBR_TOUR = 0;
            NEMA_Z.CONSIGNE_TOUR = 0;
//            envoyer_String_UART(UART2_.ID_UART, "Mouvement Terminer Z\n");
        }
    }
}


u8 Envoi_Sens_Pas_a_Pas(u8 numMoteur, u8 sens)
{
    if(numMoteur == MOTEUR_X)
    {
        if(sens == SENS_HORAIRE)
            DIR_X = 0;
        else
            DIR_X = 1;
        
        NEMA_X.DIRECTION = DIR_X;
        return OK;
    }
    
    else if(numMoteur == MOTEUR_Z)
    {
        if(sens == SENS_HORAIRE)
            DIR_Z = 0;
        else
            DIR_Z = 1;
        
        NEMA_Z.DIRECTION = DIR_Z;
        return OK;
    }
    
    return ERREUR;
}


void Configuration_Vitesse_Pas_a_Pas(u8 numMoteur, u8 mode)
{
    if(mode == MODE_RAPIDE)
    {
        if(numMoteur == MOTEUR_X)
        {
            NEMA_X.VITESSE = MODE_RAPIDE;
            NEMA_X.DELAI_EXCITATION = delai_Excitation_mode_rapide - temps_je_sais_pas_pk_faut_l_enlever_mais_faut_l_enlever;
                    
            Configuration_Driver(X_POSITION_MD1, 0);
            Configuration_Driver(X_POSITION_MD2, 0);
        }
        else if(numMoteur == MOTEUR_Z)
        {
            NEMA_Z.VITESSE = MODE_RAPIDE;
            NEMA_Z.DELAI_EXCITATION = delai_Excitation_mode_rapide - temps_je_sais_pas_pk_faut_l_enlever_mais_faut_l_enlever;
            
            Configuration_Driver(Z_POSITION_MD1, 0);
            Configuration_Driver(Z_POSITION_MD2, 0);
        }
    }
    if(mode == MODE_DEMI_PAS)
    {
        if(numMoteur == MOTEUR_X)
        {
            NEMA_X.VITESSE = MODE_DEMI_PAS;
            NEMA_X.DELAI_EXCITATION = delai_Excitation_mode_demi_pas - temps_je_sais_pas_pk_faut_l_enlever_mais_faut_l_enlever;
            
            Configuration_Driver(X_POSITION_MD1, 1);
            Configuration_Driver(X_POSITION_MD2, 0);
        }
        else if(numMoteur == MOTEUR_Z)
        {
            NEMA_Z.VITESSE = MODE_DEMI_PAS;
            NEMA_Z.DELAI_EXCITATION = delai_Excitation_mode_demi_pas - temps_je_sais_pas_pk_faut_l_enlever_mais_faut_l_enlever;
            
            Configuration_Driver(Z_POSITION_MD1, 1);
            Configuration_Driver(Z_POSITION_MD2, 0);
        }
    }
    if(mode == MODE_QUART_PAS)
    {
        if(numMoteur == MOTEUR_X)
        {
            NEMA_X.VITESSE = MODE_QUART_PAS;
            NEMA_X.DELAI_EXCITATION = delai_Excitation_mode_quart_pas - temps_je_sais_pas_pk_faut_l_enlever_mais_faut_l_enlever;
            
            Configuration_Driver(X_POSITION_MD1, 0);
            Configuration_Driver(X_POSITION_MD2, 1);
        }
        else if(numMoteur == MOTEUR_Z)
        {
            NEMA_Z.VITESSE = MODE_QUART_PAS;
            NEMA_Z.DELAI_EXCITATION = delai_Excitation_mode_quart_pas - temps_je_sais_pas_pk_faut_l_enlever_mais_faut_l_enlever;
            
            Configuration_Driver(Z_POSITION_MD1, 0);
            Configuration_Driver(Z_POSITION_MD2, 1);
        }
    }
    if(mode == MODE_MICRO_PAS)
    {
        if(numMoteur == MOTEUR_X)
        {
            NEMA_X.VITESSE = MODE_MICRO_PAS;
            NEMA_X.DELAI_EXCITATION = delai_Excitation_mode_micro_pas - temps_je_sais_pas_pk_faut_l_enlever_mais_faut_l_enlever;
            
            Configuration_Driver(X_POSITION_MD1, 1);
            Configuration_Driver(X_POSITION_MD2, 1);
        }
        else if(numMoteur == MOTEUR_Z)
        {
            NEMA_Z.VITESSE = MODE_MICRO_PAS;
            NEMA_Z.DELAI_EXCITATION = delai_Excitation_mode_micro_pas - temps_je_sais_pas_pk_faut_l_enlever_mais_faut_l_enlever;
            
            Configuration_Driver(Z_POSITION_MD1, 1);
            Configuration_Driver(Z_POSITION_MD2, 1);
        }
    }
}


float Calcul_angle_actuel_Pas_a_Pas(moteur_nema Moteur)
{
    float angle_actuel;
    
//Calcul de l'angle actuellement effectué
    angle_actuel = ANGLE_PAS * Moteur.NBR_TOUR;
    angle_actuel /= 100;
    angle_actuel /= Moteur.VITESSE;
    
//Calcul de l'angle actuel
    if(Moteur.DIRECTION == SENS_HORAIRE)
        angle_actuel = Moteur.ANGLE - angle_actuel;
    else if(Moteur.DIRECTION == SENS_ANTI_HORAIRE)
        angle_actuel += Moteur.ANGLE;
    
    return angle_actuel;
}