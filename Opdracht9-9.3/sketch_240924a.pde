//Opdracht 9.1
//Maak een methode die het gemiddelde van twee cijfers berekent en print deze. 
int aa = 2;
int bb = 5;

void Gemiddelde(int a, int b){
  println(a + b / 2);
  
}
//H9.5.1 Parameters
//Nu heb je geleerd om zelf methodes te maken en deze meerdere keren aan te roepen. Maar dit is soms minder handig. 
//Want elke keer hetzelfde met dezelfde informatie doen, is niet nuttig als je aan het programmeren bent.

void mijnMethode (int getal, int getaltwee){
int totaal = getal + getaltwee;
println("Som " +getal + " " + getaltwee + " " + totaal);
}

//Opdracht 9.2 
//Maak een methode die het gemiddelde van twee cijfers berekent en print deze.
//Maak gebruik van twee parameters.
void calculator (int nbr, int nbr2){
int antwoord = nbr + nbr2;
println("The som is " + nbr + " + " + nbr2 + " =  " + antwoord);
}
//H9.5.2 Return
//We beginnen met de som van een oud voorbeeld aan te passen, zodat hij iets returned. 
//Je ziet in dit nieuwe voorbeeld dat op regel vier mijnGetal de waarde krijgt die terug komt uit de methode.
//Dus de computer ziet de methode staan en voert deze uit. 
//Op regel 14 geeft hij het antwoord terug en dat antwoord komt in plaats van mijnMethode op regel 4. 

int mijnGetalls;


int numb3 (int numb1, int numbe){
  int kk = numb1 + numbe;
  return kk;
}

//Je kunt ook meerdere returns doen. De methode stopt dan bij de eerste return die hij tegen komt. 


boolean even;

boolean evengetal(int money){
    if(money % 2 == 0){
      return true;
    }else{
      return false;
    }   
}

//Opdracht9.3
//Maak een methode die het gemiddelde van twee cijfers berekent en het gemiddelde returned, maak gebruik van twee parameters.
//Hint
//Kijk naar het voorbeeld in H09.5.2.

int OP3;

int OPD3 (int kill, int kiler){
int ray = kill + kiler;
ray = ray / 2;
return ray;
}



void setup(){
Gemiddelde(aa, bb);
mijnMethode (5, 6);
calculator(23, 40);
mijnGetalls = numb3(4,4);
println (mijnGetalls);
even = evengetal(5);
println(even);
OP3=OPD3(40,2);
println(OP3);
}
