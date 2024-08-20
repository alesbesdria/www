let adresse = document.getElementById('adresse');
let resultat = document.getElementById('resultat')
adresse.addEventListener('keyup', () =>{
    let ad = adresse.value;
    
    if(ad.length >= 4) {
        
        const reponse = fetch ("https://api-adresse.data.gouv.fr/search/?q=" + encodeURI(ad)+'&limit=50' ).then((reponse)=>{
            let add = reponse.json().then((add)=>{
                resultat.innerHTML = '';
                add.features.forEach((quartier)=>{
                    resultat.innerHTML+=quartier.properties.label+'<br>';
                    // add.features[1].properties.label;
                });
            })
        })
    }
})