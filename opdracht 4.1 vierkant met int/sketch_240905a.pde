
//H4.1 int variabelen (uitleg)
int godUssap;
godUssap = 0;

println (godUssap);

godUssap = 10;
println(godUssap);

//4.1.1 Rekenen met int Variabelen
int a = 2;
int b = 10;
int totaal = 0;

totaal = a + b;
println (totaal);
totaal =  a * b;
println(totaal);
totaal = a - b;
println (totaal);


//H4.1 opdracht zonner hulp 
size (600, 400);
int a = 160;
int b = 100;
int c = 50;
int d = 0;

fill(a,b,c);
// linker zijde
d = a * b;
text (d, 10, 10);
d = b * c;
text (d, 10, 20);
d = b * a;
text (d, 10, 30);
d = c * a;
text (d, 10, 40);
d = a * b;
text (d, 10, 50);
d = b * c;
text (d, 10, 60);
d = c + b;
text (d, 10, 70);
d = c + a;
text (d, 10, 80);
d = a + b;
text (d, 10, 90);
d = b + c;
text (d, 10, 100);

//top
d = b * c;
text(d, 45, 10);
d = a * c;
text(d, 70, 10);
d = a * b;
text (d, 100, 10);
d = b * c;
text(d, 135, 10);
d = b * c;
text(d, 160, 10);
d = b * c;
text(d, 185, 10);

// recht zijde
d = b * c;
text(d, 185, 10);
d = b * c;
text(d, 185, 20);
d = b * c;
text(d, 185, 30);
d = b * c;
text(d, 185, 40);
d = b * c;
text(d, 185, 50);
d = b * c;
text(d, 185, 60);
d = b * c;
text(d, 185, 70);
d = b * c;
text(d, 185, 80);
d = b * c;
text(d, 185, 90);
d = b * c;
text(d, 185, 100);

//buttom
d = b + c;
text (d, 45, 100);
d = b + c;
text (d, 70, 100);
d = b + c;
text (d, 100, 100);
d = b + c;
text (d, 135, 100);
d = b + c;
text (d, 160, 100);
d = b + c;
text (d, 185, 100);

//H4.1 opdracht met hulp van klass genoten
size (600, 400);
int a = 160;
int b = 100;
int c = 80;
int d = 60;


fill(0,0,0);
rect(a,b,c,d);
