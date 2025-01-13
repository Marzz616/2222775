/*
Schrijf een functie die 2 integers mee krijgt.
De functie moet de waardes switchen tussen parameter x en parameter y.
Je moet de 'return x - y' regel gebruiken die er staat.
*/

function switchAndSubtractValues(x, y){
    return y - x;
}

/*
Verwacht resultaat:
38
-56
25
-8
*/

// De automatische test. Niet aanraken.
let testValues1 = [22, 68, 34, 9];
let testValues2 = [60, 12, 59, 1];

for (let i = 0; i < testValues1.length; i++) {
    console.log(switchAndSubtractValues(testValues1[i], testValues2[i]));
}