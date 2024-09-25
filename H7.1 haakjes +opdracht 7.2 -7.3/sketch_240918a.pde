//H7.1 Haakjes
//Haakjes vertellen je code “Hey, dit moet eerst gedaan worden”. 
void setup (){
boolean fiets = false; 
boolean lopen = false;
boolean auto = false;//voor opdracht 7.3 moet dit false staan om niks uit te voeren

if (!lopen &&(fiets ||auto)){
println("Je gebruikt een voertuig met wielen.");
}
//Opdracht7.2
//Maak een sketch waarin je een rekensom met haakjes hebt en sla dit op in een variabele. 
//Print vervolgens de variabele in de console.

int GodUssap = 120000;
int DocChop = 100;
int Zo = 11100000;
int som = 0;

som = Zo + ( DocChop * GodUssap);


if (som >=12000){
println("the coordinates to the One piece are" + " " + som );
}

//Opdracht7.3
// Voer het boolean voorbeeld van H7.1 uit en pas de waarde van 1 boolean aan zodat het antwoord false is.
//Hint
//Het antwoord is false als de println niet uitgevoerd wordt en de zin niet zichtbaar is in de console.

if (!lopen &&(fiets ||auto)){
println("Je gebruikt een voertuig met wielen.");
}

}
