//#include <p33FJ128MC802.h>
//
//#include "init.h"
//#include "UART.h"
#include "Configuration Bits.h"

void init_Clock(void)
{
//                        F = 80MHz
//Init Oscilateur               
    OSCTUNbits.TUN = 0;        //SEMBLE NE PAS FONCTIONNER ....

    //New Osc = FRC sans PLL
    OSCCONbits.NOSC = 0b000;
    OSCCONbits.OSWEN = 1;
    while(OSCCONbits.OSWEN != 0);


    // Configure PLL prescaler, PLL postscaler, PLL divisor
    // Fext = Fin * M / (N1 * N2)
    // F =  80,017 142 MHz      Si PLLFBD = 152
    // F = 8

    PLLFBD = 150; // M = 152  //Pour 80MHz
//    PLLFBD = 15; // M = 152  //Pour 8MHz
    CLKDIVbits.PLLPOST= 0b00; // N2 = 2 
    CLKDIVbits.PLLPRE= 5; // N1 = 7

    CLKDIVbits.DOZE = 0b000; //FRC = 1:1 FRC
//    CLKDIVbits.DOZE = 0b011; //FRC = 1:8 FRC        //FOSC = 10MHz

    //On switch sur la nouvelle clock avec PLL
    OSCCONbits.NOSC = 0b001;
    OSCCONbits.OSWEN = 1;
    while(OSCCONbits.OSWEN != 0);

    // Wait for PLL to lock
    while(OSCCONbits.LOCK!=1);
} 
    
void init_UART(void)
{
//Init UART
    UART1_.ID_UART = 0;
    UART2_.ID_UART = 1;
    
    //Mapping
    // Mapping UART1 : Communication Odroid XU4
    _U1RXR	= 0x02;		// IN	: UART1 RX sur RP2
    _RP6R	= 0x03;		// OUT	: UART1 TX sur RP6

    // Mapping UART2 : Débug Ordi
    _U2RXR	= 0x03;         // IN	: UART2 RX sur RP3
    _RP4R	= 0x05;         // OUT	: UART2 TX sur RP4

    
/**************************   UART 1  **************************/
    // U1STA
    U1MODEbits.UARTEN 	= 0;		// Asctivation de l'uart1
    U1STAbits.ADDEN 	= 0;		// Address detect mode desactive
//    U1STAbits.URXISEL   = 0;		// Interruption sur RX à partir d'un caractere
    U1STAbits.UTXBRK 	= 0;		// Sync Break desactivee
    U1STAbits.UTXINV 	= 0;		// Polarite non inversee

    //U1BRG = 1041;
    U1BRG = (FCY/UART1_BAUD_RATE/4) - 1;
//    U1BRG = 86;
    
    U1STAbits.UTXISEL0 	= 0;		// TX interruption sur transmission d'un caractere
    U1STAbits.UTXISEL1 	= 0;		// TX interruption sur transmission d'un caractere
    U1STAbits.URXISEL0 	= 0;		// RX interruption sur reception d'un caractere
    U1STAbits.URXISEL1 	= 0;		// RX interruption sur reception d'un caractere

    // U1MODE
    U1MODEbits.STSEL	= 0;		// 1 bit d'arret
    U1MODEbits.PDSEL	= 0;		// 8 bit de donnee, pas de parite
    U1MODEbits.BRGH     = 1;		// Vitesse normale
    U1MODEbits.URXINV 	= 0;		// Polarite non inversee

    U1MODEbits.ABAUD 	= 0;		// Baud non automatique
    U1MODEbits.LPBACK 	= 0;		// Mode Loopback desactive
    U1MODEbits.WAKE 	= 0;		// Wake-up desactive
    U1MODEbits.UEN      = 0;		// TX et RX actif, CTS et RTS non
    U1MODEbits.RTSMD 	= 0;		// Non utilise
    U1MODEbits.IREN 	= 0;		// IR non utilise
    U1MODEbits.USIDL 	= 0;		// Mode continu en IDLE

    U1MODEbits.UARTEN 	= 1;		// Activation de l'uart1
    U1STAbits.UTXEN 	= 1;		// TX actif
   
    
/**************************   UART 2  **************************/
    // U2STA
    U2MODEbits.UARTEN 	= 0;		// Desctivation de l'uart2
    U2STAbits.ADDEN 	= 0;		// Address detect mode desactive
//    U2STAbits.URXISEL 	= 0;		// Interruption sur RX d'un caractère
    U2STAbits.UTXBRK 	= 0;		// Sync Break desactivee

    //U2BRG = 1041;
    U2BRG = (FCY/UART2_BAUD_RATE/4) - 1;
//    U2BRG = 86;     //Baud à 115200
    
    U2STAbits.UTXINV 	= 0;		// Polarite non inversee
    U2STAbits.UTXISEL0 	= 0;		// TX interruption sur reception d'un caractere
    U2STAbits.UTXISEL1 	= 0;		// TX interruption sur reception d'un caractere
    U2STAbits.URXISEL0 	= 0;		// RX interruption sur reception d'un caractere
    U2STAbits.URXISEL1 	= 0;		// RX interruption sur reception d'un caractere

    // U2MODE
    U2MODEbits.STSEL	= 0;		// 1 bit d'arret
    U2MODEbits.PDSEL	= 0;		// 8 bit de donnee, pas de parite
    U2MODEbits.BRGH     = 1;		// Vitesse élevé
    U2MODEbits.URXINV 	= 0;		// Polarite non inversee
    U2MODEbits.ABAUD 	= 0;		// Baud non automatique
    U2MODEbits.LPBACK 	= 0;		// Mode Loopback desactive
    U2MODEbits.WAKE 	= 0;		// Wake-up desactive
    U2MODEbits.UEN 	= 0;		// TX et RX actif, CTS et RTS non
    U2MODEbits.RTSMD 	= 0;		// Non utilise
    U2MODEbits.IREN 	= 0;		// IR non utilise
    U2MODEbits.USIDL 	= 0;		// Mode continu en IDLE

    U2MODEbits.UARTEN 	= 1;		// Activation de l'uart2
    U2STAbits.UTXEN 	= 1;		// TX actif
}

