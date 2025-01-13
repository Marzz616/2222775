// Drie nummers inlezen
let A = parseInt(prompt("Voer het eerste nummer in:"));
let B = parseInt(prompt("Voer het tweede nummer in:"));
let C = parseInt(prompt("Voer het derde nummer in:"));

// Controleren of precies twee van de nummers gelijk zijn
if ((A === B && B !== C) || (A === C && A !== B) || (B === C && A !== B)) {
    console.log("OK");
} else {
    console.log("NIET OK");
}
