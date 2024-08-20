// Exercice 7 : Gestion des méthodes pour l'objet produit
// Ajoutez une méthode acheter à l'objet produit qui prend en paramètre une quantité à acheter et met à jour la quantité disponible du produit.

let objet = {
    nom: 'Hache',
    prix: 99.99,
    quantite: 42,
    acheter: function(nombre){
        this.quantite -= nombre;
    }
};

objet.acheter(8);
console.log(objet);