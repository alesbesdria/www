//////////////////////////////////////////////////////////////////////////////////////
//CETTE PARTIE OK !!!
//MODIFICATION DIV CLASS (couleur + taille)

let bla = document.getElementById('couleur');
let blu = document.getElementsByClassName('apercu_couleur');

bla.addEventListener("input", () => {
    blu[0].style.backgroundColor = document.getElementById("couleur").value;
})

let coloring = document.getElementsByClassName('apercu_couleur');
coloring[0].style.width = '100px';
coloring[0].style.height = '100px';

//////////////////////////////////////////////////////////////////////////////////////
//CETTE PARTIE OK !!!
// MELANGE DE MOT DE PASSE :


const tabNum = ["0", "1", "2", "3", "4", "5", "6", "7", "8", "9"];
const tabCar = ["&", "#", "@", "%", "§", "=", "*", "!"];
const tabMin = ["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z"];
const tabMaj = ["A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z"];

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

function mixMin() {
    let newtabMin = [];
    let longueurMdp = 12;
    for (let i = 0; i <= longueurMdp; i++) {
        newtabMin.push(tabMin[Math.floor(Math.random() * tabMin.length)]);
    }
    return newtabMin;
}

function mixMaj() {
    let newtabMaj = [];
    let longueurMdp = 12;
    for (let i = 0; i <= longueurMdp; i++) {
        newtabMaj.push(tabMaj[Math.floor(Math.random() * tabMaj.length)]);
    }
    return newtabMaj;
}

function createMdp() {
    let mdp = [];
    let listCara = mixCar();
    let listNum = mixNum();
    let listMin = mixMin();
    let listMaj = mixMaj();
    let longueurMdp = 4;

    for (let i = 0; i < longueurMdp; i++) {
        mdp.push(listCara[i]);
        mdp.push(listNum[i]);
        mdp.push(listMin[i]);
        mdp.push(listMaj[i]);
    }
    return mdp;
}

console.log(createMdp());

//////////////////////////////////////////////////////////////////////////////////////
// CETTE PARTIE OK !!!
// GENERE LE MOT DE PASSE + REPETER
let aff = document.getElementById('genererPassword');
let generi = document.getElementById('password');
let generii = document.getElementById('password2');
let generiii = document.getElementById('password_login');

aff.addEventListener('click', ()=>{
    generi.value = '';
    let mdpa = createMdp();
        for (let i = 0; i < mdpa.length; i++) {
            generi.value += mdpa[i];
        }
    generii.value = generi.value;
    generiii.value = generii.value;

});

//////////////////////////////////////////////////////////////////////////////////////
//CETTE PARTIE OK !!!
// // AFFICHAGE DU MDP AU CLICK DE VOIR

let boutonvoir = document.getElementsByName('voirPassword');

boutonvoir[0].addEventListener('click', ()=>{
        generi.setAttribute('type','text');
        generii.setAttribute('type','text');
        generiii.setAttribute('type','text');
        setTimeout(() => generi.setAttribute('type','password'),1000);
        setTimeout(() => generii.setAttribute('type','password'),1000);
        setTimeout(() => generiii.setAttribute('type','password'),1000);
    
});

//////////////////////////////////////////////////////////////////////////////////////
//CETTE PARTIE OK !!!
// // FONCTION COPIE EMAIL

let mail = document.getElementById('email');
let maillog = document.getElementById('email_login');

mail.addEventListener('keyup', ()=>{
    maillog.value = mail.value;
});

//////////////////////////////////////////////////////////////////////////////////////
// NE FONCTIONNE PAS !
// // FONCTION VERIF
let mdpp = document.getElementById('password2');
let mdp = document.getElementById('password');
let email = document.getElementById('email');
let inscrire = document.getElementsByName('submit');
let connect = document.getElementsByName('submit');

function verif(){  
    if (mdpp.value !== '' && mdp.value !== '' && email.value !== '') {
        inscrire[0].disabled = true;
        inscrire[1].disabled = true;
    }
    else {
        inscrire[0].disabled = false;
        inscrire[1].disabled = false;
    }
    // e.preventDefault();
}

email.addEventListener('change',verif());
mdp.addEventListener('change',verif());
mdpp.addEventListener('change',verif());

//////////////////////////////////////////////////////////////////////////////////////
// CETTE PARTIE FONCTIONNAIT ... AVANT ! DU COUP IMPOSSIBLE DE TESTER OBJET CONSCTRUCTEUR
//PREVENT DEFAUT !

    inscrire[0].addEventListener('click', (e)=>{
        e.preventDefault();
    });
    connect[1].addEventListener('click', (e)=>{
        e.preventDefault();
    });

//////////////////////////////////////////////////////////////////////////////////////
// FONCTIONNE SEULEMENT AVEC LE BOUTON MELI QUE J AI RAJOUTER AU HTML 
// CAR SINON CA NE FOCNTIONNE PAS !!!
// // OBJET CONSTRUCTEUR SUR CONNECTION

function Client(mail, mdp) {
    this.mail= mail,
    this.mdp= mdp,
    this.liste= function(){
        return 'Le client : '+ this.mail + ' a pour mot de passe : ' + this.mdp;
    }
};


let lili = document.getElementsByName('leelou');

let list = [];

lili[0].addEventListener('click', ()=>{
    list[list.length] = new Client(email.value, mdp.value);
    console.log(list);
});

//////////////////////////////////////////////////////////////////////////////////////


// // FAIRE UN JQUERY DANS AJAX ... IMPOSSIBLE DU COUP CAR FCTION VERIF ET PREVENT DEFAUT NON FONCTIONNEL

