
"use strict";

var lignes = document.getElementsByClassName('ligne');
var noInsp, dateInsp, heureInsp, adresseInsp, contactInsp, noLocInsp, rmqInsp, nomLocataire, ville;
var noms = ["Mr Jean", "Mme Yvette", "Mr.Pierre", "Sylvain Puech"];
function getRandomInt(max) {
    return Math.floor(Math.random() * max);
}

for (let ligne of lignes){
    ligne.addEventListener('click', function (ev){ // La fonction qui gère le clic sur chaque ligne du tableau d'inspection
        // initialise les placeholders sur le formulaire en bas en fonction des indices de l'inspection séléctionnée
        noInsp = this.cells[0].innerHTML; 
        dateInsp = this.cells[1].innerHTML.split(' ')[0]; 
        heureInsp = this.cells[1].innerHTML.split(' ')[1]; 
        adresseInsp = this.cells[2].innerHTML; 
        contactInsp = this.cells[3].innerHTML; 
        noLocInsp = this.cells[4].innerHTML; 
        rmqInsp = this.cells[5].innerHTML; 
        // insère les placeholders sur le formulaire en bas en fonction des indices de l'inspection séléctionnée
        document.getElementById('noInsp').innerHTML = noInsp;
        document.getElementById('date').value = dateInsp;
        document.getElementById('date').style.backgroundColor = '#FFF29E';
        document.getElementById('heure').value = heureInsp;
        document.getElementById('heure').style.backgroundColor = '#FFF29E';
        document.getElementById('nomLocataire').value = noms[getRandomInt(3)];
        document.getElementById('nomLocataire').style.backgroundColor = '#FFF29E';
        document.getElementById('noLogement').value = noLocInsp;
        document.getElementById('noLogement').style.backgroundColor = '#FFF29E';
        document.getElementById('adresse').value = adresseInsp;
        document.getElementById('adresse').style.backgroundColor = '#FFF29E';
        document.getElementById('telephone').value = contactInsp;
        document.getElementById('telephone').style.backgroundColor = '#FFF29E';
        document.getElementById('remarques').value = rmqInsp;
        document.getElementById('remarques').style.backgroundColor = '#FFF29E';
    });
}

const toastTrigger = document.getElementById('liveToastBtn');
const toastLiveExample = document.getElementById('liveToast');

if (toastTrigger) {
  const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastLiveExample)
  toastTrigger.addEventListener('click', () => {
    toastBootstrap.show();
  });
}



