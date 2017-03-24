/* 
 * File:   Interruptions.h
 * Author: azerty
 *
 * Created on 19 novembre 2016, 12:50
 */


#include "Define basiques.h"


void __attribute__((interrupt, no_auto_psv)) _T1Interrupt(void);
void __attribute__((interrupt, no_auto_psv)) _T2Interrupt(void);
void __attribute__((interrupt, no_auto_psv)) _T3Interrupt(void);
void __attribute__((interrupt, no_auto_psv)) _T4Interrupt(void);
void __attribute__((interrupt, no_auto_psv)) _T5Interrupt(void);
void __attribute__((interrupt, no_auto_psv)) _U1RXInterrupt(void);
void __attribute__((interrupt, no_auto_psv)) _U2RXInterrupt(void);
void __attribute__((interrupt, no_auto_psv)) _U1TXInterrupt(void);
void __attribute__((interrupt, no_auto_psv)) _U2TXInterrupt(void);