/*
Schrijf een functie die de straal van een cirkel mee krijgt.
De functie moet de diameter van de cirkel terug geven.
*/

function calculateDiameter(radius){
return radius * 2
}

/*
Verwacht resultaat:
20
50
72
8
*/

// De automatische test. Niet aanraken.
let testValues = [10, 25, 36, 4];

for (let i = 0; i < testValues.length; i++) {
    console.log(calculateDiameter(testValues[i]));
}