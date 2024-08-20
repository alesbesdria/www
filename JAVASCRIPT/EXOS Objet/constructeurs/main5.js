// Exercice 5 : Ajout de méthodes pour gérer les informations des étudiants
// Ajoutez une méthode presentation() au prototype de Etudiant qui affiche 
// une introduction de l'étudiant (par exemple, "Je suis [nom] et j'étudie en [niveau]").


function Etudiant(nom, age, niveau) {
    this.nom = nom,
    this.age = age,
    this.niveau = niveau,
    this.presentation= function(){
        return 'Je suis '+ this.nom + ' et j\'étudie le niveau ' + this.niveau;
    }
};

let etudiant1 = new Etudiant('Ophelie', 43, -10);

console.log(etudiant1.presentation());