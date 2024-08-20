function triBulles(tableau){
    let n = tableau.length;
    let permutation;

    do{
        permutation = false;

        for (let i = 0; i < n - 1; i++) {
            if (tableau[i] > tableau[i + 1]) {
                let temp = tableau[i];
                tableau[i] = tableau[ i + 1];
                tableau[i + 1] = temp;
                permutation = true;
            }
        }
    } while (permutation);
    return tableau;
}

const tableauNonTri = [64, 34, 25, 12, 22, 11, 90];

const tableauTri = triBulles(tableauNonTri);
 alert("Tableau trié : " + tableauTri);