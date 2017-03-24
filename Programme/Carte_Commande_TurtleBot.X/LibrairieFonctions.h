/*
 * LibrairieFonctions.h
 *
 * Created: 21/07/2016 15:54:40
 *  Author: gdurand
 */ 
#include "Define basiques.h"

#ifndef LIBRAIRIEFONCTIONS_H_
#define LIBRAIRIEFONCTIONS_H_


/*	Permet de donnée la valeur absolue d'un nombre
	Prend en paramètre un nombre signé et
	Retourne un nombre non signé */
size_t absolue(size_t);



/*	Permet de convertir un tableau de valeurs quelconque et de retourner son équivalent en décimal
	Prend en paramètre un tableau de type Int, la position où démarrer et une taille du tableau
	Retourne la valeur converti en flotant */
double conversionTableauVariable(char *data, u8 debut, u8 taille);



/*	Permet de convertir un tableau de valeurs quelconque et de retourner son équivalent en décimal
	Prend en paramètre un tableau de type Char, la position où démarrer et une taille du tableau
	Retourne la valeur converti en flotant */
u32 conversionTableauVariable_Char(char *data, u8 debut, u8 taille);



/*	Permet de réaliser la puissance d'un nombre
	Prend en paramètre la nombre sur lequel on effectue la puissance et la valeur de la puissance
	Retourne la valeur finale après avoir effectué la puissance */
u32 puissance(u8, u8);



/*	Permet de compter le nombre de caractères dans une chaîne
	Prend en paramètre la chaîne
	Retourne le nombre de caractères */
u16 compteurLettreChaine(char* texte);



/*	Permet de convertir les valeurs décimales en binaire codé décimal.
	Sert pour paramétrer la RTC qui demande ce genre de valeurs.
	Prend en paramètre la valeur de 0 à 9.
	Retourne une valeur à 4 chiffres en binaire.
*/
u32 conversionDecimale_BCD(char varDecimale);



#endif /* LIBRAIRIEFONCTIONS_H_ */