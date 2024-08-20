// Exercice 3 : Gestion des méthodes pour l'objet livre
// Ajoutez une méthode informations à l'objet livre qui renvoie une chaîne de caractères contenant toutes les informations du livre (titre, auteur et nombre de pages).

let livre = {
    titre: 'Diablo',
    auteur: 'Leelou',
    pages: 666,
    informations: function(){
        return 'Voici les informations du livre' + this.titre + ','+ this.auteur +','+ this.pages +'pages';
    } //method
};

console.log(livre);
