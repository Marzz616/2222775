//H6.6 boolean variable
// boolean is variable met alleen true or false

float  KLAAR = 3;
boolean quest = false;

if (KLAAR >= 3){quest = true;}

if (quest) {println("gefeliciteerd");} 

//Verdiepingsopdrachten

//H6.7
//Pas het voorbeeld van H6.5 zo aan dat je of een diploma of een vrijstelling kunt hebben om gefeliciteerd
//te worden met de diploma. Vrijstelling is in dit geval ook een boolean variabele.
float cijfer = 5.7;
boolean diploma = false;
boolean Vrijstelling = false;

if(cijfer >= 5.5){
  diploma = true;
  Vrijstelling = true;
  
}

if(diploma == true || Vrijstelling == true) {
println("Gefeliciteerd");
}

//H6.8
//Pas het voorbeeld van H6.5 zo aan dat je boven een 8 cumlaude bent geslaagd. 
//Cumlaude is in dit geval ook een boolean. Als je cumlaude bent geslaagd, wordt je daar ook voor gefeliciteerd. 
float cijfers = 9.6;
float cijfers2 = 9.2;
float cijfers3 = 8.7;
boolean diplomas = false;
boolean Vrijstellings = false;
boolean cumlaude = false;
if(cijfers >= 5.5 && cijfers2 >= 5.5 && cijfers3 >= 5.5){
  diploma = true;
  Vrijstelling = true;
  
}
if(cijfers >= 8.0 && cijfers2 >= 8.0 && cijfers3 >= 8.0){ 
cumlaude = true;
}

if(diploma == true && Vrijstelling == true && cumlaude == false) {
println("Gefeliciteerd");
} else if (diploma == true || Vrijstelling == true && cumlaude == true){
println("gefeliciteerd je bent geslaagd met cumlaude");
}
else { println("no cumlaude for you");
}

//H6.9
//Pas het voorbeeld van H6.5 zo aan dat je twee cijfers gekregen moet hebben, 
//deze moeten allebei voldoende zijn om je diploma te krijgen. 
float cijfers = 9.6;
float cijfers2 = 9.2;
float cijfers3 = 8.7;
boolean diplomas = false;
boolean Vrijstellings = false;
boolean cumlaude = false;
if(cijfers >= 5.5 && cijfers2 >= 5.5 && cijfers3 >= 5.5){
  diploma = true;
  Vrijstelling = true;
  
}
if(cijfers >= 8.0 && cijfers2 >= 8.0 && cijfers3 >= 8.0){ 
cumlaude = true;
}

if(diploma == true && Vrijstelling == true && cumlaude == false) {
println("Gefeliciteerd");
} else if (diploma == true || Vrijstelling == true && cumlaude == true){
println("gefeliciteerd je bent geslaagd met cumlaude");
}
else { println("no cumlaude for you");
}
