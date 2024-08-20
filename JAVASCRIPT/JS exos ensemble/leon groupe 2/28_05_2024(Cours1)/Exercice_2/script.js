let etoile = "*";
let nbEtoile = 5;
for (let i = 0; i < nbEtoile; i++) {
    document.getElementById("result").innerText += etoile;
    document.getElementById("result").innerHTML += "<br>";
    etoile = etoile + "*";
}
