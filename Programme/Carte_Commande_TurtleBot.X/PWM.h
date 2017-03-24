#include "Define basiques.h"


/******************************************************************************/
/******************************* PWM  *****************************************/
/******************************************************************************/
//Attribution des regitres de PWM pour les diff�rents moteurs
#define SAVOX_REGISTRE              P1DC1
#define PWM1bis_REGISTRE            P1DC2
#define PW1ter_REGISTRE             P1DC3
#define CAMERA_REGISTRE             P2DC1

//ID des servomoteurs
#define MOTEUR_SAVOX                0
#define MOTEUR_MG996                1
#define MOTEUR_PWM1ter              2
#define MOTEUR_CAMERA               3


//Modes de vitesse pour les servomoteurs. Ce d�fini en millisecondes 
#define PWM_VITESSE_RAPIDE             1    
#define PWM_VITESSE_NORMAL             3    
#define PWM_VITESSE_LENT               6    

//Param�tres Servomoteur Camera
#define CAMERA_VALEUR_PMW_MAX         2922
#define CAMERA_VALEUR_PMW_MIN         900
#define CAMERA_ANGLE_MAX              180

//Param�tres Servomoteur Savox
#define SAVOX_VALEUR_PWM_MAX          2950
#define SAVOX_VALEUR_PWM_MIN          750
#define SAVOX_ANGLE_MAX               180   //En degr�s



/*  Structure qui permet le bon fonctionnement des servomoteurs*/
typedef struct {
    u8 VITESSE;         //D�termine le nombre de millisecondes entre chaque envoi de consigne (permet un d�placement progressif).
                                //Voir les diff�rentes vitesse plus haut
    u16 BASE_TEMPS;     //Permet d'enregistrer l'instand t0 pour d�terminer le temps d'attente 

    u16 ANGLE;          //Position de t�part du servomoteur (en degr�)
    u16 CONSIGNE;       //Position de la consigne du servomoteur (en degr�)
    
    u16 PWM;            //Position actuelle de la PWM. Valeur brut de PWM en unit� hardware
    u16 PWM_CONSIGNE;   //Position de la consigne PWM. Valeur brut de PWM en unit� hardware

    u8 EN_MOUVEMENT;
    u8 FLAG_MOUVEMENT;
}servomoteur;



/*  Permet d'envoyer une valeur brut � la PWM (Pulse Width Modulation)
    Cette valeur est comprise par exemple pour le Savox entre SAVOX_VALEUR_PWM_MIN et SAVOX_VALEUR_PWM_MAX
    Prend en param�tre l'ID du servomoteur
    Prend en param�tre la valeur de la PWM */
void Envoi_PWM_brut(u8 numMoteur, s16 valeur);



/*  Permet d'envoyer au servomoteur une consigne d'angle (en degr�)
    Prend en param�tre l'ID du servomoteur
    Prend en param�tre l'angle de consigne (en degr�) */
void Envoi_PWM_angle(u8 numMoteur, float angle);



/*  Permet de modifier la consigne d'angle du servomoteur
    Prend en param�tre l'ID du servomoteur
    Prend en param�tre l'angle de consigne (en degr�)
    Remarque : Cette fonction permet de calculer la valeur brut � envoyer au module PWM pour atteidre la consigne et se termine ensuite. Cela permet
                de ne pas emp�cher les autres moteurs de bouger. Cela permet aussi de faire un d�placement progressif jusqu'� la consigne */
void Envoi_PWM_angle_dynamique(u8 numMoteur, float angle);



/*  Permet une gestion dynamique des servomoteurs en v�rifiant si la consigne � �t� atteinte et, si ce n'est pas le cas, de faire bouger le servo vers
    la consigne.
    Gestion de la vitesse des servomoteurs pour �viter de casser la m�canique du bras articul�, fonctionne avec un compteur de millisecondes et 
    incr�mente la consigne de PWM � chaque fois que le temps d'attente est atteinds
    Remarque : Cette fonction utilise des valeurs bruts de consigne en unit� hardware, il faut donc modifier la consigne avec la fonction juste au dessus
                pour que celle-ci puisse fonctionner */
void Envoi_PWM_dynamique(void);



/*  Permet de conna�tre l'angle o� le moteur est actuellement
    Prend en param�tre le nom du moteur (structure) */
float Calcul_angle_actuel_PWM(servomoteur Moteur);