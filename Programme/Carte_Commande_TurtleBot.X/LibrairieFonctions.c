/*
 * LibrairieFonctions.c
 *
 * Created: 21/07/2016 15:54:33
 *  Author: gdurand
 */ 

#include "Configuration Bits.h"
//#include "LibrairieFonctions.h"

size_t absolue(size_t data)
{
	if(data < 0.)
	return (-data);
	
	return data;
}

u32 puissance(u8 data, u8 pow)
{
	u32 temp = data;
	u8 i;
        
	if(pow != 0)
	for(i=0; i<(pow-1); i++)
		temp *= data;
	else
		temp = 1;
	return temp;
}

double conversionTableauVariable(char *data, u8 debut, u8 taille)
{
	float temp = 0;
	u8 i;
        
	for(i=debut; i<taille; i++)
		temp += data[i] * puissance(10,taille - i - 1);
	
	return temp;
}

u32 conversionTableauVariable_Char(char *data, u8 debut, u8 taille)
{
	float temp = 0;
	u8 i;
	for(i=debut; i<taille; i++)
		temp += data[i] * puissance(10,taille - i - 1);
	
	return temp;
}


u16 compteurLettreChaine(char* texte)
{
	u16 i = 0, compteur = 0;
	
	while(texte[i] != '\0')
	{
		if(texte[i] != '\n' && texte[i] != '\b' && texte[i] != '\f')
			compteur++;
		i++;
	}
	
	return compteur;
}



u32 conversionDecimale_BCD(char varDecimale)
{
	u8 numero_puissance = 0;
	u32 temporaire = varDecimale;
	u32 varBinaire = 0;
	
// 	envoyer_String_UART("\nValeur Decimale = ");
// 	envoyer_Int_UART(varDecimale);
	
	while(varDecimale > (1 << numero_puissance))
		numero_puissance++;
	
// 	envoyer_String_UART("\nValeur puissance = ");
// 	envoyer_Int_UART(numero_puissance);
	
	while(varDecimale > 0)
	{
		temporaire = varDecimale / (1 << numero_puissance);
		
		if(temporaire >= 1)
		{
			varDecimale -= 1 << numero_puissance;
			varBinaire += 1 * puissance(10, numero_puissance);
		}
		numero_puissance--;
	}
	
// 	envoyer_String_UART("\t\tValeur Binaire = ");
// 	envoyer_Int_UART(varBinaire);
	
	return varBinaire;
}