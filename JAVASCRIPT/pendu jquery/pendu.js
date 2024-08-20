const mots = ['Dykhounphypheth','grève','giulietta','australopitheque','Développeur'];
// Début code Yahia
function shuffle(){
    let indice = Math.floor(Math.random() * mots.length );
    return indice;
}

let mot = mots[shuffle()];
console.log(mot);
// Fin code Yahia

// Debut code Benoit

const vide = [];

for (let i = 1; i <= mot.length; i++) {
    vide.push('_');

}
document.getElementById('mot').innerText = vide.join('');

// Fin code Benoit

// Debut code Firas + Leon
let letter = document.getElementById('letter');
let caractereEntre = [];
let error = 0; 
let bool = true;
letter.addEventListener("keyup", ()=>{
   for (let i = 0; i < mot.length; i++) {
        if (letter.value.toLowerCase()==mot[i].toLowerCase()) {
            vide[i] = mot[i];  
            bool = false;
    
        }
   }
   // Si pas de caractère trouvé
   if(bool == true){
    error++;
    if (error == 10){
        document.getElementById('message').innerText = 'Perdu ! Partie términé';
        letter.setAttribute('disabled', 'disabled');
        
    }
    

    let ab = document.querySelectorAll('.erreur' + error); 
    ab.forEach(function(element){ element.classList.add('affiche') });
   }else{
    bool = true;
    
   }
   if(!vide.includes('_')){
    document.getElementById('message').innerText = 'Trouvé ! Partie términé';
    letter.setAttribute('disabled', 'disabled');
}

   caractereEntre.push(letter.value.toLowerCase());
   document.getElementById('lettres').innerText = caractereEntre.join('');
   document.getElementById('mot').innerText = vide.join('');
    letter.value = '';
});


// Fin code Firas + Leon



