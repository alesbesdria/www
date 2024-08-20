// SUITE DE COLLATZ
  
// Je crée une fonction en déclarant sequence prenant en compte un tableau n pour stocker les différentes valeurs à afficher.

// Fonction suiteCollatz(n) :

// sequence <- [n]

//   TANT QUE n différent de 1

//  SI n%2 égal 0
//  ALORS n <- n/2
//  SINON n <- 3*n + 1

//   Je rajoute n à sequence.

//   Puis je retourne sequence.

// FIN TANT QUE

//   FIN FONCTION

// Je rajoute la valeur initiale à 6 que je met dans resultat afin de l'afficher.
// valeurInitiale <-6
// resultat <- suiteCollatz(valeurInitiale)

// Afficher resultat




// ----------------------------------------------------




// NOMBRE PREMIERS
  
// Je crée une fonction afin de déterminer tous les nombres premiers précédents la valeur donnée.

// Fonction estNombrePremier(n) :

// SI n <= 1 ALORS je retourne FAUX
// FIN SI
// SI n <= 3 ALORS je retourne VRAI
// FIN SI
// SI n%2 ===0 OU n%3 === 0 ALORS je retourne FAUX
// FIN SI

// POUR  i=5; i*i<=n; i+=6
//     SI n%i ===0 OU n%(i+2) ===0 ALORS je retourne FAUX
//     FIN SI
//     je retourne VRAI
// FIN POUR

//   FIN FONCTION

// Je crée une fonction afin de calculer la somme de tous les nombres premiers.

// Fonction sommeNombresPremiers(N)

// Je déclare somme et je l'initialise à 0

// somme <- 0
// POUR i = 2; i<=N; i++
// SI estNombrePremier(i) ALORS somme += i
// FIN SI
// je retourne somme
// FIN POUR

//   FIN FONCTION

// Je rajoute la valeur 10 à N afin de calculer resultat et de l'afficher.
// N <-10
// resultat <- sommeNombresPremiers(N)

// Afficher resultat




// ----------------------------------------------------



// RECHERCHE DOUBLONS


// Je crée une fonction qui recherche les doublons d'un tableau dont les valeurs sont données.

// Fonction rechercherDoublons(tableau) :

// elementsEnDouble = {}
// doublons = []

// POUR i=0; i<tableau.length; i++
// element <-tableau[i]
// SI elementsEnDouble[element] === undefined ALORS elementsEnDouble[element] = i
// FIN SI
// SINON SI !doublons.includes(element) ALORS doublons.push(element)
// FIN SI

//   Puis je retourne doublons.

//   FIN FONCTION

// Je rentre des valeurs à mon tableau et j'affiche les doublons.
// monTableau <- [1, 2, 3, 4, 2, 5, 6, 4]
// doublons <- rechercheDoublons(monTableau)

// Afficher doublons




// ----------------------------------------------------



// MULTIPLIER ELEMENTS D'UN TABLEAU


// Je crée une fonction qui multiplie les élèments d'un tableau dont les valeurs sont données.

// Fonction multiplicationElementsTableau(tableau) :

// SI tableau.length === 0 ALORS je retourne 0

// J'initialise le produit à 1

// produit <- 1

// POUR i=0; i<tableau.length;i++
// produit *= tableau[i]

//   Puis je retourne produit.

//   FIN FONCTION

// Je rentre des valeurs à mon tableau et j'affiche le produit.
// monTableau <- [2, 3, 4, 5]
// produit <- multiplicationElementsTableau(monTableau)

// Afficher produit





// ----------------------------------------------------



// SOMME DE TOUS LES ENTIERS A ET B


// Je crée une fonction qui calcule tous les entiers de 2 nombres donnés.

// Fonction sommeEntreAetB(A, B) :

// SI (A > B) ALORS [A,B] = [B,A]
// FIN SI

// J'initialise somme à zero

// POUR i=A; i<=BarProp; i++
// somme +=i
// FIN POUR

//   Puis je retourne somme.

//   FIN FONCTION

// Je rentre des valeurs nbrA et nbrB j'affiche le resultat.
// nbrA <- 3
// nbrB <- 7
// resultat <- sommeEntreAetB(nbrA, nbrB)

// Afficher resultat






// ----------------------------------------------------



// REMPLACER ELEMENT D'UN TABLEAU


// Je crée une fonction qui remplace l'élèment d'un tableau donné.

// Fonction remplacerElement(tableau, ancienElement, nouvelElement) 

// POUR i=0; i<tableau.length; i++
// SI tableau[i]===ancienElement ALORS tableau[i]=nouvelElement
// FIN SI
// FIN FOR

//   Puis je retourne tableau.

