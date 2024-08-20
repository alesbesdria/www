// Exercice 3 : Création de plusieurs instances de produits
// Créez quelques instances de produits à l'aide de la fonction constructeur Produit 
// que vous avez définie précédemment. Appelez ensuite la méthode infosProduit() 
// pour chaque instance créée afin d'afficher leurs informations.

function Produit(nom, prix, description) {
    this.nom = nom,
    this.prix = prix,
    this.description = description
};

Produit.prototype.infosProduit = function(){
    return 'Cet article: ' + this.nom + ' côute ' + this.prix + '. Voici sa description: ' + this.description;
}

let produit1 = new Produit('hache', 12.5, 'Pour faire très mal !');
let produit2 = new Produit('grenade', 15, 'Explosion garantie!');
let produit3 = new Produit('tronçonneuse', 29.99, 'Pour bien finir !');
console.log(produit1.infosProduit());
console.log(produit2.infosProduit());
console.log(produit3.infosProduit());


