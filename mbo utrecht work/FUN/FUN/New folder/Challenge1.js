/*
Schrijf een functie die 2 integers mee krijgt.
De functie moet het resterende terug geven van een deel som.
*/

function returnRemainder(num1, num2){
 return num1 % num2;

 
}

/*
Verwacht resultaat:
1
3
-1
0
*/

// De automatische test. Niet aanraken.
let testValues1 = [101, 3, -11, 5];
let testValues2 = [10, 4, 2, 5];

for (let i = 0; i < testValues1.length; i++) {
    console.log(returnRemainder(testValues1[i], testValues2[i]));
}