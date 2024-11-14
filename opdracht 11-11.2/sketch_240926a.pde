 //H11.0 De Array
//  In dit doosje kon je informatie stoppen en eruit halen. Dit was wat een variabele deed.
//Een array is eigenlijk een stapel doosjes met allemaal dezelfde naam
//Hoe weet ik je nu het verschil tussen de doosjes. Het verschil weet je door een nummer.
//Het onderste doosje noemen we 0 en het doosje er bovenop noemen we 1 enzovoorts.

//H11.0.1 Declareren
//Het maken van een array in code gaat anders dan het maken van een variabele.
//Je begint net als bij een variabele met het type.
//Meteen na het type zet je blokhaken neer, hiermee zeg je dit wordt een array. Vervolgens geef je de array een naam.

//example van een array
int[] variabeleNaam;/// verschill is []

//H11.0.2
//Het initialiseren begint net als bij een gewone variabele met de variabele naam en het is teken =.
//Nu geef je na de is geen waarde zoals je gewend bent, maar zet je er het woord new neer.


void f() //void setup example
{
  variabeleNaam = new int[10]; // binnen the haakjes zet je de aantal
}
//Opdracht 11.1
//Maak een sketch met een array van lengte 26 en type string.

String[] vendingMachine = {"Lay's", "Doritos", "Snickers", "Mars", "Twix", "Oreo", "Stroopwafels", "Digestives",
  "Nature Valley", "Clif bars", "Notenmix", "gedroogd fruit", "KitKat", "Milky", "Way", "Haribo", "Skittles", "TUC",
  "Ritz", "Cup-a-Soup", "Nissin Cup Noodles", "Sandwiches", "wraps", "Coca-Cola", "Red Bull", "Red Bull", "fanta", };

void setup() {
  size (600, 400);
  vendingMachine();
  printer();

  variabeleNaam[0] = 5;
}

void vendingMachine() {
  for (int i = 0; i < vendingMachine.length; i++) {
    println (vendingMachine [i] + " " + i);
  }
}
//opdracht 11.2
//Maak een sketch en gebruik declaratiemethode drie om een array van 7 getallen te maken.
//Print vervolgens de array in de console.

int [] numbers = {5, 10, 20, 30, 40, 50, 60, 70};

void printer() {
  for (int i = 0; i < numbers.length; i++) {
    println ( numbers[i]);
  }
}