void init_Timer(void)
{
//Init Timer
        //Timer 1   (Pour Servomoteurs)
    TIMER_SERVOMOTEURS = Desactive;
    T1CONbits.TCS = 0; //clock sur FCY
    T1CONbits.TGATE = 0; //Mode Gate désactivé
    T1CONbits.TCKPS = 0b10; //Divise la fréquence par 1 (prescaler 1:64)
    TMR1 = 0x00; //Reset du timer

    // FOSC = 80MHz MhZ, FCY = FOSC/2 = 40MHz
    // T = 25ns
    // Presacler 1 : 1 => T = 1.6µs
    PR1 = 625; //décompte de 1ms

    //IPC6bits.T4IP = 0x03;       //priorité à 3 --> définit dans la table des interrupt
    FLAG_TIMER_SERVOMOTEURS = 0;  //Reset du Flag
    IEC0bits.T1IE = Active; //Enable Timer4 interrupt
    
    COMPTEUR_1ms = 0;  //Reset du Compteur de 500µsec
    TIMER_SERVOMOTEURS = Active;
    
//        //Timer 4   
//    TIMER_10ms = Desactive;
//    T4CONbits.TCS = 0; //clock sur FCY
//    T4CONbits.T32 = 0; //Timer 16 bits
//    T4CONbits.TGATE = 0; //Mode Gate désactivé
//    T4CONbits.TCKPS = 0b11; //Divise la fréquence par 1 (prescaler 1:256)
//    TMR4 = 0x00; //Reset du timer
//
//    // FOSC = 80MHz MhZ, FCY = FOSC/2 = 40MHz
//    // T = 25ns
//    // Presacler 1 : 1 => T = 6.4µs
//    PR4 = 1562; //décompte de 9.9968ms
//
//    //IPC6bits.T4IP = 0x03;       //priorité à 3 --> définit dans la table des interrupt
//    FLAG_TIMER_10ms = 0;  //Reset du Flag
//    IEC1bits.T4IE = Active;     //Enable Timer4 interrupt
//    
//    COMPTEUR_10ms = 0;  //Reset du Compteur de 10ms
//    TIMER_10ms = Active;
}
   


