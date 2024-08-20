// const mots = ['Dykhounphypheth','grève','giulietta','australopitheque','Développeur','stalactite','cromagnon','opheliegrr','viaformation','laregion','francetravail','mobilhome' , 'depanneuse' , 'ficheS'];
// Début code Yahia
let phrase = "Ophélie ça va";
console.log(phrase.normalize('NFD').replace(/[\u0300-\u036f]/g, ""));
const prenom = [{prenom:"Leon",score:0},{prenom:"Firas",score:0},{prenom:"Benoit",score:0},{prenom:"Yahya",score:0},{prenom:"Alexandre",score:0},{prenom:"Abde",score:0},{prenom:"Melissa",score:0},{prenom:"Charles",score:0},{prenom:"Thierry",score:0},{prenom:"Marco",score:0},{prenom:"Teddy",score:0},{prenom:"Estelle",score:0}];
function shuffle(){
    let indice = Math.floor(Math.random() * prenom.length );
    return indice ;
}





//let mot = mots[shuffle()];
let mot;
const vide = [];
let indice;
    //en jQuery
    $('#saisie').on('keydown' , (event)=> {
        if (event.keyCode == 13){
            mot = $('#saisie').val();
            $('#saisie').css('display' , 'none');
            for (let i = 1; i <= mot.length; i++) {
                vide.push('_');

            }
            document.getElementById('button').style.display = 'block';

        $('#mot').text(vide.join(''));

        }
let bouton = document.getElementById('button');
bouton.addEventListener('click', () =>{
    indice = shuffle();
    document.getElementById('message').innerText = prenom[indice].prenom + ' à toi de jouer';

    document.getElementById('button').style.display = 'none';
    $(".recherche").show();
})

    //en JS
    //document.getElementById('saisie').addEventListener('keydown', (event)=>{
    //if (event.keyCode == 13){
        //mot = document.getElementById('saisie').value;
        //en jQuery
        //document.getElementById('saisie').style.display = 'none';
        //for (let i = 1; i <= mot.length; i++) {
        //    vide.push('_');
        //}
    //document.getElementById('mot').innerText = vide.join('');

    //})
})


console.log(mot);

// Fin code Yahia

// Debut code Benoit



// Fin code Benoit

// Debut code Firas + Leon
//let letter = document.getElementById('letter');
// En jquery
let letter = $('#letter')[0];

//console.log(letter);
let caractereEntre = [];
let error = 0; 
let bool = true;
let bool2 = true;
letter.addEventListener("keyup", ()=>{
    bool2=true;
    for (let i = 0; i< caractereEntre.length; i++) {
        if (letter.value.toLowerCase().normalize('NFD').replace()==caractereEntre[i])
            bool2 = false;
    }
    if(bool2 == true){
        for (let i = 0; i < mot.length; i++) {
            if (letter.value.toLowerCase().normalize('NFD').replace(/[\u0300-\u036f]/g, "")==mot[i].toLowerCase().normalize('NFD').replace(/[\u0300-\u036f]/g, "")) {
                vide[i] = mot[i];
                console.log(prenom);
                bool = false;
            }
            
       }
       if(bool==false){
        prenom[indice].score++ ;
        }
       
       caractereEntre.push(letter.value.toLowerCase().normalize('NFD').replace(/[\u0300-\u036f]/g, ""));
    }
   
   
    
   //    document.getElementById('lettres').innerText = caractereEntre.join('');
      // En jquery
      $('#lettres').text(caractereEntre.join(''));
      // document.getElementById('mot').innerText = vide.join('');
      $('#mot').text(vide.join(''));
      letter.value = '';
      indice = shuffle();
      document.getElementById('message').innerText = prenom[indice].prenom + ' à toi de jouer';
      console.log(prenom);

      // Si pas de caractère trouvé
   if(bool == true && bool2 == true){ 
    error++;
    $('.erreur' + error).fadeIn(2000);
    if (error == 10){
        //document.getElementById('message').innerText = 'Perdu ! Partie términé';
        // En jquery
        $('#message').text('Perdu ! Partie terminée');
        letter.setAttribute('disabled', 'disabled');
        $(".score").show();
        $(".skull").show();
        // document.getElementById('mot').innerText = mot;
        $('#mot').text(mot);

        //trie les gens 
        prenom.sort((a,b) =>{ 
            return b.score - a.score;
        });

        let scoreDom = $('.prenomscore');
        //Ajoute le score quand la partie est perdue.
        for (let i = 0; i < prenom.length; i++) {
            if(prenom[i].score != 0){
                scoreDom = scoreDom.html(scoreDom.html()+ prenom[i].prenom +' : ' + prenom[i].score + '<br>');
                }
        }

        
        return false;
        // En jquery
        //letter.attr('disabled','disabled');
        
    }
    

    //let ab = document.querySelectorAll('.erreur' + error); 
    // En jquery
    //let ab = [...$('.erreur' + error)];
    // En jquery
    // $('#svg').find('.erreur' + error).addClass('affiche');
    
    /*ab.forEach(function(element){ 
        //element.classList.add('affiche') 
        // En jquery
        element.addClass('affiche');
    });*/
   }else{
    bool = true;
    
   }
   if(!vide.includes('_')){
    // document.getElementById('message').innerText = 'Trouvé ! Partie términée';
    // en jQuery
    $('#message').text('Trouvé ! Partie terminée');
    letter.setAttribute('disabled', 'disabled');
    $(".score").show();
    // en jQuery
    //letter.attr('disabled','disabled');

    //Tri les gens
    prenom.sort((a,b) =>{ 
        return b.score - a.score;
    });

    let scoreDom = $('.prenomscore');
        //Ajoute le score quand la partie est gagnée
        for (let i = 0; i < prenom.length; i++) {
            if(prenom[i].score != 0){
            scoreDom = scoreDom.html(scoreDom.html()+ prenom[i].prenom +' : ' + prenom[i].score + '<br>');
            }
        }
}

});

// Fin code Firas + Leon





