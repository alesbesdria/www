// Exercice 1 : Création d'une fonction constructeur pour un produit
// Créez une fonction constructeur Produit pour représenter des produits dans un magasin. 
// Chaque produit devrait avoir les propriétés suivantes :
// nom (une chaîne de caractères)
// prix (un nombre décimal)
// description (une chaîne de caractères)

function Produit(nom, prix) {
    this.nom = nom,
    this.prix = prix,
    this.description = function(){
        return 'Cet article dont le nom est:' + this.nom + 'côute' + this.prix;
    }
};

let produit1 = new Produit('hache', 12.5);
console.log(produit1);