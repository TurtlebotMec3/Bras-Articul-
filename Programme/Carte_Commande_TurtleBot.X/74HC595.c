//#include "74HC595.h"
#include "Configuration Bits.h"

/****************Variables Globales****************/
u8 DATA_SHIFT_REGISTER;
/**************************************************/



void Envoi_74HC595(u8 donnee)
{
    u8 i;
    DATA_SHIFT_REGISTER = donnee;    //Enregistre la valeur dans la variable pour mémoriser

    _74HC595_CONFIRME = Desactive;
    delay_us(1);
    
    for(i=0; i<8; i++)
    {
        _74HC595_CLOCK = Desactive;
               
        _74HC595_DATA = (donnee & (0x01 << i)) >> i;
        
        _74HC595_CLOCK = Active;                     //Envoi la clock pour synchro avec le Shift Register
    }
    
    _74HC595_CONFIRME = Active;
    delay_us(1);   
}



void Configuration_Driver(u8 position, u8 valeur)
{
    u8 temporaire = ~(1<<position);
    
    DATA_SHIFT_REGISTER &= temporaire;   //On efface la valeur à modifier (on la mets à zéro)
    
    DATA_SHIFT_REGISTER |= valeur<<position; //On remplace par la valeur
    
    Envoi_74HC595(DATA_SHIFT_REGISTER);
}