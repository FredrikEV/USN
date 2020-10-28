function validerKlasse () { // Funksjon for validering av registrer klasse

    var klassekode = document.getElementById("klassekode").value;
    var klassenavn = document.getElementById("klassenavn").value;
    var studiumkode = document.getElementById("studiumkode").value;

    var feilmelding ="";

    if (!klassekode) {
        feilmelding = "Klassekode er ikke fylt ut <br/>";
    }

    if (!klassenavn) {
        feilmelding = feilmelding + "Klassenavn er ikke fylt ut <br/>";
    }

    if (!studiumkode) {
        feilmelding = feilmelding +  "Studiumkode er ikke fylt ut <br/>"; 
    }
    if (klassekode && klassenavn && studiumkode) {
        return true; 
    }
    else {
        document.getElementById("melding").style.color="red";
        document.getElementById("melding").innerHTML=feilmelding;
        return false; 
    }
}

function validerStudent () { // Funksjon for validering av registrer student

    var brukernavn = document.getElementById("brukernavn").value;
    var fornavn = document.getElementById("fornavn").value;
    var etternavn = document.getElementById("etternavn").value;
    var klassekode = document.getElementById("klassekode").value;

    var feilmelding ="";

    if (!brukernavn) {
        feilmelding = "Brukernavn er ikke fylt ut <br/>";
    }

    if (!fornavn) {
        feilmelding = feilmelding + "Fornavn er ikke fylt ut <br/>";
    }

    if (!etternavn) {
        feilmelding = feilmelding + "Etternavn er ikke fylt ut <br/>"; 
    }

    if (!klassekode) {
        feilmelding = feilmelding + "Klassekode er ikke fylt ut <br/>"; 
    }

    if (brukernavn && fornavn && etternavn && klassekode) {
        return true 
    }
    else {
        document.getElementById("melding").style.color="red";
        document.getElementById("melding").innerHTML=feilmelding;
        return false;
    }
}


function validerSok () { // Funksjon som validerer at søk er utfylt i klasseliste.php
    var sok = document.getElementById("sok").value; 
    
    var feilmelding = "";

    if (!sok) {
        feilmelding = "Søkefelt er ikke fylt ut";
    }
    
    if (sok) {
        return true 
    }
    else {
        document.getElementById("melding").style.color="red";
        document.getElementById("melding").innerHTML=feilmelding;
        return false;
    }
}

function fjernMelding () { // Fjerner feilmeldinger om skjemaet blir tilbakestilt
    document.getElementById("melding").innerHTML="";
}

function musInn (element) { // Funksjon som gir ut melding utfyllelse når man muser inn over
    document.getElementById("melding").style.color="blue"; 
    if (element == document.getElementById("klassekode")) {
        document.getElementById("melding").innerHTML="Klassekode må fylles ut";
    }
    if (element == document.getElementById("klassenavn")) {
        document.getElementById("melding").innerHTML="Klassenavn må fylles ut";
    }
    if (element == document.getElementById("studiumkode")) {
        document.getElementById("melding").innerHTML="Studiumkode må fylles ut";
    }
    if (element == document.getElementById("brukernavn")) {
        document.getElementById("melding").innerHTML="Brukernavn må fylles ut";
    }
    if (element == document.getElementById("fornavn")) {
        document.getElementById("melding").innerHTML="Fornavn må fylles ut";
    }
    if (element == document.getElementById("etternavn")) {
        document.getElementById("melding").innerHTML="Etternavn må fylles ut";
    }
    if (element == document.getElementById("klassekode")) {
        document.getElementById("melding").innerHTML="Klassekode må fylles ut";
    }
    if (element == document.getElementById("sok")) {
        document.getElementById("melding").innerHTML="Søk må fylles ut";
    }
}

function musUt () { // Funksjon som gjør at melding går vekk når man muser ut fra et element 
    document.getElementById("melding").innerHTML="";
}

function fokus(element) { //Gjør at markerte elementer er farget 
    element.style.background="grey";
}

function mistetFokus (element) { // GJør at markerte elementer går tilbake til hvit farge (endre om bakgrunn ikke hvit)
    element.style.background="white";
}