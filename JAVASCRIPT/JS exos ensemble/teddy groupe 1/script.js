// Gestionnaire de tâches 🗒️

// let taches = [];

// function addTasks(tache) {
//   taches.push(tache);
// }

// function deleteTask(tache) {
//   const indexASupprimer = taches.indexOf(tache);
//   taches.splice(indexASupprimer, 1);
// }

// function showTask() {
//   console.log(taches);
// }

// addTasks("Faire du JavaScript");
// addTasks("Manger le chat");
// addTasks("Jouer avec la pomme");
// showTask();
// deleteTask("Manger le chat");
// showTask();

// const tableau = [1, "Teddy", 3, 4, 5];
// console.log(tableau);
// console.log(tableau.indexOf("Teddy"));

// Calcul de statistiques 📊

// function calculerMoyenne(tableau) {
//   // calculer la moyenne des tailles du tableau
//   // moyenne = somme de tous les chiffres divisé par le nombre d'éléments

//   // D'abord, on calcule la somme des éléments
//   let somme = calculerSomme(tableau);

//   // Ensuite on divise par le nombre d'éléments
//   let moyenne = somme / tableau.length;
//   return moyenne.toFixed(2);
// }

// function calculerSomme(tableau) {
//   let somme = 0;

//   for (let i = 0; i < tableau.length; i++) {
//     // somme = somme + tableau[i];
//     somme += tableau[i];
//   }
//   return somme;
// }

// function trouverValeurMaximale(tableau) {
//   let valeurMaximale = 0;

//   for (let i = 0; i < tableau.length; i++) {
//     // On compare la valeur actuelle à la valeur maximale
//     // donc on veut comparer tableau[i] à valeurMaximale
//     if (tableau[i] > valeurMaximale) {
//       // Si c'est plus grand, c'est la nouvelle valeur maximale
//       valeurMaximale = tableau[i];
//     }
//   }
//   return valeurMaximale;
// }

// const tailles = [1.75, 1.84, 1.74, 1.82, 1.9, 1.64];
// // console.log(tailles[0]);
// // console.log(tailles[1]);

// console.log("La moyenne est " + calculerMoyenne(tailles));
// console.log("La valeur maximale est " + trouverValeurMaximale(tailles));

// Générateur de mot ✒️

// const lettres = [
//   "a",
//   "b",
//   "c",
//   "d",
//   "e",
//   "f",
//   "g",
//   "h",
//   "i",
//   "j",
//   "k",
//   "l",
//   "m",
//   "n",
//   "o",
//   "p",
//   "q",
//   "r",
//   "s",
//   "t",
//   "u",
//   "v",
//   "w",
//   "x",
//   "y",
//   "z",
//   "e",
//   "e",
//   "e",
//   "e",
//   "e",
//   "e",
//   "e",
//   "a",
//   "a",
//   "a",
//   "a",
//   "a",
//   "a",
//   "u",
//   "u",
//   "u",
//   "u",
//   "u",
//   "o",
//   "o",
//   "o",
//   "o",
//   "o",
//   "l",
//   "l",
//   "l",
//   "l",
//   "l",
//   "t",
//   "t",
//   "t",
// ];

// function genererPhrase(longueurDuMot, nombreDeMots) {
//   // On commence par initialiser une chaine de caractère vide:
//   let mots = [];

//   for (let j = 0; j < nombreDeMots; j++) {
//     // A chaque tour de boucle, on ajoute un mot dans le tableau des mots
//     // mots += genererMot(longueurDuMot);
//     mots.push(genererMot(longueurDuMot));
//   }

//   return mots;
// }

function genererMot(longueurDuMot) {
  let mot = "";

  for (let i = 0; i < longueurDuMot; i++) {
    // A chaque tour de boucle, on ajoute une lettre à mot:
    // mot += lettres[Math.floor(Math.random() * lettres.length)];
    mot += lettres[Math.floor(Math.random() * lettres.length)];
  }

  return mot;
}

// console.log(genererMot(7));
// console.log(genererPhrase(7, 15));
