"use strict";


// initialisation d'un tableau (slide 38)
const etudiants=["Etudiant1","Etudiant2","Etudiant3"];

// initialisation d'un objet (slide 39)
const etudiant={nom:"John",prenom:"DOE",age:30};

// initialisation d'un tableau d'objets (slide 40)
const tableauobjet=[
{nom:"nom1",prenom:"prenom1",age:21},
{nom:"nom2",prenom:"prenom2",age:22},
{nom:"nom3",prenom:"prenom3",age:23},
];


//declaration des fonctions sans parametre (slide 45)
function f1(){
	//utilise une Boucle slide 45
	for(let i=0;i<3;i++){ 
		console.log(etudiants[i]);

	}
}

function f2(){
	console.log(etudiant);
}

function f3(){
		//utilise une Boucle forEach (slide 44)
		tableauobjet.forEach(etudiantn => {
			console.log(etudiantn.nom +"-"+etudiantn.prenom +"-"+etudiantn.age);
		});
}