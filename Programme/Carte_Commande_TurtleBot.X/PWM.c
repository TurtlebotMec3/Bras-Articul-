#include "Configuration Bits.h"

/*************** Variables Globales ****************/
servomoteur SAVOX;
servomoteur MG996;
servomoteur CAMERA;
/***************************************************/

/*************** Variables Locales ****************/

/***************************************************/

void Envoi_PWM_brut(u8 numMoteur, s16 valeur)
{
    u16 valeur_absolue = 0;
    
    if  (valeur < 0)
        valeur_absolue = -valeur;
    else
        valeur_absolue = (u16)valeur;
    
    if (numMoteur == MOTEUR_SAVOX)
        SAVOX_REGISTRE = valeur_absolue;
    
    else if (numMoteur == MOTEUR_MG996)
        PWM1bis_REGISTRE = valeur_absolue;
    
    else if (numMoteur == MOTEUR_PWM1ter)
        PW1ter_REGISTRE = valeur_absolue;
    
    else if (numMoteur == MOTEUR_CAMERA)
        CAMERA_REGISTRE = valeur_absolue;
}


void Envoi_PWM_angle(u8 numMoteur, float angle)
{
    u16 valeur = 0;
    
    if(numMoteur == MOTEUR_SAVOX)
    {
        valeur = (SAVOX_VALEUR_PWM_MAX - SAVOX_VALEUR_PWM_MIN) / SAVOX_ANGLE_MAX;
        angle = SAVOX_ANGLE_MAX - angle;    //Inverse la valeur car on veut que l'angle 0° soit quand le moteur est au repos (proche de la base) et 180° l'angle le plus élevé
        valeur *= angle;
        valeur += SAVOX_VALEUR_PWM_MIN;
    }
    else if(numMoteur == MOTEUR_MG996)
    {
        
    }
    else if(numMoteur == MOTEUR_CAMERA)
    {
        valeur = (CAMERA_VALEUR_PMW_MAX - CAMERA_VALEUR_PMW_MIN) / CAMERA_ANGLE_MAX;
//        angle = CAMERA_ANGLE_MAX - angle;
        valeur *= angle;
        valeur += CAMERA_VALEUR_PMW_MIN;
    }
    else
    {
        
    }
    
    Envoi_PWM_brut(numMoteur, valeur);
}


void Envoi_PWM_angle_dynamique(u8 numMoteur, float angle)
{
    u16 valeur = 0;
    
    if(numMoteur == MOTEUR_SAVOX)
    {
        valeur = (SAVOX_VALEUR_PWM_MAX - SAVOX_VALEUR_PWM_MIN) / SAVOX_ANGLE_MAX;
        angle = SAVOX_ANGLE_MAX - angle;    //Inverse la valeur car on veut que l'angle 0° soit quand le moteur est au repos (proche de la base) et 180° l'angle le plus élevé
        valeur *= angle;
        valeur += SAVOX_VALEUR_PWM_MIN;
        
        SAVOX.PWM_CONSIGNE = valeur;
        SAVOX.BASE_TEMPS = COMPTEUR_1ms;
    }
    else if(numMoteur == MOTEUR_MG996)
    {
        
    }
    else if(numMoteur == MOTEUR_CAMERA)
    {
        valeur = (CAMERA_VALEUR_PMW_MAX - CAMERA_VALEUR_PMW_MIN) / CAMERA_ANGLE_MAX;
//        angle = SAVOX_ANGLE_MAX - angle;    //Inverse la valeur car on veut que l'angle 0° soit quand le moteur est au repos (proche de la base) et 180° l'angle le plus élevé
        valeur *= angle;
        valeur += CAMERA_VALEUR_PMW_MIN;
        
        CAMERA.PWM_CONSIGNE = valeur;
        CAMERA.BASE_TEMPS = COMPTEUR_1ms;
    }
    else
    {
        
    }
}


void Envoi_PWM_dynamique(void)
{
    if(SAVOX.PWM != SAVOX.PWM_CONSIGNE)
    {
        SAVOX.EN_MOUVEMENT = Oui;
        
        Envoi_PWM_brut(MOTEUR_SAVOX, SAVOX.PWM);
        
        if((COMPTEUR_1ms - SAVOX.BASE_TEMPS) > SAVOX.VITESSE)
        {
            SAVOX.BASE_TEMPS = COMPTEUR_1ms;
            
            if(SAVOX.PWM < SAVOX.PWM_CONSIGNE)
                SAVOX.PWM++;
            else if(SAVOX.PWM > SAVOX.PWM_CONSIGNE)
                SAVOX.PWM--;
        }
    }
    else
    {
        if(SAVOX.EN_MOUVEMENT == Oui)
        {
            SAVOX.EN_MOUVEMENT = Non;
            SAVOX.ANGLE = Calcul_angle_actuel_PWM(SAVOX);
//            SAVOX.PWM = 0;
//            SAVOX.PWM_CONSIGNE = 0;
        }
    }
    
    
    if(MG996.PWM != MG996.PWM_CONSIGNE)
    {
        MG996.EN_MOUVEMENT = Oui;
        
        Envoi_PWM_brut(MOTEUR_MG996, MG996.PWM);
        
        if((COMPTEUR_1ms - MG996.BASE_TEMPS) > MG996.VITESSE)
        {
            MG996.BASE_TEMPS = COMPTEUR_1ms;
            
            if(MG996.PWM < MG996.PWM_CONSIGNE)
                MG996.PWM++;
            else if(MG996.PWM > MG996.PWM_CONSIGNE)
                MG996.PWM--;
        }
    }
    else
    {
        if(MG996.EN_MOUVEMENT == Oui)
        {
            MG996.EN_MOUVEMENT = Non;
            MG996.ANGLE = Calcul_angle_actuel_PWM(MG996);
//            MG996.PWM = 0;
//            MG996.PWM_CONSIGNE = 0;
        }
    }
    
    
    if(CAMERA.PWM != CAMERA.PWM_CONSIGNE)
    {
        CAMERA.EN_MOUVEMENT = Oui;
        
        Envoi_PWM_brut(MOTEUR_CAMERA, CAMERA.PWM);
        
        if((COMPTEUR_1ms - CAMERA.BASE_TEMPS) > CAMERA.VITESSE)
        {
            CAMERA.BASE_TEMPS = COMPTEUR_1ms;
            
            if(CAMERA.PWM < CAMERA.PWM_CONSIGNE)
                CAMERA.PWM++;
            else if(CAMERA.PWM > CAMERA.PWM_CONSIGNE)
                CAMERA.PWM--;
        }
    }
    else
    {
        if(CAMERA.EN_MOUVEMENT == Oui)
        {
            CAMERA.EN_MOUVEMENT = Non;
            CAMERA.ANGLE = Calcul_angle_actuel_PWM(CAMERA);
//            CAMERA.PWM = 0;
//            CAMERA.PWM_CONSIGNE = 0;
        }
    }
}


float Calcul_angle_actuel_PWM(servomoteur Moteur)
{
    float angle_actuel;
    
//Calcul de l'angle actuellement effectué
    angle_actuel = Moteur.PWM + SAVOX_VALEUR_PWM_MIN;
    angle_actuel *= 180;
    angle_actuel /= SAVOX_VALEUR_PWM_MAX - SAVOX_VALEUR_PWM_MIN;

    return angle_actuel;
}