void init_PWM(void)
{
//Init PWM
    //****************
    //PWM 1
    //****************
    P1TCONbits.PTEN         = Active;       //PWM1 ON

    P1TCONbits.PTSIDL       = 1;                //continu en idle
    P1TCONbits.PTOPS        = 0;                //Postscaller 1 : 1
    P1TCONbits.PTCKPS       = 0b11;                //Prescaller  1 : 64
//    P1TCONbits.PTCKPS       = 0b00;                //Prescaller  1 : 1

    P1TCONbits.PTMOD        = 0;		//Base de temps en free running mode (11 bits vmax = 2048)

    P1TPER                  = 2000;		//F=300Hz 11 bits   pour FOSC = 80MHz
//    P1TPER                  = 12121;		//F=300Hz    pour FOSC = 80MHz
    
    PWM1CON1bits.PMOD1      = 1;		//Mode indépendant             
    PWM1CON1bits.PMOD2      = 1;		//Mode indépendant             
    PWM1CON1bits.PMOD3      = 1;                //Mode indépendant         

//Configuration des pins PWM
    PWM1CON1bits.PEN1H      = Desactive;		//PWM1H1 inactif => I/O
    PWM1CON1bits.PEN1L      = Active;		//PWM1L1 pour PWM moteur X
    PWM1CON1bits.PEN2H      = Desactive;		//PWM1H2 inactif => I/O
    PWM1CON1bits.PEN2L      = Active;		//PWM1L2 pour PWM moteur droit
    PWM1CON1bits.PEN3H      = Desactive;		//PWM1H3 inactif => I/O
    PWM1CON1bits.PEN3L      = Active;		//PWM1L3 pour PWM moteur gauche


    //****************
    //PWM 2
    //****************
    P2TCONbits.PTEN         = Active;               //PWM2 ON

    P2TCONbits.PTSIDL       = 1;                //continu en idle
    P2TCONbits.PTOPS        = 0;                //Postscaller 1 : 1
    P2TCONbits.PTCKPS       = 0b11;                //Prescaller  1 : 64

    P2TPER                  = 2000;		//F=50Hz
    
    P2TCONbits.PTMOD        = 0;		//Base de temps en free running mode (11 bits vmax = 2048)
    PWM2CON1bits.PMOD1      = 1;		//Mode indépendant       
    
    PWM2CON1bits.PEN1H      = Desactive;                //PWM2H1 inactif => I/O
    PWM2CON1bits.PEN1L      = Active;                   //PWM2L1 actif

    // Mise a zero des PWM
    P1DC1       = 0;
    P1DC2       = 0;
    P1DC3       = 0;
    P2DC1       = 0;
}   
 


void init_I2C(void)         //A TERMINER!!
{
//Init I2C  
    _I2CEN = 1;         //Active I2C
    
    _IPMIEN = 0;        //Intelligent Peripheral Management Interface                 VOIR A QUOI CA SERT!
    _A10M = 0;           //Eclave a une adresse 7 bits;
    _ACKEN = 0;         //On désactive les bits de confirmation (Inutile pour contrôler un 74HC595)
    _RCEN = 0;          //Désactive la réception
    _PEN = 0;           //Désactive le bit de stop
    _SEN = 0;           //Désactive le bit de start
    _RSEN = 1;          // Active la condtion pour la répétition du bit de start 
    _DISSLW = 1;        // Vitesse de balayage standard (100kHz)
}    



