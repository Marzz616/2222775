
class Person {
  String naam;
  int leeftijd;
  String geslacht;

  Person (String naam, String geslacht, int leeftijd) {
    this.naam = naam;
    this.geslacht = geslacht;
    this.leeftijd = leeftijd;
  }

  void profile() {
    print(naam);
    print(" " + leeftijd);
  }
}
Person firstPerson = new Person("mario","male", 18 );

void setup(){
size(600,400);

firstPerson.profile();
}
