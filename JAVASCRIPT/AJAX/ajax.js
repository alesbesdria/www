// Je sélectionne le champ code postal
/*let cp = document.getElementById('cp');
// Je sélectionne le champ ville
let liste = document.getElementById('ville');
// J'écoute l'evènement sur le champ code postal
cp.addEventListener('keyup', () =>{
    // je récupère la valeur du champ code postal
    let code = cp.value;
    // Je vérfie si il y a bien 5 caractères dans le champ
    // Zemmour écrit ici !
    if(code.length == 2){ 
        liste.innerHTML = '';
        const reponse = fetch('https://geo.api.gouv.fr/departements/'+code+'/communes').then((reponse)=>{
        let ville = reponse.json().then((ville)=>{
            ville.forEach((commune)=>{
                liste.innerHTML+='<option value="'+commune.code+'">'+commune.nom+'</option>';
            });
        })
            console.log(reponse);
    })}
    else if(code.length == 5){
        // Je vide la liste déroulante
        liste.innerHTML = '';
        const reponse = fetch("https://geo.api.gouv.fr/communes?codePostal="+code).then((reponse)=>{
            let ville = reponse.json().then((ville)=>{
                ville.forEach((commune)=>{
                    liste.innerHTML+= '<option value="'+commune.code+'">'+commune.nom+'</option>';
                    
                });
                //console.log('/');
            });
            
            
            
        }
            
        );
        
        
    } 
});*/
/* AJAX en Jquery */
$('#cp').on('keyup', ()=>{
    let code = $('#cp').val();
    if(code.length == 5){
        $.ajax({
            url: "https://geo.api.gouv.fr/communes?codePostal="+code,
            beforeSend: function(){
                $('#ville').html('');
            },
            success: function(reponse){
                 reponse.forEach((commune)=>{
                    $('#ville').html($('#ville').html()+'<option value="'+commune.code+'">'+commune.nom+'</option>');
                    
                });
            }
        });
    }
    
});

$('#cp').on ('keyup',()=>{
    let code = $('#cp').val();
    if (code.length == 2) {
      $.ajax({
        url:('https://geo.api.gouv.fr/departements/'+code+'/communes'),
        beforeSend:function(){
            $('#ville').html('')
        },
        success:function(reponse){
            reponse.forEach((commune)=>{
                $('#ville').html($('#ville').html()+'<option value="'+ commune.code+'">'+commune.nom+'</option>');
            });
        }
      }) ; 
    }
});
