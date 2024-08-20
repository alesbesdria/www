// Exercice 8 : Ajout de méthodes pour les voitures
// Ajoutez une méthode afficherDetails() au prototype de Voiture
//  qui affiche les détails de la voiture (marque, année et couleur).

function Voiture(marque, annee, couleur) {
    this.marque= marque,
    this.annee= annee,
    this.couleur= couleur
};

Voiture.prototype.afficherDetails = function(){
    return 'Le modèle '+this.marque+' de l\'année '+this.annee+ ' est de couleur '+this.couleur;
}

voiture1 = new Voiture('Lambo', 1988, 'rouge');
voiture2 = new Voiture('Porsche', 1986, 'noir');
voiture3 = new Voiture('Lotus', 1984, 'jaune');


console.log(voiture1.afficherDetails());
console.log(voiture2.afficherDetails());
console.log(voiture3.afficherDetails());