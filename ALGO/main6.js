function calculIMC(poids, taille, sexe) {
    if (sexe == "femme"){
    const imc = poids / (taille * taille);
    return imc;
    }
    else{
        alert("Vous êtes un Homme pas de bol !!! 😁");
        return imc + 1;
    }
}

const poids = parseFloat(prompt("Entrez votre poids en kg : "));

const taille = parseFloat(prompt("Entrez votre taille en mètres : "));

const sexe = prompt("Entrez votre sexe : ");

const imc = calculIMC(poids, taille, sexe);

alert("Votre IMC est de : :" + imc);


if (imc < 18.5){
    alert("Vous êtes en insuffisance pondérale.");
} else if (imc >= 18.5 && imc < 24.9){
    alert("Votre poids est dans la plage de poids de santé.");
} else if (imc >= 25 && imc < 29.9) {
    alert("Vous êtes en surpoids.");
} else {
    alert("Vous êtes en obésité.");
}
