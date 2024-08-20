
// Vérifier si les champs ont une valeur
// Le bouton afficher doit afficher le mot de passe
// Vérifier que le mot de passe fasse au moins 12 caractères.
// Si il fait 6 caractères ou moins mettre le champs en rouge, entre 7 et 11 le champs en orange et 12 et + en vert
// Effectuer une requête AJAX en GET en envoyant l'ensemble du formulaire

let mdp = document.getElementsByName('password');
let boutonvoir = document.getElementsByName('voir');
boutonvoir[0].addEventListener('click', ()=>{
    mdp.setAttribute('type','text');
    setTimeout(() => mdp.setAttribute('type','password'),1000);
});