void init_Priorite_Interruption(void)
{

//Init Priorités et Interruptions
    // INTCON2
    INTCON2bits.ALTIVT	= 0;        // Table de Vecteur standard
    INTCON2bits.INT0EP  = 0;        // Interruption INT0 sur front montant

    //Remise à zéro des flags
    IFS0 = 0;
    IFS1 = 0;
    IFS2 = 0;
    IFS3 = 0;
    IFS4 = 0;
    
// ****************
// Priorites
// ****************
    // IPC0
    IPC0bits.T1IP		= PRIO_INTER_TIMER1;		//
    IPC0bits.OC1IP		= 0x00;				//
    IPC0bits.IC1IP		= 0x00;				//
    IPC0bits.INT0IP		= 0x00;                         //Pas de INT0

    // IPC1
    IPC1bits.T2IP		= PRIO_INTER_TIMER2;		// Timer2
    IPC1bits.OC2IP		= 0x00;				//
    IPC1bits.IC2IP		= 0x00;				//
    IPC1bits.DMA0IP		= 0x00;				//

    // IPC2
    IPC3bits.U1TXIP             = PRIO_INTER_UART1_TX;
    IPC2bits.U1RXIP		= PRIO_INTER_UART1_RX;		// UART1 RX
    IPC2bits.SPI1IP		= 0x00;				//
    IPC2bits.SPI1EIP            = 0x00;				//
    IPC2bits.T3IP		= PRIO_INTER_TIMER3;		// Timer 3

    // IPC3
    IPC3bits.DMA1IP		= 0x00;				//
    IPC3bits.AD1IP		= 0x00;				//
    IPC3bits.U1TXIP		= 0x00;				//

    // IPC4
    IPC4bits.CNIP		= 0x00;				//
    IPC4bits.MI2C1IP            = PRIO_INTER_I2C_MAITRE;	// Maitre I2C1
    IPC4bits.SI2C1IP            = PRIO_INTER_I2C_ESCLAVE; 	// Esclave I2C1

    // IPC5
    IPC5bits.IC8IP		= 0x00;				//
    IPC5bits.IC7IP		= 0x00;				//
    IPC5bits.INT1IP		= 0x00;				//

    // IPC6
    IPC6bits.T4IP		= PRIO_INTER_TIMER4;		// Timer 4
    IPC6bits.OC4IP		= 0x00;				//
    IPC6bits.OC3IP		= 0x00;				//
    IPC6bits.DMA2IP		= 0x00;				//

    // IPC7
    IPC7bits.U2TXIP		= PRIO_INTER_UART2_TX;
    IPC7bits.U2RXIP		= PRIO_INTER_UART2_RX;		// UART2 RX
    IPC7bits.INT2IP		= 0x00;				//
    IPC7bits.T5IP		= PRIO_INTER_TIMER5;		//

    // IPC8
    IPC8bits.C1IP		= 0x00;				//
    IPC8bits.C1RXIP		= 0x00;				//
    IPC8bits.SPI2IP		= 0x00;				//
    IPC8bits.SPI2EIP            = 0x00;				//

    // IPC9
    IPC9bits.DMA3IP		= 0x00;			

    // IPC10
    // PAS de IPC10

    // IPC11
    IPC11bits.DMA4IP            = 0x00;
    IPC11bits.PMPIP		= 0x00;

    // IPC12
    // PAS de IPC12

    // IPC13
    // PAS de IPC13

    // IPC14
    IPC14bits.PWM1IP            = 0x00;                     //

    // IPC15
    IPC15bits.FLTA1IP           = 0x00;                     //
    IPC15bits.RTCIP		= 0x00;                     //
    IPC15bits.DMA5IP            = 0x00;                     //

    // IPC16
    IPC16bits.U2EIP		= 0x00;                     //
    IPC16bits.U1EIP		= 0x00;                     //
    IPC16bits.CRCIP		= 0x00;                     //

    // IPC17
    IPC17bits.C1TXIP            = 0x00;                     //
    IPC17bits.DMA7IP            = 0x00;                     //
    IPC17bits.DMA6IP            = 0x00;                     //

    // IPC18
    IPC18bits.FLTA2IP           = 0x00;                     //
    IPC18bits.PWM2IP            = 0x00;                     //

    //****************
    // Activation
    //****************
    // IEC0
    IEC0bits.DMA1IE		= 0;                            // NC
    IEC0bits.AD1IE		= 0;                    	// NC
    IEC0bits.U1TXIE		= ACTIV_INTER_UART1_TX;         // Interruption TX sur UART1
    IEC0bits.U1RXIE		= ACTIV_INTER_UART1_RX;         // Interruption RX sur UART1
    IEC0bits.SPI1IE		= 0;                            // NC
    IEC0bits.SPI1EIE            = 0;            		// NC
    IEC0bits.T3IE		= ACTIV_INTER_TIMER3;		// Interruption sur Timer3
    IEC0bits.T2IE		= ACTIV_INTER_TIMER2;		// Interruption sur Timer2
    IEC0bits.OC2IE		= 0;				// NC
    IEC0bits.IC2IE		= 0;				// NC
    IEC0bits.DMA0IE		= 0;				// NC
    IEC0bits.T1IE		= ACTIV_INTER_TIMER1;		// Interruption Timer1
    IEC0bits.OC1IE		= 0;				// NC
    IEC0bits.IC1IE		= 0;				// NC
    IEC0bits.INT0IE		= 0;                            // NC

    // IEC1
    IEC1bits.U2TXIE		= ACTIV_INTER_UART2_TX;         // Interruption TX sur UART2
    IEC1bits.U2RXIE		= ACTIV_INTER_UART2_RX;		// Interruption RX sur UART2
    IEC1bits.INT2IE		= 0;                    	// NC
    IEC1bits.T5IE		= ACTIV_INTER_TIMER5;    	// Interruption sur Timer5
    IEC1bits.T4IE		= ACTIV_INTER_TIMER4;		// Interruption sur Timer4
    IEC1bits.OC4IE		= 0;                            // NC
    IEC1bits.OC3IE		= 0;            		// NC
    IEC1bits.DMA2IE		= 0;				// NC
    IEC1bits.IC8IE		= 0;				// NC
    IEC1bits.IC7IE		= 0;				// NC
    IEC1bits.INT1IE		= 0;				// NC
    IEC1bits.CNIE		= 0;				// NC
    IEC1bits.MI2C1IE            = ACTIV_INTER_I2C_MAITRE;	// Interruption I2C MAITRE
    IEC1bits.SI2C1IE            = ACTIV_INTER_I2C_ESCLAVE;	// Interruption I2C ESCLAVE

    // IEC2
    IEC2bits.DMA4IE		= 0;				// NC
    IEC2bits.PMPIE		= 0;				// NC
    IEC2bits.DMA3IE		= 0;				// NC
    IEC2bits.C1IE		= 0;				// NC
    IEC2bits.C1RXIE		= 0;				// NC
    IEC2bits.SPI2IE		= 0;				// NC
    IEC2bits.SPI2EIE            = 0;				// NC

    // IEC3
    IEC3bits.FLTA1IE            = 0;				// NC
    IEC3bits.RTCIE		= 0;				// NC
    IEC3bits.DMA5IE		= 0;				// NC
    IEC3bits.PWM1IE		= 0;            		// NC

    // IEC4
    IEC4bits.FLTA2IE            = 0;				// NC
    IEC4bits.PWM2IE		= 0;				// NC
    IEC4bits.C1TXIE		= 0;				// NC
    IEC4bits.DMA7IE		= 0;				// NC
    IEC4bits.DMA6IE		= 0;				// NC
    IEC4bits.CRCIE		= 0;				// NC
    IEC4bits.U2EIE		= 0;				// NC
    IEC4bits.U1EIE		= 0;				// NC
}
    
