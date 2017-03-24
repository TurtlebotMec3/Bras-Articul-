/*
 * LibrairieFonctions.h
 *
 * Created: 21/07/2016 15:54:40
 *  Author: gdurand
 */ 
#include "Define basiques.h"

#ifndef LIBRAIRIEFONCTIONS_H_
#define LIBRAIRIEFONCTIONS_H_


/*	Permet de donn�e la valeur absolue d'un nombre
	Prend en param�tre un nombre sign� et
	Retourne un nombre non sign� */
size_t absolue(size_t);



/*	Permet de convertir un tableau de valeurs quelconque et de retourner son �quivalent en d�cimal
	Prend en param�tre un tableau de type Int, la position o� d�marrer et une taille du tableau
	Retourne la valeur converti en flotant */
double conversionTableauVariable(char *data, u8 debut, u8 taille);



/*	Permet de convertir un tableau de valeurs quelconque et de retourner son �quivalent en d�cimal
	Prend en param�tre un tableau de type Char, la position o� d�marrer et une taille du tableau
	Retourne la valeur converti en flotant */
u32 conversionTableauVariable_Char(char *data, u8 debut, u8 taille);



/*	Permet de r�aliser la puissance d'un nombre
	Prend en param�tre la nombre sur lequel on effectue la puissance et la valeur de la puissance
	Retourne la valeur finale apr�s avoir effectu� la puissance */
u32 puissance(u8, u8);



/*	Permet de compter le nombre de caract�res dans une cha�ne
	Prend en param�tre la cha�ne
	Retourne le nombre de caract�res */
u16 compteurLettreChaine(char* texte);



/*	Permet de convertir les valeurs d�cimales en binaire cod� d�cimal.
	Sert pour param�trer la RTC qui demande ce genre de valeurs.
	Prend en param�tre la valeur de 0 � 9.
	Retourne une valeur � 4 chiffres en binaire.
*/
u32 conversionDecimale_BCD(char varDecimale);



#endif /* LIBRAIRIEFONCTIONS_H_ */