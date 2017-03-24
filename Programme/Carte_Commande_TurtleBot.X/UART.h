#include "Define basiques.h"


//Atribution des fréquences d'envoie pour les 2 UART
#define UART1_BAUD_RATE             115200
#define UART2_BAUD_RATE             115200

//Attribution des tailles des buffers
#define UART1_TAILLE_BUFFER         32        //Taille maximum d'une trame
#define PILE_FIFO_MAX               15        //Nombre maximum de trame que pourra stocker le code

/*Protocole pour mouvemet du bras avec commandes UART*/
#define MOUVEMENT_RAPIDE             "G0"       //Permet les changements de consigne d'angles
#define ATTENTE                      "G4"       //Permet d'attendre
#define HOMING                       "G28"      //Fait revenir le bras à son emplacement d'origine
#define ANGLE_ABSOLUE                "G90"      //Toutes les coordonnées éxécutées à partir de maintenant sont en rapport à l'origine du bras.
#define ANGLE_RELATIVE               "G91"      //Toutes les coordonnées à partir de maintenant sont liés à la dernière position.
#define ARRET_URGENCE                "M112"     //Arrête tous les moteurs
#define AFFICHER_MESSAGE             "M117"     //Envoi le message à l'UART2 pour l'afficher dans le débug
#define DEFINIR_VITESSE              "M204"     //Défini la vitesse des moteurs
#define JOUER_SON                    "M300"     //Permet de jouer un son avec le buzzer (pas encore de buzzer implémenté)
#define DEFINIR_PID                  "M301"     //Permet de modifier les valeurs du PID
#define INFO_CONFIG_FIRMWARE         "M360"     //Retourne les info de la config (exp: HomeDir, BaudRate, données EEPROM, Extrimtés axes (Min, Max), ...)
#define CANCEL_TRAME                 "M400"      //Efface la trame actuellement traité
#define ECRIT_PARAM_EEPROM           "M500"     //Permet d'enregistrer une valeur dans l'EEPROM
#define LIT_PARAM_EEPROM             "M501"     //Permet de lire une valeur dans l'EEPROM

    //Lettres attibuées pour chaque axe
#define X_ROTATION                  'X'
#define Z_ROTATION                  'Z'
#define CAMERA_ROTATION             'C'
#define SAVOX_ROTATION              'S'
#define MG996_ROTATION              'M'

    //Lettres attribuées pour les différents modes de vitesse
#define UART_MODE_RAPIDE            'R'
#define UART_MODE_DEMI_PAS          'D'
#define UART_MODE_QUART_PAS         'Q'
#define UART_MODE_MICRO_PAS         'M'
#define UART_MODE_NORMAL            'N'
#define UART_MODE_LENT              'L'
/*****************************************************/


/*  Structure qui permet decontenir toutes les variables importantes pour la réception des trames UART au format G-Code et M-Code
    Le FLAG_TRAITEMENT signifie qu'une nouvelle trame (entière) a été reçu et qu'il faut la rajouter à la pile FIFO
    Le BUFFER permet de stocker les caractères déjà reçus
    Le COMPTEUR_RECEPTION permet de savoir combien de caractères sont stockés dans le buffer */
typedef struct {
    u8 ID_UART;
    u8 COMPTEUR_RECEPTION;
    char BUFFER[UART1_TAILLE_BUFFER];
    u8 FLAG_TRAITEMENT;
}uart;



/*	Permet d'envoyer au PC un caractère ou un icône disponible dans le code ASCII (disponible sur google)
	Prend en paramètre le caractère à envoyer 
    Prend en paramètre le canal d'envoi */
void envoyer_Char_UART(u8 canal, u8 caractere);



/*	Permet d'envoyer une chaîne de caractère au PC
	Prend en paramètre une chaîne de caractères
    Prend en paramètre le canal d'envoi */
void envoyer_String_UART(u8 canal, const char* chaine);



/*	Permet d'envoyer un format Int au PC
	Prend en paramètre la valeur à envoyer */
void envoyer_Int_UART(u8 canal, u32 data);



/*	Permet d'envoyer un format Double (à virgule) au PC
	Prend en paramètre la valeur à envoyer et le nombre de Chiffres Significatifs on veut pour la précision */
void envoyer_Float_UART(u8 canal, double data, u8 nbrDigits);



/*  Permet de traiter une trame G-Code et M-Code
    Mets la trame au bon format et applique la nouvelle action */
u8 traitement_reception_UART(u8 Position);



/*  Permet d'insérer un tableau de taille UART1_TAILLE_BUFFER dans la pile FIFO
    Prend en paramètre une chaine de caractères */
void Inserer_Trame_Pile(char buffer[]);



/*  Permet de retirer la première trame de la pile FIFO
    Décale toutes les autres trames d'une position vers le haut */
void Retirer_Trame_Pile(u8 Position);