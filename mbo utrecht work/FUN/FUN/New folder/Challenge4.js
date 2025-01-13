/*
Schrijf een functie die 2 integers mee krijgt.
De functie moet de score van een basketbal match geven aan de hand van hoeveel 2 en 3 punters er gescoord zijn.
*/

function calculateBasketballScore(twoPointers, threePointers){
  let score2 = twoPointers * 2;
  let score3 = threePointers * 3;
    return score2 + score3;
}

/*
Verwacht resultaat:
56
31
37
70
*/

// De automatische test. Niet aanraken.
let testValues1 = [22, 5, 11, 17];
let testValues2 = [4, 7, 5, 12];

for (let i = 0; i < testValues1.length; i++) {
    console.log(calculateBasketballScore(testValues1[i], testValues2[i]));
}