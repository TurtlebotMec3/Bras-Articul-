#include "Define basiques.h"

//Attribution ID des moteurs pas à pas
#define MOTEUR_X        0
#define MOTEUR_Z        1

//Attribution des broches nécessaire au bon fonctionnement des moteurs néma-11
    //Les broches de vitesse ne sont pas attribuées car elles sont câblées sur le shift register (position dans le fichier 74HC595.h)
#define DIR_X           _LATA0
#define CLK_X           _LATA1
#define DIR_Z           _LATA2
#define CLK_Z           _LATA3

//Attribution valeur des sens de rotations
#define SENS_HORAIRE         1
#define SENS_ANTI_HORAIRE    0

//Attribution des délais minimum pour le signal carré à envoyer au drivers LV8772 (pour que les Nema-11 puisse bouger)
#define delai_Excitation_mode_rapide                500        //En µs
#define delai_Excitation_mode_demi_pas              350        //En µs
#define delai_Excitation_mode_quart_pas             350        //En µs
#define delai_Excitation_mode_micro_pas             350        //En µs

//Différents modes pour la vitesse (correspond aussi à 1 / (le nombre de pas effectué))
#define MODE_RAPIDE             1
#define MODE_DEMI_PAS           2
#define MODE_QUART_PAS          4
#define MODE_MICRO_PAS          16

//Angle défini par le constructeur des moteurs (néma en l'occurence)
    //Cette angle détermine l'angle de rotation (en degré) d'un pas de moteur à vitesse maximale (pas complet)
//#define ANGLE_PAS               1.749
#define ANGLE_PAS               1.8


/*  Structure qui contient toutes les variables indispensable au bon fonctionnement des moteurs pas à pas */
typedef struct {
    u8 VITESSE;
    u8 DIRECTION;
    u16 DELAI_EXCITATION;

    float ANGLE;
    float CONSIGNE;

    u32 NBR_TOUR;                                           //Le reducteur étant de 1:100
    u32 CONSIGNE_TOUR;      /*Variable unsigned long car si on veut faire 180° à vitesse très lente 
                              (micro pas multiplication par 16) on doit effectuer 180°/1.75°*100*16 = 164571 ( > 2^16) */

    u8 EN_MOUVEMENT; 
    u8 FLAG_MOUVEMENT;
}moteur_nema;



/*  Permet de faire bouger le moteur pas à pas d'un nombre de rotations précise
    Prend en paramètre l'ID du moteur à bouger
    Prend en paramètre le nombre de rotations (pas) à effectuer */
u8 Envoi_Moteur_Pas_a_Pas_brut(u8 numMoteur, u32 valeurBrut);



/*  Permet de faire bouger le moteur pas à pas d'un angle (en degrés) précis
    Prend en paramètre l'ID du moteur à bouger
    Prend en paramètre l'angle (en degrés), si l'angle est positif le moteur tournera dans le sens des aiguilles d'une montre et inversement si l'angle
    est négatif */
u8 Envoi_Moteur_Pas_a_Pas_angle(u8 numMoteur, float angle);



/*  Permet de choisir le sens de rotation du moteur (Horaire ou Anti-Horaire)
    Prend en paramètre l'ID du moteur à bouger
    Prend en paramètre le sens de rotation */
u8 Envoi_Sens_Pas_a_Pas(u8 numMoteur, u8 sens);



/*  Permet de sélectionner la vitesse du moteur pas à pas du Pas complet (rapide) au micro-pas (très lent)
    Prend en paramètre l'ID du moteur à bouger
    Prend en paramètre le mode de vitesse choisi (voir les différents types de mode plus haut)*/
void Configuration_Vitesse_Pas_a_Pas(u8 numMoteur, u8 mode);



/*  Permet de faire bouger le moteur pas à pas d'un angle (en degrés) précis
    Prend en paramètre l'ID du moteur à bouger
    Prend en paramètre l'angle (en degrés), si l'angle est positif le moteur tournera dans le sens des aiguilles d'une montre et inversement si l'angle
    est négatif 
    Remarque : la différence avec la fonction NON DYNAMIQUE est que celle-ci calcul le nombre de pas a effectuer pour arriver à la consigne et
    sort de la fonction. Cela n'empêche donc pas le bon fonctionnement des autres moteurs / fonctions du programme */
void Envoi_Moteur_Pas_a_Pas_angle_dynamique(u8 numMoteur, float angle);



/*  Permet de déterminer si les moteur on ateinds leurs consignes respectives, si ce n'est pas le cas il fera avancer d'un pas 
    les moteurs vers leur consigne.
    Remarque : cette fonction ne fonctionne que si le nombre de pas de consigne à été déterminé (fonction juste au dessus)
               cette fonction permet de savoir si les moteurs sont en mouvement ou non */
void Envoi_Pas_a_Pas_dynamique(void);



/*  Permet de connaître l'angle où le moteur est actuellement
    Prend en paramètre le nom du moteur (structure) */
float Calcul_angle_actuel_Pas_a_Pas(moteur_nema Moteur);