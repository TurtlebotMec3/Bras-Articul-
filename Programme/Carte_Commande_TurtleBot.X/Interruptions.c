//#include "Interruptions.h"
//#include "UART.h"
//#include "74HC595.h"
//#include "Moteur Pas a Pas.h"
//#include "init.h"
//#include "PWM.h"
#include "Configuration Bits.h"

/**********************Variables Globales************************/
u32 COMPTEUR_10ms = 0;
u32 COMPTEUR_1ms = 0;
/****************************************************************/

/**********************Variables Locales*************************/
u32 Compteur_Reception_UART = 0;
/****************************************************************/

void __attribute__((interrupt, no_auto_psv)) _T1Interrupt(void)
{
    FLAG_TIMER_SERVOMOTEURS = 0;
    COMPTEUR_1ms++;
}


void __attribute__((interrupt, no_auto_psv)) _T2Interrupt(void)
{
    _T2IF = 0;
    
}


void __attribute__((interrupt, no_auto_psv)) _T3Interrupt(void)
{
    _T3IF = 0;
    
}


void __attribute__((interrupt, no_auto_psv)) _T4Interrupt(void)     //INTERRUPTION      toute les 10ms
{
    FLAG_TIMER_10ms = 0;
//    _LATB5 = !_LATB5;
    COMPTEUR_10ms++;        //Incrémente le compteur pour les millis() de 10ms
}


void __attribute__((interrupt, no_auto_psv)) _T5Interrupt(void)
{
    _T5IF = 0;
    
}


void __attribute__((interrupt, no_auto_psv)) _U1RXInterrupt(void)
{
    _U1RXIF = 0;
    
    if(UART1_.COMPTEUR_RECEPTION == 0)  //Si on reçoit le premier caractère alors on lance le timer
        Compteur_Reception_UART = COMPTEUR_1ms;
    else if(COMPTEUR_1ms - Compteur_Reception_UART > 10)     //Si on dépasse le temps règlementaire entre 2 caractères
    {
        Compteur_Reception_UART = COMPTEUR_1ms;
        UART1_.COMPTEUR_RECEPTION = 0;       //Alors on reset le compteur
    }
        
    if(UART1_.COMPTEUR_RECEPTION > UART1_TAILLE_BUFFER)     //Si la réception n'est pas bonne et qu'on reçoit plus que la taille règlementaire
    {
        envoyer_String_UART(UART2_.ID_UART, "Erreur buffer UART1\n");
        UART1_.COMPTEUR_RECEPTION = 0;       //Alors on reset le compteur
    }
    
    UART1_.BUFFER[UART1_.COMPTEUR_RECEPTION] = U1RXREG;     //Enregitre dans le buffer
    
    if(UART1_.BUFFER[UART1_.COMPTEUR_RECEPTION] == '\n')        //Si le dernier carac de la trame est arrivé (repéré par le caractère \n (retour à la ligne))
    {
        UART1_.FLAG_TRAITEMENT = Active;    //On active le flag de traitement de la trame nouvellement reçue
    }
    UART1_.COMPTEUR_RECEPTION++;        //Si on a pas reçu le caractère de fin de trame et qu'il n'y a pas d'erreur alors on incrémente le compteur
                                                    //Permet d'enregistrer le nouveau caractère dans la case suivante du tableau
}


void __attribute__((interrupt, no_auto_psv)) _U2RXInterrupt(void)
{
    _U2RXIF = 0;
    
    if(UART1_.COMPTEUR_RECEPTION == 0)  //Si on reçoit le premier caractère alors on lance le timer
        Compteur_Reception_UART = COMPTEUR_1ms;
    else if(COMPTEUR_1ms - Compteur_Reception_UART > 10)     //Si on dépasse le temps règlementaire entre 2 caractères
    {
        Compteur_Reception_UART = COMPTEUR_1ms;
        UART1_.COMPTEUR_RECEPTION = 0;       //Alors on reset le compteur
    }
        
    if(UART1_.COMPTEUR_RECEPTION > UART1_TAILLE_BUFFER)     //Si la réception n'est pas bonne et qu'on reçoit plus que la taille règlementaire
    {
        envoyer_String_UART(UART2_.ID_UART, "Erreur buffer UART1\n");
        UART1_.COMPTEUR_RECEPTION = 0;       //Alors on reset le compteur
    }
    
    UART1_.BUFFER[UART1_.COMPTEUR_RECEPTION] = U2RXREG;     //Enregitre dans le buffer
    
    if(UART1_.BUFFER[UART1_.COMPTEUR_RECEPTION] == '\n')        //Si le dernier carac de la trame est arrivé (repéré par le caractère \n (retour à la ligne))
    {
        UART1_.FLAG_TRAITEMENT = Active;    //On active le flag de traitement de la trame nouvellement reçue
    }
    UART1_.COMPTEUR_RECEPTION++;        //Si on a pas reçu le caractère de fin de trame et qu'il n'y a pas d'erreur alors on incrémente le compteur
                                                    //Permet d'enregistrer le nouveau caractère dans la case suivante du tableau
}                                                   


void __attribute__((interrupt, no_auto_psv)) _U1TXInterrupt(void)
{
    _U1TXIF = 0;
    
}


void __attribute__((interrupt, no_auto_psv)) _U2TXInterrupt(void)
{
    _U2TXIF = 0;
    
}