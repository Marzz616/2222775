boolean w =  false; //<>// //<>// //<>// //<>//
boolean a = false;
boolean s = false;
boolean d = false;
boolean Gameover = false;
boolean restart = false;
boolean eaten = false;
int score = 0;
int foodX = 360;
int foodY = 360;
int[] x = new int[100];
int[] y = new int[100];
int wgt = 750;
int hgt = 750;
int snakeLength = 1;

void keyPressed() { 
  if ((key == 'w'|| key == 'W') && !s){
    w = true;
    s = false;
    d = false;
    a = false;
  } else if ((key == 's' || key == 'S')&& !w){
    s = true;
    d = false;
    a = false;
    w = false;
  } else if ((key == 'a' || key == 'A')&& !d) {
    a = true;
    d = false;
    s = false;
    w = false;
  } else if ((key == 'd' || key =='D')&& !a) {
    d = true;
    s = false;
    a = false;
    w = false;
  } else if (key == ' ') {
    if (Gameover) {
      restart = true;
    }
  }
}

void eaten() {
  score += 1;
  snakeLength++;

  foodX = (int)random(0, wgt / 30) * 30;
  foodY = (int)random(0, hgt / 30) * 30;
}


//reset method
void resetGame() {

  snakeLength = 3;
  for (int i = 0; i < snakeLength; i++) {
    x[i] = 100 - i * 30;
    y[i] = 100;
  }

  foodX = 460;
  foodY = 460;
  eaten = false;
  Gameover = false;
  restart = false;
  w = false;
  a = false;
  s = false;
  d = false;
  score = 0;
}
void score() {
  if (snakeLength>=10) {
    frameRate(10+10);
    println("score is nu 10 zo slang gaat sneller");
  }
}
void setup() {
  size(800, 800);
  resetGame();
  frameRate(9);
  snakeLength = 3;
  x[0] = 0 ;
  x[1] = 30;
  x[2] = 60; 
  score();
  
}

void draw() {
  background(100, 255, 90);

  // Snake
  fill(21, 80, 255);
  for (int i = 0; i < snakeLength; i++) {
    rect(x[i], y[i], 30, 30);
  }

  // Food
  fill(136, 8, 8);
  rect(foodX, foodY, 30, 30);


  textAlign(LEFT);
  textSize(18);
  fill(255);
  text("SCORE: " + score, 0, 20);


  // GameOver code
  if (x[0] >= 773 || y[0] >= 773 || x[0] < -10 || y[0] < -10) {
    Gameover = true;
  }

  if (Gameover) {
    background(136, 8, 8);
    fill(0);
    text("Game over", 200, 200);
    text("score: " + score, 200, 230);
    text("Press space to restart", 200, 250);
  } else {

    for (int i = snakeLength - 1; i > 0; i--) {
      x[i] = x[i - 1];
      y[i] = y[i - 1];
    }

    if (w) {
      //check in je body of de positie hieronder al bestaat
      //
      int newY = y[0] - 30;
      int newX = x[0];

      if (checkCollisionSelf(newX, newY)) {
        Gameover = true;
      }

      y[0] = newY;
    }
    if (s) {

      int newY = y[0] + 30;
      int newX = x[0];

      if (checkCollisionSelf(newX, newY)) {
        Gameover = true;
      }

      y[0] = newY;
    }
    if (a) {
      int newY = y[0];
      int newX = x[0] - 30;

      if (checkCollisionSelf(newX, newY)) {
        Gameover = true;
      }

      x[0] = newX;                 
    }
    if (d) {
      int newY = y[0];
      int newX = x[0]+ 30;

      if (checkCollisionSelf(newX, newY)) {
        Gameover = true;
      }

      x[0] = newX;
    }



    if (x[0] < foodX + 30 && x[0] + 30 > foodX && y[0] < foodY + 30 && y[0] + 30 > foodY) {
      eaten();
    }
  }


  // Restart code
  if (restart) {
    resetGame();
  }
}

boolean checkCollisionSelf(int newX, int newY) {
  for (int i = 0; i< snakeLength; i++) {
    if (y[i] == newY && x[i] == newX) {
      return true;
    }
  }
  return false;
}
