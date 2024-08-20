function convertirCelenFahr(temperatureCel){
    const temperatureFahr = (temperatureCel * 9/5) + 32;
    return temperatureFahr;
}

const temperatureCel = parseFloat(prompt("Entrez la température en degre : "));

const temperatureFahr = convertirCelenFahr(temperatureCel);

alert(temperatureCel + "degre celsius equivaut à " + temperatureFahr + "degre fahrenheit.")