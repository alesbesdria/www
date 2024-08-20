//
//     Exercices JS
//     - Créer une fonction javascript pour changer le fond du body en fonction de la couleur sélectionner dans le champs
//     - Créer une fonction javascript pour générer un mot de passe aléatoire en mélangeant des caractères spéciaux et des chiffres
//     - A la soumission du formulaire vérifier que les champs sont tous remplis. Si c'est le cas désactiver les champs
//     - Au clic sur le bouton ajouter fichier dupliquer le champs type file dans la div upload
// 







addEventListener("input", () => {
    document.body.style.backgroundColor = document.getElementById("color").value;
})

const tabNum = ["0", "1", "2", "3", "4", "5", "6", "7", "8", "9"];
const tabCar = ["&", "#", "@", "%", "§", "=", "é", "*", "!", "d", 'f', 'a', 'm'];

function mixNum() {
    let newtabNum = [];
    let longueurMdp = 12;
    for (let i = 0; i <= longueurMdp; i++) {
        newtabNum.push(tabNum[Math.floor(Math.random() * tabNum.length)]);
    }
    return newtabNum;
}

function mixCar() {
    let newtabCar = [];
    let longueurMdp = 12;
    for (let i = 0; i <= longueurMdp; i++) {
        newtabCar.push(tabCar[Math.floor(Math.random() * tabCar.length)]);
    }
    return newtabCar;
}

function createMdp() {
    let mdp = [];
    let listCara = mixCar();
    let listNum = mixNum();
    let longueurMdp = 12;

    for (let i = 0; i < longueurMdp; i++) {
        mdp.push(listCara[i]);
        mdp.push(listNum[i]);
    }
    return mdp;
}

//
function gen() {
    let mdp = createMdp();
    //on block la génération de mdp si la saisis et desactiver
    if (document.getElementById('password').disabled == false) {
        for (let i = 0; i < mdp.length; i++) {
            document.getElementById('password').value += mdp[i];
        }
    }
}

function verif() {
    let prenom = document.getElementById('prenom').value;
    let mdp = document.getElementById('password').value;
    let email = document.getElementById('email').value;

    if (prenom != '' && mdp != '' && email != '') {
        document.getElementById('prenom').disabled = true;
        document.getElementById('password').disabled = true;
        document.getElementById('email').disabled = true;
    }
    return false;
}



