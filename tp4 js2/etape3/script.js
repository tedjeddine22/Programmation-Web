'use strict';
let ligne = 0;
function doInsertRowTable(nbr, nom, prenom, score) {
    const table = document.getElementsByTagName('table')[0];
    
    // technique vue dans le cour slide 104
    let row = document.createElement('tr');
    row.setAttribute('class', 'row');

    // et on ajoute les nom de classe difinit dans le css avec set attribut vue ds le slide 107
    let col1 = document.createElement('td');
    let col2 = document.createElement('td');
    let col3 = document.createElement('td');
    let col4 = document.createElement('td');
    let col5 = document.createElement('td');
    
    // ici on mets le texte avc innertext ds les td
    col1.innerText = nbr;
    col2.innerText = nom;
    col3.innerText = prenom;
    col4.innerText = score;

    let checkbox = document.createElement('input');
    checkbox.type = "checkbox";
    col5.appendChild(checkbox);

    col1.setAttribute('class','col_number');
    col2.setAttribute('class','col_text');
    col3.setAttribute('class','col_text');
    col4.setAttribute('class','col_number');
    col5.setAttribute('class','col_chkbox');

    row.appendChild(col1);
    row.appendChild(col2);
    row.appendChild(col3);
    row.appendChild(col4);
    row.appendChild(col5);

    table.appendChild(row);
}
let persons = [
    { nom: "nom-1", prenom: "prenom-1", points: 5 },
    { nom: "nom-2", prenom: "prenom-2", points: 10 },
    { nom: "nom-3", prenom: "prenom-3", points: 15 },
];
init()
function init(){
    // boucle for of vue dans le slide 44
    for(let person of persons){
        doInsert(person.nom, person.prenom, person.points);
    }
}
function doInsert(nom, prenom, points){
    ligne++;
    let num = ligne;
    doInsertRowTable(num,nom, prenom, points);
}
function consoleTableau(){
    console.log(persons);
}