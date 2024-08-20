// Exercice 5 : Gestion des méthodes pour l'objet personne
// Ajoutez une méthode anniversaire à l'objet personne qui incrémente l'âge de la personne chaque fois qu'elle est appelée.

let personne = {
    nom: 'Lili',
    age: 1,
    adresse: '25, rue de la paix',
    anniversaire: function(rajout) {
        this.age += rajout;
        return 'Son anniversaire est le :' + this.age ;
    }
};
personne.anniversaire(25);
console.log(personne);