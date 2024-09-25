

void setup() {

  //H8.0 While loop
  // Dit is ook wat een while loop doet. Zolang de voorwaarde true is, blijft hij de code herhalen.

  int teller = 0;

  while (teller <= 10) {
    println ("Ik ga net zolanfs door totdat teller groter is dan 10.");
    println ("teller is nu" + " " + teller );
    teller++;
  }
  int tellers = 0;

  while (tellers <= 9) {
    println ("tellers");
    tellers++;
  }

  //H08.1 For loop
  //Een for loop doet eigenlijk hetzelfde als een while loop, maar alles wordt in één zin verwerkt.
  for (int i =0; i<10; i++) {
    println("mijn variable is nu" + " " + i);
  }
  // Tip:
  //Een handig trucje om te onthouden is dat als je bij 0 begint en kleiner dan als voorwaarde gebruikt,
  //de waarde die rechts van het kleiner dan teken staat het aantal stappen aangeeft.
  //Dus je begint bij i = 0 en de voorwaarde is i < 20 dan duurt de for loop 20 stappen.

  //Opdracht8.2
  for (int i =1; i<10; i++) {
    println("i");
  }
  //H8.2 Vereisten bij for en while loops
  //Je moet bij for en while loops dus drie componenten hebben.
  //Een variabele (int teller = 0);
  //Een voorwaarde (teller < 10);
  //Een aanpassing aan de variabele (teller ++).
  //Heb je de eerste twee componenten niet, dan doet je code het niet.
  //Heb je nu de derde niet, dan doet je code het, maar stopt nooit meer, dit noemen we een infinite loop


  //H8.2.1 Naamgeving variabelen bij for en while loops
  for (int x = 0; x < 10; x++) {
  }
  //een for loop binnen een for loop binnen een for loop
  for (int i =0; i < 10; i++) {
    for (int j =0; j < 10; j++) {
      for (int k =0; k < 10; k++) {
      }
    }
  }


  for (int i = 0; i < 10; i++) {
  }
  for (int i = 0; i < 10; i++) {
  }
  //H8.4 tekenen met for en while loop
  //Het is handig om de for en while loop te kunnen gebruiken om iets in herhaling te tekenen of schrijven in je sketches.
  //Dit kan op twee manieren. De eerste manier is door gebruik te maken van de variabele in de for loop.
  //De tweede manier is door een extra variabele te maken.

  //H8.4.1 Tekenmethode 1


  for (int i = 0; i < 5; i++) {
    print(i * 20 + 20);
    print(i);
    print(i*20);
    print(i);
    println(i);
  }
  size (300, 240);
  background(255, 255, 255);
  //opdracht 8.3
  //Maak een sketch waarin 10 verticale lijnen worden getekend met tekenmethode 1.
  //Hint
  //De opdracht is bijna hetzelfde als het voorbeeld in H08.4.1.


  for (int i = 0; i < 10; i++)//the number 5 is vervang door 10
  {
    rect (20, i*20 + 20, 20, 20);
  }

  // 8.4.3 tekenem van cirkels

  int sizeC = 100;

  for (int i = 0; i < 5; i++) {
    ellipse(100, 100, sizeC, sizeC);
    sizeC = sizeC - 1;
  }

  for (int i = 0; i < 5; i++) {
    ellipse(100 - sizeC/2, 100 - sizeC/2, sizeC, sizeC);
    sizeC = sizeC - 10;
  }

  //opdracht 8.5
  //Maak een sketch waarin 5 concentrische (zelfde middelpunt) cirkels worden getekend.
  //De kleinste cirkel moet een grote van 10 hebben. Print de groote ook in de console ter controle.

  background (255, 255, 255); // if you want th see the opdrachten from before this remove background command
  int sizeB = 100;

  for (int i = 0; i < 10; i++) {
    ellipse(100, 100, sizeB, sizeB);
    sizeB = sizeB - 10;
  }

  //opdracht 8.6
  // Maak een sketch waarin 5 cirkels met hetzelfde beginpunt (rechts midden) worden getekend.
  int sizeF = 100;

  for (int i = 0; i < 5; i++) {
    ellipse(10 + sizeF*2, 100, sizeF, sizeF);
    sizeF = sizeF - 10;
  }
  //H8.5 Andere soorten voorwaardes
  //Naast de for en while voorbeelden in dit hoofdstuk,
  //zijn er nog honderden variaties te maken. Enkele voorbeelden zijn:

  //De volgende for loop begint op 100 en eindigt bij 90 en telt telkens af met 1.
  for (int i = 100; i > 90; i--) {
    println(i);
  }

  //De volgende for loop begint op 50 en eindigt bij 20 en telt telkens af met 5.
  for (int i = 50; i>=20; i-=5) {
    println(i);
  }

  //De volgende while loop gebruikt een bool als voorwaarde in plaats van een int. Hij stopt pas als de bool false wordt.
  int tel = 0;
  boolean doorgaan = true;

  while (doorgaan) {
    if (tel > 20) {
      doorgaan = false;
    } else {
      tel++;
    }
println (tel + " " + doorgaan);  
}
//opdracht 8.7
//Maak een sketch die in de console aftelt van 20 tot en met 10. Gebruik hiervoor een for loop.

for(int t = 20; t >= 10; t--){
println("the nummer is " + " " + t);
}
//opdracht 8.8
//Maak een sketch die in de console de rij van Fibonacci geeft. 
//Hint
//Het eerste getal is 0 en het tweede getal is 1. De rest van de reeks is telkens de som 
//van de twee voorgangers. 0,1,1,2,3,5,8,13,21 enz….
int A = 0;
int B  = 0;
int C = 1;

println (0);
println (1);
for( int i = 0; i < 10 ; i++){
   A = B + C;
  B = C;
  C = A;
   
println (C); 
}

}
  