//   FIN FONCTION

// Je rentre des valeurs à mon tableau, je lui donne la nouvelle valeur à remplacer sur l'ancienne et j'affiche le resultat.
// monTableau = [1, 2, 3, 2, 4, 2, 5]
// ancienElement = 2
// nouvelElement = 6
// resultat = remplacerElement(monTableau, ancienElement, nouvelElement)

// Afficher resultat







// ----------------------------------------------------



// CONCATENER CHAINES


// Je crée une fonction qui concatenere un tableau de chaines.
// Je déclare resultat et j'initialise a zero
// resultat <- 0

// Fonction concatenerTableauDeChaines(tableau) 

// POUR i=0; i<tableau.length; i++
// resultat += tableau[i]
// FIN POUR

//   Puis je retourne resultat.

//   FIN FONCTION

// Je rentre des valeurs à mon tableau et j'affiche le resultat.
// monTableau = ["Bonjour, ", "comment ", "ça va ", "?"]

// resultat = concatenerTableauDeChaines(monTableau)

// Afficher resultat






// ----------------------------------------------------



// CALCUL PRODUIT DE TOUS LES ELEMENTS D'UN TABLEAU


// Je crée une fonction qui calcule tous les produits d'un tableau.

// Fonction produitElementsTableau(tableau) 

// SI tableau.length === 0 ALORS je retourne 0
// FIN SI

// J'initialise produit à 1

// produit <- 1

// POUR i=0; i< longueur tableau; i++
// produit *= tableau[i]
// FIN POUR

//   Puis je retourne produit.

//   FIN FONCTION

// Je rentre des valeurs à mon tableau et j'affiche le resultat.
// monTableau = [2, 3, 4, 5]

// resultat = produitElementsTableau(monTableau)

// Afficher resultat





// ----------------------------------------------------



// RECHERCHE ELEMENT MAX D'UN TABLEAU


// Je crée une fonction qui l'element max d'un tableau.

// Fonction trouverMax(tableau) 

// J'initialise le maximum à 0

// maximum <- tableau[0]

// POUR i=1; i<tableau.length; i++
// SI tableau[i] > maximum ALORS maximum = tableau[i]
// FIN SI
// FIN POUR

//   Puis je retourne maximum.

//   FIN FONCTION

// Je rentre des valeurs à mon tableau et j'affiche le maximum.
// monTableau = [5, 3, 9, 1, 8, 2]

// maximum = trouverMax(monTableau)

// Afficher resultat





// ----------------------------------------------------



// INVERSER UNE CHAINE


// Je crée une fonction qui inverse une chaine.

// Pour connaitre la longueur de la chaine j'initialise n à zero
// n=0
// TANT QUE n != NULL n++ 
// FIN TANT QUE
// n<-n+1
// je retourne n


// Fonction inverserChaine(chaine) 

// POUR i=1; i<n; i++

// j'initialise j à la longueur du tableau
// j = n
// chaineInverse <- j-- et je retourne j
// FIN POUR

//   Puis je retourne chaineInverse.

//   FIN FONCTION

// Je rentre des valeurs à ma chaine et j'affiche ma chaine inversée.
// maChaine <- "Bonjour"

// chaineInverse = inverserChaine(maChaine)

// Afficher chaineInverse





// ----------------------------------------------------



// VALIDER PARENTHESE


// Je crée une fonction qui valide si une parenthèse est bien fermée.

// Fonction estEquilibreParentheses(expression) 

// Je crée un tableau de stacks
//  stack <- []

//  POUR i=0; i<expression.length; i++

// J'initialise caractere à i donc zero

// caractere <- expresion[i]
// SI caractere === "(" ALORS stack.push(caractere)
// FIN SI
// SINON SI caractere === ")" 
// SI stack.pop() !=== "(" ALORS je retourne FAUX
// FIN SI
// FIN SINON SI

//  FIN POUR

//   Puis je retourne stack.length === 0.

//   FIN FONCTION

// Je rentre des valeurs à des valeurs à expression et j'affiche estEquilibre.
// expression <- "((a + b) * (c - d))"

// estEquilibre <- estEquilibreParentheses(expression)

// Afficher estEquilibre





// ----------------------------------------------------



// PAIR ou IMPAIR


// Je crée une fonction qui indique si un nombre est pair ou impair.

// Fonction estPairOuImpair(nombre) 

// SI nombre % 2 === 0 ALORS je retourne "pair"
// FIN SI
// SINON je retourne "impair"
// FIN SINON

//   FIN FONCTION

// Je rentre 2 valeurs et j'affiche si ils sont pairs ou impairs.
// nbr1 <- 6
// nbr2 <- 9

// Afficher estPairOuImpair