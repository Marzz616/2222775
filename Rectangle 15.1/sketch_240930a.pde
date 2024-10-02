

class Rectangle {
  
  int x=100;
  int y =100;
  int hoogte =100;
  int breedte = 100;
Rectangle (int x, int y, int hoogte, int breedte){
    this.x=x;
    this.y=y;
    this.hoogte=hoogte;
    this. breedte=breedte;
  }
//methode
  void RETdraw() {
    rect(x, y, hoogte, breedte);

  }
}

Rectangle phone  =new Rectangle(100,100,100,100);
void setup() {
  size(600, 400);
}
void draw() {
  
  phone.RETdraw();
}
