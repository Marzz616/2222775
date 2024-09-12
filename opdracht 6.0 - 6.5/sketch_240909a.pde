//H6.1 Basis statement
//Een if statement is een stukje code die kijkt of een bepaalde condition (voorwaarde) waar of niet waar is.

int lol = 1;


if (lol==2) {
  println("Ja de variabele is 2");
}

lol ++;
if (lol==2) {
  println("Ja de variabele is 2");
}
//H6.2 Verschillende if operators
// == gelijk aan elkaar
// != niet gelijk aan elkaar
// < kleiner dan 
// > groter dan
//<= kleiner of gelijk aan elkaar
// >= groter of gelijk aan elkaar

int temp = -2;
if (temp < 0){
  println("" + true);
}

String sneeuw = "wit";
if(sneeuw != "geel"){
  println("" + true);
}

int jantje = 6;
if (jantje > 4){
println(""+true);
}

String datum = "01-04";
String mijnVerjaardag = "01-04";         
if (mijnVerjaardag == datum){
println("" + true );
}

double myHeight = 1.60;
if (myHeight <= 1.60){
println("" + true);
}
int gehouden = 15;
if (gehouden >= 10 )
{println("" + true);}

//H6.3 If else en else if
int  leeftijd = 4; 
if (leeftijd >= 18){
println("Is ouder dan 18");}
else{
println("is jonger dan 18");}
//opdracht 6.3 
//Maak een sketch die kijkt of je een voldoende hebt of niet. Je maakt gebruik van een if en een else voor deze opdracht.
int ponoglyph = 3;

if(ponoglyph >= 5 ){
println("I AM KING OF THE PIRATES" );}
else{println ("You are not king of the pirates keep hunting");}

//H6.4
int leeftijds = 17;
if(leeftijds < 5){println("baby");}
else if(leeftijds < 4){println("kleuter");}
else if (leeftijds < 12){println("kind");}
else if (leeftijds < 20){println("tiener");}
else if (leeftijds < 25){println("adolescent");} 
else if (leeftijds >25){println("volwassene");} else {println("this is impossible" + "IT'S OVER 9000");}
//h6.4 Logische operator && en ||
// De && betekent ook.
// De || betekent of.
boolean kruipt = false;
boolean sluipt = true;

if(kruipt == true || sluipt == true){println("eureka");}
if (sluipt == true && kruipt == true){println("eureka");}

//6.5 
boolean Drake = true;
boolean GOAT = true;

if (Drake == true && GOAT == true) {println("kendrick better");}



      
