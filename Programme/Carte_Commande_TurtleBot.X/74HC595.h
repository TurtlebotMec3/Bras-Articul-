#include "Define basiques.h"


//Attribution des broches du shift register
#define _74HC595_DATA            _LATB5
#define _74HC595_CLOCK           _LATB14
#define _74HC595_CONFIRME        _LATA4


//Attribution des positions des broches des driver LV8772 sur le shift register 74HC595
#define X_POSITION_MD1          7
#define X_POSITION_MD2          6
#define Z_POSITION_MD1          5
#define Z_POSITION_MD2          4
#define EN_MOTOR_POSITION       3



/*  Permet d'envoyer une donnée de 8bits au shift register
    Prend en paramètre une variable 8bits */
void Envoi_74HC595(u8 donnee);


/*  Permet de configurer le driver LV8772 (pour moteurs pas à pas)
    Prend en paramètre une position dans le shift register (de 0 à 7)
    Prend en paramètre le nouvelle valeur */
void Configuration_Driver(u8 position, u8 valeur);