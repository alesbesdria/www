// Exercice 4 : Création d'une fonction constructeur pour un étudiant
// Créez une fonction constructeur Etudiant pour représenter des étudiants. 
// Chaque étudiant devrait avoir les propriétés suivantes :
// nom (une chaîne de caractères)
// age (un nombre entier)
// niveau (une chaîne de caractères représentant le niveau d'étude)

function Etudiant(nom, age, niveau) {
    this.nom = nom,
    this.age = age,
    this.niveau = niveau
};

let etudiant1 = new Etudiant('Ophelie', 43, -10);

console.log(etudiant1);