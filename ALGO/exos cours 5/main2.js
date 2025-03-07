/* EXERCICE 1

Je crée une fonction qui compte le nombre de voyelle dans une chaine de caracteres.
Je déclare un tableau prenant n que j'initialise a zero

tableau[n] <- 0
fonction cptVoyelles (nbr1, nbr2)

Je parcours ma chaine de caractere tant que n est different de NULL afin de trouver les voyelles a e i o u
Je déclare i afin de compter le nombre de voyelles dans ma chaine

i <- 0
n = 0 
tableau[n] <- 0   ............. INGREDIENTS

J'utilise un compteur que je nomme i pour l'utiliser dans ma fonction que je vais appeler 
fonction compteurvoyelle

S A L U T C A V A           NULL
0 1 2 3 4 5 6 7 8
                
     

TANT QUE n != NULL
SI i == "a" || i == "e" || i == "i" || i == "o" || i == "u" 
ALORS i++; n++;
FIN SI
SINON n++
FIN SINON

FIN TANT QUE
Je retourne i
FIN FONCTION

Je rentre une valeur à mon tableau et j'affiche le resultat
monTableau <- "salut" ["salut"] S A L U T    NULL

resultat <- cptVoyelles(monTableau)
Afficher resultat ...................; GATEAU FINAL



------------------------------------------------



/* EXERCICE 2

Je crée une fonction qui calcule la somme des élèments d'un tableau
Je déclare un tableau prenant n et la valeur de n que j'initialise a zero

tableau[n] <- 0
valeur(n) <- 0
fonction calculSomme (n)

Je parcours mon tableau tant que n est different de NULL afin de calculer la somme des élèments de mon tableau
Je déclare i afin de calculer les sommes des valeurs rentrées

i <- 0

TANT QUE n != NULL
valeur <- valeur + valeur(i)
n++
i++

FIN TANT QUE
Je retourne valeur
FIN FONCTION

Je rentre des valeurs à mon tableau et j'affiche le resultat
monTableau <- [1, 2, 3, 4, 5]
resultat <- calculSommes(monTableau)
Afficher resultat



------------------------------------------------

A FINIR !!!!!!!!!!!!!!!!!!!!!

/* EXERCICE 3

Je crée une fonction qui valide si une adresse mail est correcte
Je déclare un tableau prenant n et la valeur de n que j'initialise a zero

fonction checkMail(mail)

SI mail utilise une chaine de caractere avant le @ ET ENTRE le @ et avant le .
ALORS je retourne VRAI
FIN SI
SINON je retourne FAUX
FIN SINON
FIN FONCTION

Je demande à l'utilisateur de rentrer son mail

si checkMail(mail) est vrai je retourne "Votre adresse mail est valide"
si checkMail(mail) est faux je retourne "Votre adresse mail n'est pas valide, veuillez utiliser des caracateres alphabetiques uniquement"

Afficher resultat



------------------------------------------------



/* EXERCICE 4

Je crée une fonction qui valide un mdp
Je demande à l'utilisateur de rentrer un mot de passe (mdp)

Je crée une fonction pour checker le mdp
J'initialise  lettresmin lettresmaj chiffres et caracspec à FAUX
fonction check(mdp)
SI le mdp >= 8
//je compare la chaine de caractere rentrée afin de savoir si elle contient differents élèments
ALORS SI 
lettresmin == mdp retoune VRAI
lettresmaj  == mdp retoune VRAI
chiffres == mdp retoune VRAI
caracspec à zero == mdp retoune VRAI
retourne VRAI "Votre mot de passe est valide"
FIN SI
SINON retourne FAUX "Votre mot de passe est invalide, il doit contenir des minuscule majuscule chiffres et caracteres speciaux "
FIN SINON
FIN SI
SINON retourne FAUX "Votre mot de passe doit contenir plus de 8 caracteres"
FIN SINON

FIN FONCTION




------------------------------------------------



/* EXERCICE 5

Je crée une fonction qui verifie la force d'un mdp
Je demande à l'utilisateur de rentrer un mot de passe (mdp)

//Je crée des fonctions pour compter le nombre de minuscule, majuscules, chiffres et caracteres speciaux dans mdp
j'initialise n à zero
n <- 0
min <- 0
fonction checkMin(mdp)
TANT QUE n != NULL
SI mdp[n] == min
min++
n++
FIN SI
SINON n++
FIN SINON
retourne min
FIN FONCTION

n <- 0
maj <- 0
fonction checkMaj(mdp)
TANT QUE n != NULL
SI mdp[n] == min
maj++
n++
FIN SI
SINON n++
FIN SINON
retourne maj
FIN FONCTION

n <- 0
chfr <- 0
fonction checkChfr(mdp)
TANT QUE n != NULL
SI mdp[n] == min
chfr++
n++
FIN SI
SINON n++
FIN SINON
retourne chfr
FIN FONCTION

n <- 0
min <- 0
fonction checkSpec(mdp)
TANT QUE n != NULL
SI mdp[n] == min
spec++
n++
FIN SI
SINON n++
FIN SINON
retourne spec
FIN FONCTION

Je crée une fonction pour checker le mdp
J'initialise  lettresmin lettresmaj chiffres et caracspec à FAUX
fonction check(mdp)
SI le mdp >= 12
//je compare la chaine de caractere rentrée afin de savoir si elle contient differents nombre d'élèments
ALORS SI 
checkMin >= 3
lettresmin == mdp retoune VRAI
checkMaj >= 3
lettresmaj  == mdp retoune VRAI
checkChfr >= 3
chiffres == mdp retoune VRAI
checkSpec >= 3
caracspec == mdp retoune VRAI
retourne VRAI "Votre mot de passe est valide"
FIN SI
SINON retourne FAUX "Votre mot de passe est trop faible, il doit contenir au minimum 3 minuscules 3 majuscules 3 chiffres et 3 caracteres speciaux "
FIN SINON
FIN SI
SINON retourne FAUX "Votre mot de passe est trop faible il doit contenir plus de 12 caracteres"
FIN SINON

FIN FONCTION




------------------------------------------------



/* EXERCICE 6

Je crée une fonction qui valide un mdp
Je demande à l'utilisateur de rentrer un mot de passe (mdp)

Je crée une fonction pour checker le mdp
J'initialise  lettresmin lettresmaj chiffres et caracspec à FAUX
fonction check(mdp)
SI le mdp >= 8
//je compare la chaine de caractere rentrée afin de savoir si elle contient differents élèments
ALORS SI 
lettresmin == mdp retoune VRAI
lettresmaj  == mdp retoune VRAI
chiffres == mdp retoune VRAI
caracspec à zero == mdp retoune VRAI
retourne VRAI "Votre mot de passe est valide"
FIN SI
SINON retourne FAUX "Votre mot de passe est invalide, il doit contenir des minuscule majuscule chiffres et caracteres speciaux "
FIN SINON
FIN SI
SINON retourne FAUX "Votre mot de passe doit contenir plus de 8 caracteres"
FIN SINON

FIN FONCTION




------------------------------------------------



EXERCICE 7


Je crée une fonction pour trouver des élèments communs dans 2 tableaux
Je déclare mes 2 tableaux dans lesquels on donne les valeurs de 2 chaines differentes
n et i en compteurs initialisées a zero et commun qui retournera les élèments communs
entre ces 2 chaines.

VARIABLE tableau1[n] <- chaine1
VARIABLE tableau2[i] <- chaine2
VARIABLE n <- 0
VARIABLE i <- 0
VARIABLE commun <- 0

Fonction chrCommun(chaine1, chaine2)

TANT QUE tableau[n] != NULL
    TANT QUE i != NULL
        SI n!= i ALORS
            i++
        SINON
            commun <- i
            commun++
            i++
        FIN SI
    FIN TANT QUE
    n++
FIN TANT QUE
Je retourne commun
FIN FONCTION

Je donne des valeurs aux tableaux
tableau1 <- ""
tableau2 <- ""
resultat <- 


*/