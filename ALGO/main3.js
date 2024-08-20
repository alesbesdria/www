function factorielle(n){
    if(n < 0){
        return "La factorielle n'est définie que pour les nombres positifs.";
    } else if (n === 0 || n === 1){
        return 1;
    } else {
        let resultat = 1;
        for (let i = 2; i <= n; i++) {
            resultat *= i;
        }
            return resultat;
    }
}
const nombre = parseInt(prompt("Entrez un nombre pour calculer sa factorielle : "));

const resultatFactorielle = factorielle(nombre);

alert("La factorielle de " + nombre + " est : " + resultatFactorielle );