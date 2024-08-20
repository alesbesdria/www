// Fin code Charles
function bonbon(sucre,couleur,fabricant){
    this.sucre=sucre,
    this.couleur=couleur,
    this.fabricant=fabricant

    console.log('sucre:'+this.sucre+' couleur:'+this.couleur+' fabricant:'+this.fabricant);
}
kisscool = new bonbon('60%','bleue','Haribo');
tete = new bonbon('80%','noir','Hariboo');
