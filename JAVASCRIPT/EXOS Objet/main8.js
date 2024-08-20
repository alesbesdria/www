// Exercice 8 : Création d'un objet cercle
// Créez un objet cercle avec les propriétés suivantes :
// rayon (un nombre décimal)
// Ajoutez des méthodes pour calculer :
// La circonférence du cercle (2 * π * rayon)
// La surface du cercle (π * rayon^2)

let cercle = {
    rayon: 12.8,
    circonference: 0,
    surface: 0,
    calculcirc: function(){
        this.circonference += 2*Math.PI*this.rayon;
    },
    calculsurf: function(){
        this.surface += Math.PI*(this.rayon^2);
    }
};

cercle.calculcirc();
cercle.calculsurf();
console.log(cercle);