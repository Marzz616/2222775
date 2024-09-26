//H9.6 Recreate old assignments.
// In deze paragraaf wordt geen theorie uitgelegd,
//maar ga je werken aan oude opdrachten om deze met de theorie van dit hoofdstuk te maken.


//Opdracht 9.4
//Maak een methode die vier parameters heeft en teken een vierkant zonder de rect methode te gebruiken.

void Tekening(int x, int y, int hoogte, int breedte) {
    line(x, y, x + breedte, y ); // bovenste lin 
    line(x + breedte, y, x + breedte, y + hoogte); // Rechterlijn
    line(x+ breedte, y + hoogte, x,  y + hoogte);// Onderste lijn 
    line(x, y +hoogte, x, y);  //linkerlijn
}

void setup() {
  size(600, 400);
  Tekening (100, 100, 100, 100);
   paragraphs("you","should","run","now!");
   
}

//Opdracht 9.5
//Maak een methode die vier string parameters samenvoegt tot één en deze returned. 
//Print vervolgens de geretourneerde waarde uit.
void paragraphs(String a, String b, String c, String d){
  println(a+ " " + b + " "+ c + " "+ d);
  
}

//Opdracht 9.6
//Maak de volgende opdracht opnieuw: 
//Maak een sketch waarin vijf cirkels met hetzelfde beginpunt (rechts midden) worden getekend.
void draw(){

  int sizeF = 100;
  for (int i = 0; i < 5; i++) {
    ellipse(10 + sizeF*2, 100, sizeF, sizeF);
    sizeF = sizeF - 10;
  }
}
