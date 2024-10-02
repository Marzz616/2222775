class bankAccount {
  int rekenNummer;
  float saldo;
  String eigenaar;

bankAccount (int rekenNummer, float saldo, String eigenaar) {
  
 this.rekenNummer=rekenNummer;
 this.saldo=saldo;
 this.eigenaar=eigenaar;
}
//methodes
void bankingProfile(){
  println("Reken Nummer: " + rekenNummer);
   println("Saldo: " + saldo);
 println( "Eigenaar: "+ eigenaar);
}

}
bankAccount mario = new bankAccount(12321321, 1200.23, "Mario Busby");

void setup(){

  size(600, 400);
  mario.bankingProfile();

}
