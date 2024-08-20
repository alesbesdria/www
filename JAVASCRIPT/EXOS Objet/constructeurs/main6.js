// Exercice 6 : Création de plusieurs instances d'étudiants
// Créez quelques instances d'étudiants à l'aide de la fonction 
// constructeur Etudiant que vous avez définie précédemment. 
// Appelez ensuite la méthode presentation() pour chaque instance 
// créée afin d'afficher leur introduction.

function Etudiant(nom, age, niveau) {
    this.nom = nom,
    this.age = age,
    this.niveau = niveau,
    this.presentation= function(){
        return 'Je suis '+ this.nom + ' et j\'étudie le niveau ' + this.niveau;
    }
};

let etudiant1 = new Etudiant('Ophelie', 43, -10);
let etudiant2 = new Etudiant('Ophely', 45, -150);
let etudiant3 = new Etudiant('Ophelye', 41, -1000);

console.log(etudiant1.presentation());
console.log(etudiant2.presentation());
console.log(etudiant3.presentation());