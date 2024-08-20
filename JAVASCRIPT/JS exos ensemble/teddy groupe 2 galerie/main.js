// https://t4.ftcdn.net/jpg/02/56/10/07/360_F_256100731_qNLp6MQ3FjYtA3Freu9epjhsAj2cwU9c.jpg

// 1 On commence par prendre des références aux éléments du DOM

const urlImg = document.getElementById('imageUrlInput');
const addImg = document.getElementById('addImageBtn');
const lightBox = document.getElementById('lightbox');
const galerie = document.getElementById('gallery');
const lightboxImage = document.getElementById('lightboxImage');
const closeButton = document.querySelector('.close');



// 2 On écoute les évènements

// addEventListener:
// objetEcouté.addEventListener("évenement", actionàExécutée)
addImg.addEventListener("click", ajouterImage)

 // 3 On affiche l'image dans la div gallery
function ajouterImage() {          
  // a - Récupérer url
  const url = urlImg.value;         

  // b - Vérifier qu'il y a bien une url
  if(url.length === 0){                     
    console.log("Le champs est vide");           
    return;  
  }

  // c - Crée un élément image, avec la scr = url
  const img = document.createElement("img");
  img.src = url;
  img.addEventListener("click", afficherLightbox);

  // d - ajoute l'élément image dans gallery
  galerie.appendChild(img);
}


// 4 On affiche la div lightbox quand l'utilisateur clic sur l'image
function afficherLightbox() {
  // a - mettre la source de l'image cliquée dans la source de lightboxImage
 lightboxImage.src = this.src; 

  // b - afficher lightbox
  // Enlever la classe hidden
lightBox.classList.remove("hidden");
}

// close l'image avec le button
closeButton.addEventListener("click", close)

function close() {
    lightBox.classList.add("hidden");
}

// GG !!!!
