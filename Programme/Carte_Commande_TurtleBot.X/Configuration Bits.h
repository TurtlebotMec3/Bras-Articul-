#include <p33FJ128MC802.h>
#include <xc.h>
#include <libpic30.h>
#include <stdio.h>
#include <stdlib.h>
#include <string.h>

#include "Define basiques.h"
#include "init.h"
#include "UART.h"
#include "Interruptions.h"
#include "PWM.h"
#include "74HC595.h"
#include "Moteur Pas a Pas.h"
#include "LibrairieFonctions.h"


        //Macro pour les tempos
#define FOSC        80017142LL     //80017142LL      //80000000
#define FCY         (FOSC/2)
#define delay_us(x) __delay32(((x*FCY)/1000000L))   // delays x us
#define delay_ms(x) __delay32(((x*FCY)/1000L))      // delays x ms

#define temps_je_sais_pas_pk_faut_l_enlever_mais_faut_l_enlever     150



/****************Variables Globales Externes****************/
        //Variable Moteur Pas à Pas
    extern u8 CONFIGURATION_EN_MOTOR;
    
        //Variables Shift Register
    extern u8 DATA_SHIFT_REGISTER;
    
        //Variables UART
    extern uart UART1_;
    extern uart UART2_;
    
    extern char PILE_FIFO[PILE_FIFO_MAX][UART1_TAILLE_BUFFER];
    extern u8 COMPTEUR_PILE_FIFO;
    
        //Variables Timers
    extern u32 COMPTEUR_10ms;
    extern u32 COMPTEUR_1ms;
    
        //Variables Servomoteurs
    extern servomoteur SAVOX;
    extern servomoteur MG996;
    extern servomoteur CAMERA;
    
        //Variables Moteurs Pas à Pas
    extern moteur_nema NEMA_X;
    extern moteur_nema NEMA_Z;
/**************************************************/