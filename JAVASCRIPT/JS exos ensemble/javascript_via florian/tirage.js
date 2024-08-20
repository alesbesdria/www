// Je mélange le tableau
function melange(apprenants){
    // Je déclare le tableau vide qui va contenir les apprenants mélangés
    let tirage = [];
    // On enregistre la longueur du tableau dans une variable
    const longueur = apprenants.length;
    // Je boucle sur la liste apprenants
    for(let i=0;i<longueur;i++){
        // Je génère un index aléatoire qui vaut entre 0 et apprenants.length
        let index = Math.floor(Math.random()*(apprenants.length));
        // J'ajoute l'élément au tableau avec push
        tirage.push(apprenants[index]);
        // Je retire l'élément du tableau avec splide
        apprenants.splice(index,1);
    }
    return tirage;
}
// Fonction qui va créer les groupes
function afficherGroupe(apprenants,aide){
    // Je fais appel à la fonction mélange
    let tableau = melange(apprenants);
    // on mélange le tableau aide
    let tableau2 = melange(aide);
    // Je déclare mes tableau A et B
    let tableauA;
    let tableauB;
    // Je vérifie quel tableau est plus grand
    if(tableau.length <= tableau2.length){
        tableauA = tableau;
        tableauB = tableau2;
    }else{
        tableauA = tableau2;
        tableauB = tableau;
    }
    const groupe = Math.floor(((tableauA.length+tableauB.length)/tableauA.length));
    const nombre_groupe = tableauA.length;
    console.log(groupe);

    // Pour avoir le numéro de groupe
    let nb_groupe = 0;
    console.log((tableauA.length+tableauB.length) % tableauA.length);
    //debugger;
    // Je vérifie si le nombre d'élément est impaire avec modulo
    if((tableauA.length+tableauB.length) % tableauA.length !== 0){
        console.log('condition if');
        document.getElementById('resultat').innerHTML+= 'Groupe '+nb_groupe;
        let tab_groupe = [];
        console.log(groupe);
        tab_groupe.push(tableauA.splice(0,1));
        for(let i=1;i<=groupe;i++){
            tab_groupe.push(tableauB.splice(i,1));
        }
        nb_groupe++;
        console.log('Groupe '+nb_groupe+': '+tab_groupe);
       

    }
    for(let i = nb_groupe;i<=nombre_groupe;i++){
        let tab_groupe = [];
        tab_groupe.push(tableauA.splice(0,1));
        for(let j=0;j<=groupe-1;j++){
            tab_groupe.push(tableauB.splice(j,1));
        }
        nb_groupe++;
        console.log('Groupe '+nb_groupe+': '+tab_groupe);
    }

    // Je vérifie si le nombre d'élément est impair avec modulo
    /*if(tableau.length % 2 !== 0){
        console.log(nb_groupe+' '+tableau[0]+' - '+tableau[1]+' - '+tableau[2]);
        document.getElementById('resultat').innerHTML+= 'Groupe '+nb_groupe+': '+tableau[0]+' - '+tableau[1]+' - '+tableau[2]+'<br>';
        tableau.splice(0,3);
        nb_groupe++;
    }
    
    for(let i=0;i<tableau.length;i+=2){
        console.log(nb_groupe+' '+tableau[i]+' - '+tableau[i+1]);
        document.getElementById('resultat').innerHTML+= 'Groupe '+nb_groupe+': '+tableau[i]+' - '+tableau[i+1]+'<br>';
        nb_groupe++;
    }*/


}
// Initialiser un compteur
let compteur = 1;
// Fonction compte à rebours
function compteARebours(){
    document.getElementById('resultat').innerHTML = compteur;
    compteur-=1;
    
    console.log(compteur);
    // Si le compteur est à 0
    if(compteur == 0){
        clearInterval(count);
        document.getElementById('resultat').innerHTML ='';
        let checkbox = document.getElementsByName('apprenants[]');
        // je récupère les checkbox aide
        let check_aide = document.getElementsByName('aide[]');
        // je déclare mon tableau apprenants
        let apprenants = [];
        // je déclare mon tableau aide
        let aide = [];
        // Je boucle sur les éléments
        for(i=0;i<checkbox.length;i++){
            if(checkbox[i].checked === true){
                // Si aide est coché je push dans le tableau aide
                if(check_aide[i].checked === true){
                    aide.push(checkbox[i].value);
                }else{
                    // Sinon je range dans le tableau apprenants
                    apprenants.push(checkbox[i].value);
                }
                
            }
        }
        // J'appelle la fonction afficherGroupe
        afficherGroupe(apprenants,aide);
        compteur=3;
    }
}
let count;
// On va détecter le clic sur le bouton
let bouton = document.getElementById('tirage');
// Je fais mon addeventListener
bouton.addEventListener('click',function(){
    document.getElementById('resultat').innerHTML ='';
    // Je lance le compte à rebours
    count = setInterval(compteARebours,1000);
});
