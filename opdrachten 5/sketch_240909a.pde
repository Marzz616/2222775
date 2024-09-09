//H5.0 string variabelen
String  stukTekst = " God Ussap";

println(stukTekst);

//H5.1 string samen voegen
String stukTekst2 = " is the best sniper";
String together ="";
together = stukTekst + stukTekst2;

println (together);
println (stukTekst + stukTekst2);

//H5.1.1 spatie tussen string waardes
String stupid = "The one piece is real.";
String stup = "";

stup = stupid + " " + stupid;

println(stup);

//H5.1 opdracht
String A = "YOU Want my";
String B = "treasurer";
String C = "you can have it";
String D = "i left every thing i own in 1 place";
String E = "Now you just have to find it";
String F = "";

F = A + " " + B + " " +C + " " +D + " " + E;

println(F);

//H5.1.2 Verschill tussen opslaan en uitvoeren
// Zoals je nu een aantal keer gezien hebt, kunnen we Strings samen laten uitvoeren zonder ze samen te voegen. 
// Dit komt omdat we niet aangeven in welke variabele we het willen opslaan.
// Om iets op te slaan geef je eerst de locatie(variabele) aan gevolgd door een is(=) 
// en daarna de actie zoals optellen of samenvoegen. 

//h5.2 String en een andere variabele samenvoegen

int nbr = 1203;
String text1 = " wat lang zeg";
String together2 = "";

together2 = nbr + " " + text1;
println (together2);

//H5.2.1 Een variabele omzetten naar String
//Soms wil je een variabele printen of als tekst gebruiken.
//Dit kan met een methode. Echter is deze methode per programmeertaal anders en per programma uniek. 
//In Processing is de methode str.

int numbr = 5;
String gods = "";
gods = str(numbr);

println(gods);

gods = "" + numbr;

println(gods);
