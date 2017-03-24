#include "Define basiques.h"


//Atribution des fr�quences d'envoie pour les 2 UART
#define UART1_BAUD_RATE             115200
#define UART2_BAUD_RATE             115200

//Attribution des tailles des buffers
#define UART1_TAILLE_BUFFER         32        //Taille maximum d'une trame
#define PILE_FIFO_MAX               15        //Nombre maximum de trame que pourra stocker le code

/*Protocole pour mouvemet du bras avec commandes UART*/
#define MOUVEMENT_RAPIDE             "G0"       //Permet les changements de consigne d'angles
#define ATTENTE                      "G4"       //Permet d'attendre
#define HOMING                       "G28"      //Fait revenir le bras � son emplacement d'origine
#define ANGLE_ABSOLUE                "G90"      //Toutes les coordonn�es �x�cut�es � partir de maintenant sont en rapport � l'origine du bras.
#define ANGLE_RELATIVE               "G91"      //Toutes les coordonn�es � partir de maintenant sont li�s � la derni�re position.
#define ARRET_URGENCE                "M112"     //Arr�te tous les moteurs
#define AFFICHER_MESSAGE             "M117"     //Envoi le message � l'UART2 pour l'afficher dans le d�bug
#define DEFINIR_VITESSE              "M204"     //D�fini la vitesse des moteurs
#define JOUER_SON                    "M300"     //Permet de jouer un son avec le buzzer (pas encore de buzzer impl�ment�)
#define DEFINIR_PID                  "M301"     //Permet de modifier les valeurs du PID
#define INFO_CONFIG_FIRMWARE         "M360"     //Retourne les info de la config (exp: HomeDir, BaudRate, donn�es EEPROM, Extrimt�s axes (Min, Max), ...)
#define CANCEL_TRAME                 "M400"      //Efface la trame actuellement trait�
#define ECRIT_PARAM_EEPROM           "M500"     //Permet d'enregistrer une valeur dans l'EEPROM
#define LIT_PARAM_EEPROM             "M501"     //Permet de lire une valeur dans l'EEPROM

    //Lettres attibu�es pour chaque axe
#define X_ROTATION                  'X'
#define Z_ROTATION                  'Z'
#define CAMERA_ROTATION             'C'
#define SAVOX_ROTATION              'S'
#define MG996_ROTATION              'M'

    //Lettres attribu�es pour les diff�rents modes de vitesse
#define UART_MODE_RAPIDE            'R'
#define UART_MODE_DEMI_PAS          'D'
#define UART_MODE_QUART_PAS         'Q'
#define UART_MODE_MICRO_PAS         'M'
#define UART_MODE_NORMAL            'N'
#define UART_MODE_LENT              'L'
/*****************************************************/


/*  Structure qui permet decontenir toutes les variables importantes pour la r�ception des trames UART au format G-Code et M-Code
    Le FLAG_TRAITEMENT signifie qu'une nouvelle trame (enti�re) a �t� re�u et qu'il faut la rajouter � la pile FIFO
    Le BUFFER permet de stocker les caract�res d�j� re�us
    Le COMPTEUR_RECEPTION permet de savoir combien de caract�res sont stock�s dans le buffer */
typedef struct {
    u8 ID_UART;
    u8 COMPTEUR_RECEPTION;
    char BUFFER[UART1_TAILLE_BUFFER];
    u8 FLAG_TRAITEMENT;
}uart;



/*	Permet d'envoyer au PC un caract�re ou un ic�ne disponible dans le code ASCII (disponible sur google)
	Prend en param�tre le caract�re � envoyer 
    Prend en param�tre le canal d'envoi */
void envoyer_Char_UART(u8 canal, u8 caractere);



/*	Permet d'envoyer une cha�ne de caract�re au PC
	Prend en param�tre une cha�ne de caract�res
    Prend en param�tre le canal d'envoi */
void envoyer_String_UART(u8 canal, const char* chaine);



/*	Permet d'envoyer un format Int au PC
	Prend en param�tre la valeur � envoyer */
void envoyer_Int_UART(u8 canal, u32 data);



/*	Permet d'envoyer un format Double (� virgule) au PC
	Prend en param�tre la valeur � envoyer et le nombre de Chiffres Significatifs on veut pour la pr�cision */
void envoyer_Float_UART(u8 canal, double data, u8 nbrDigits);



/*  Permet de traiter une trame G-Code et M-Code
    Mets la trame au bon format et applique la nouvelle action */
u8 traitement_reception_UART(u8 Position);



/*  Permet d'ins�rer un tableau de taille UART1_TAILLE_BUFFER dans la pile FIFO
    Prend en param�tre une chaine de caract�res */
void Inserer_Trame_Pile(char buffer[]);



/*  Permet de retirer la premi�re trame de la pile FIFO
    D�cale toutes les autres trames d'une position vers le haut */
void Retirer_Trame_Pile(u8 Position);