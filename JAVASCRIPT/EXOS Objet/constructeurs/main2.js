// Exercice 2 : Création d'une méthode pour afficher les informations du produit
// Ajoutez une méthode infosProduit() au prototype de Produit qui affiche 
// les informations du produit (nom, prix et description).


function Produit(nom, prix, description) {
    this.nom = nom,
    this.prix = prix,
    this.description = description,
    function infosProduit(){
        return 'Cet article dont le nom est:' + this.nom + 'côute' + this.prix + '. Voici sa description:' + this.description;
    }
};

let produit1 = new Produit('hache', 12.5, 'Pour faire très mal !');
console.log(produit1);