void init_GPIO(void)
{
    //Init GPIO
    //_CNxIE  : interrup sur broche	| _CNxPUE : pull-up sur broche
	// Config PORTA
	_TRISA0		= 0;	_CN2IE	= 0;	_CN2PUE		= 0;	// OUT : (DIGIT) : DIR_X
	_TRISA1		= 0;	_CN3IE	= 0;	_CN3PUE		= 0;	// OUT : (DIGIT) : CLK_X
        _TRISA2         = 0;    _CN3IE	= 0;	_CN3PUE		= 0;	// OUT : (DIGIT) : DIR_Z 
	_TRISA3		= 0;	_CN29IE	= 0;	_CN29PUE	= 0;	// OUT  : (DIGIT) : CLK_Z
	_TRISA4		= 0;	_CN0IE	= 0;	_CN0PUE		= 0;	// OUT  : (DIGIT) : I2C_Confirme

	// Config PORTB
	_TRISB0		= 0;	_CN4IE	= 0;	_CN4PUE		= 0;	// RES : PGED1 pour programmation
	_TRISB1		= 0;	_CN5IE	= 0;	_CN5PUE		= 0;	// RES : PGEC1 pour programmation
	_TRISB2		= 1;    _CN6IE  = 0;    _CN6PUE         = 1;    // IN : (UART)  : U1_RX
	_TRISB3		= 1;	_CN7IE	= 0;	_CN7PUE		= 1;	// IN : (UART)  : U2_RX
	_TRISB4		= 0;	_CN1IE	= 0;	_CN1PUE		= 0;	// OUT  : (DIGIT) : U2_TX
	_TRISB5		= 0;	_CN27IE	= 0;	_CN27PUE	= 0;	// OUT  : ()  : I2C_SDA
	_TRISB6		= 0;	_CN24IE	= 0;	_CN24PUE	= 0;	// OUT : ()  : U1_TX
	_TRISB7		= 1;	_CN23IE	= 0;	_CN23PUE	= 1;	// IN : () : BOUTON1
	_TRISB8		= 1;	_CN22IE	= 0;	_CN22PUE	= 1;	// IN : ()   : BOUTON2
	_TRISB9		= 0;	_CN21IE	= 0;	_CN21PUE	= 0;	// OUT : ()   : PWM2
	_TRISB10	= 1;	_CN16IE	= 0;	_CN16PUE	= 1;	// IN : (DIGIT) : BOUTON3
	_TRISB11	= 0;	_CN15IE	= 0;	_CN15PUE	= 0;	// OUT : (PWM)   : PWM1_Ter
	_TRISB12	= 1;	_CN14IE	= 0;	_CN14PUE	= 1;	// IN : (DIGIT) : BOUTON4
	_TRISB13	= 0;	_CN13IE	= 0;	_CN13PUE	= 0;	// OUT : (PWM)   : PWM1_Bis
	_TRISB14	= 0;	_CN12IE	= 0;	_CN12PUE	= 0;	// OUT : () : I2C_SCL
	_TRISB15	= 0;	_CN11IE	= 0;	_CN11PUE	= 0;	// OUT : (PWM)   : PWM1
        
        
        // Init PORTA
	_LATA0		= 0;	// Valeur initiale a  l'etat bas
	_LATA1		= 0;	// Valeur initiale a  l'etat bas
	_LATA3		= 0;	// Valeur initiale a  l'etat bas
	_LATA4		= 0;	// Valeur initiale a  l'etat bas

	// Init PORTB
	_LATB0		= 0;	// Valeur initiale a  l'etat bas
	_LATB1		= 0;	// Valeur initiale a  l'etat bas
	_LATB2		= 0;	// Valeur initiale a  l'etat bas
	_LATB3		= 0;	// Valeur initiale a  l'etat bas
	_LATB4		= 0;	// Valeur initiale a  l'etat bas
	_LATB5		= 0;	// Valeur initiale a  l'etat bas
	_LATB6		= 0;	// Valeur initiale a  l'etat bas
	_LATB7		= 0;	// Valeur initiale a  l'etat bas
	_LATB8		= 0;	// Valeur initiale a  l'etat bas
	_LATB9		= 0;	// Valeur initiale a  l'etat bas
	_LATB10		= 0;	// Valeur initiale a  l'etat bas
	_LATB11		= 0;	// Valeur initiale a  l'etat bas
	_LATB12		= 0;	// Valeur initiale a  l'etat bas
	_LATB13		= 0;	// Valeur initiale a  l'etat bas
	_LATB14		= 0;	// Valeur initiale a  l'etat bas
	_LATB15		= 0;	// Valeur initiale a  l'etat bas
        
        // Desactivation du module ADC
        _ADON = 0;

        // Desactivation des entrees analogiques
        _PCFG0 = 1;
        _PCFG1 = 1;
        _PCFG2 = 1;
        _PCFG3 = 1;
        _PCFG4 = 1;
        _PCFG5 = 1;
}


