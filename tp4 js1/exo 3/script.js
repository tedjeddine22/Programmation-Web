"use strict";


// initialisation des type complexes tableau d'objets slide 40
const students=[
	{num:1000,prenom:"JOHN",nom:"DOE",note1:14,note2:5},
	{num:2000,prenom:"BOB",nom:"CARLTON",note1:7,note2:1},
	{num:3000,prenom:"RAYANE",nom:"SMITH",note1:13,note2:3},
];


//declaration d une fonction avec parametre de type float et return un booleen slide 45
function admis(note){
	return note>=10
}

//declaration d'une fonction qui appelle une autre function
function deliberation(){
	students.forEach(student => {
		const num=student.num;
		const note1=student.note1;
		const note2=student.note2;
		const moy=(note1+note2)/2+5;
		//utilisation des conditions slide 42
		if(admis(moy))
			console.log(num +": ADMIS");
		else 
			console.log(num +": AJOURNÉ");
	});
}