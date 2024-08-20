function estNombrePremier(n) {
    if (n <= 1){ 
        return false;
    }
    if (n <= 3) {
        return true;
    }

    if (n % 2 === 0 || n % 3 === 0) {
        return false;
    }

    let i = 5;
    while ( i * i <= n){
        if ( n % i === 0 || n % ( i + 2) === 0) {
            return false;
        }
        i += 6;
    }
    return true;
}

function genereNombresPremiers(max) {
    const nombresPremiers = [];
    for (let i = 2; i <= max ; i++) {
        if (estNombrePremier(i)){
            nombresPremiers.push(i);
        }
    }
    return nombresPremiers;
}

// console.log(genereNombresPremiers(17));

const valeurMaximale = parseInt(prompt("Entrez une valeur maximale:"));
const nombresPremiers = genereNombresPremiers(valeurMaximale);

alert("Nombres premiers jusqu'à " + valeurMaximale + " : " + nombresPremiers);
