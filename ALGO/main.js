let premierNombre = parseFloat(prompt("Entrez  le premier nombre:"));
let deuxiemeNombre = parseFloat(prompt("Entrez  le deuxieme nombre:"));

if (isNaN(premierNombre) || isNaN(deuxiemeNombre)) {
    console.log("Veuillez entrer des nombres valides.");
} else {
    let somme = premierNombre + deuxiemeNombre;

    if (somme < 0){
        alert("Cette somme est négative ❤️");
    }
    else{
    console.log("La somme de " + premierNombre + " et " + deuxiemeNombre + " est : " + somme);
    }
}