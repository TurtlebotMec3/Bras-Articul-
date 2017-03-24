/* 
 * File:   init.h
 * Author: user
 *
 * Created on 7 novembre 2016, 18:40
 */
#include "Define basiques.h"


/******************************************************************************/
/******************************* Interruptions  *******************************/
/******************************************************************************/
//Attribution des Niveaux de Priorités
#define PRIO_INTER_TIMER1               4   
#define PRIO_INTER_TIMER2               0   
#define PRIO_INTER_TIMER3               0  
#define PRIO_INTER_TIMER4               5   
#define PRIO_INTER_TIMER5               0   
#define PRIO_INTER_UART1_TX             0  
#define PRIO_INTER_UART1_RX             7
#define PRIO_INTER_I2C_MAITRE           0   // I²C 
#define PRIO_INTER_I2C_ESCLAVE          0   // I²C 
#define PRIO_INTER_UART2_TX             0   
#define PRIO_INTER_UART2_RX             7   


//Attribution des Interruptions activés 
#define ACTIV_INTER_UART1_TX            0        // UART
#define ACTIV_INTER_UART1_RX            Active   // UART
#define ACTIV_INTER_TIMER3              0   
#define ACTIV_INTER_TIMER2              0   
#define ACTIV_INTER_TIMER1              Active   
#define ACTIV_INTER_UART2_TX            0        // UART
#define ACTIV_INTER_UART2_RX            Active   // UART
#define ACTIV_INTER_TIMER4              0   
#define ACTIV_INTER_TIMER5              0   
#define ACTIV_INTER_I2C_MAITRE          0   
#define ACTIV_INTER_I2C_ESCLAVE         0   


//Noms des activateurs de Timers
#define TIMER_SERVOMOTEURS              T1CONbits.TON
#define TIMER2                          T2CONbits.TON
#define TIMER3                          T3CONbits.TON
#define TIMER_10ms                      T4CONbits.TON
#define TIMER5                          T5CONbits.TON


//Noms des Flags pour les Timers
#define FLAG_TIMER_SERVOMOTEURS         _T1IF
#define FLAG_TIMER2                     _T2IF
#define FLAG_TIMER3                     _T3IF
#define FLAG_TIMER_10ms                 _T4IF
#define FLAG_TIMER5                     _T5IF
/******************************************************************************/

void init_Clock(void);
void init_UART(void);
void init_Timer(void);
void init_PWM(void);
void init_I2C(void);
void init_Priorite_Interruption(void);
void init_GPIO(void);
void init_Moteurs(void);