void init_Moteurs(void)
{
//NEMA_X
    NEMA_X.ANGLE = 90;
    NEMA_X.CONSIGNE = NEMA_X.ANGLE;
    
    NEMA_X.CONSIGNE_TOUR = 0;
    NEMA_X.NBR_TOUR = 0;
    
    NEMA_X.EN_MOUVEMENT = Non;
    NEMA_X.FLAG_MOUVEMENT = Desactive;
    Configuration_Vitesse_Pas_a_Pas(MOTEUR_X, MODE_RAPIDE);

    
//NEMA_Z
    NEMA_Z.ANGLE = 90;
    NEMA_Z.CONSIGNE = NEMA_Z.ANGLE;
    
    NEMA_Z.CONSIGNE_TOUR = 0;
    NEMA_Z.NBR_TOUR = 0;
    
    NEMA_Z.EN_MOUVEMENT = Non;
    NEMA_Z.FLAG_MOUVEMENT = Desactive;
    Configuration_Vitesse_Pas_a_Pas(MOTEUR_Z, MODE_RAPIDE);
    
    Configuration_Driver(EN_MOTOR_POSITION, Active);            //Active la commande des moteurs Pas à Pas
    
    
//Servomoteur SAVOX  
    SAVOX.ANGLE = 0;
    SAVOX.CONSIGNE = 0;
    
    SAVOX.PWM = SAVOX_VALEUR_PWM_MAX;
    SAVOX.PWM_CONSIGNE = SAVOX_VALEUR_PWM_MAX;
    
    SAVOX.VITESSE = PWM_VITESSE_RAPIDE;
    
    SAVOX.EN_MOUVEMENT = Non;
    SAVOX.FLAG_MOUVEMENT = Desactive;      //Permet de revenir à la position initiale
    
    
//Servomoteur MG996
    MG996.ANGLE = 0;
    MG996.CONSIGNE = 0;
    
//    MG996.PWM = SAVOX_VALEUR_PWM_MAX;
//    MG996.PWM_CONSIGNE = SAVOX_VALEUR_PWM_MAX;
    
    MG996.VITESSE = PWM_VITESSE_NORMAL;
    
    MG996.EN_MOUVEMENT = Non;
    MG996.FLAG_MOUVEMENT = Desactive;
//    Envoi_PWM_angle(MOTEUR_MG996, MG996.CONSIGNE);
    
//Servomoteur CAMERA
    CAMERA.ANGLE = 82;
    CAMERA.CONSIGNE = 82;
    
//    CAMERA.PWM = SAVOX_VALEUR_PWM_MAX;
//    CAMERA.PWM_CONSIGNE = SAVOX_VALEUR_PWM_MAX;
    
    CAMERA.VITESSE = PWM_VITESSE_NORMAL;
    
    CAMERA.EN_MOUVEMENT = Non;
    CAMERA.FLAG_MOUVEMENT = Active;
//    Envoi_PWM_angle(MOTEUR_CAMERA, CAMERA.CONSIGNE);
}