// Voor plus bedragen
function berekensom(){

    var getal_1 = document.getElementById("getal_1").value;
    
    var getal_2 = document.getElementById("getal_2").value;
    
    var som = parseFloat(getal_1) + parseFloat(getal_2);
    
    var uitkomst = document.getElementById("uitkomst");
    
    var eigenberekening_F = document.getElementById("eigenberekening_F");
    
    if ( som === parseFloat(document.getElementById("getal_3").value)) {
        eigenberekening_F.innerHTML = "Het door jou berekende antwoord is goed";
        eigenberekening_F.style.color = "rgb(0, 255, 0)";
      } else {
        eigenberekening_F.innerHTML = "Het door jou berekende antwoord is fout";
        eigenberekening_F.style.color = "rgb(255, 0, 0)";
      }    
    uitkomst.innerHTML = "De som van " + getal_1 + "+" + getal_2 + "=" + som;
    
    }

    // Voor Min bedragen
    function berekenverschill(){
    
        var getal_1 = document.getElementById("getal_1").value;
        
        var getal_2 = document.getElementById("getal_2").value;
        
        var verschiil = parseFloat(getal_1) - parseFloat(getal_2);
        
        var uitkomst = document.getElementById("uitkomst");
        
        var eigenberekening_F = document.getElementById("eigenberekening_F");
    
        if ( verschiil === parseFloat(document.getElementById("getal_3").value)) {
            eigenberekening_F.innerHTML = "Het door jou berekende antwoord is goed";
            eigenberekening_F.style.color = "rgb(0, 255, 0)";
          } else {
            eigenberekening_F.innerHTML = "Het door jou berekende antwoord is fout";
            eigenberekening_F.style.color = "rgb(255, 0, 0)";
          }
          uitkomst.innerHTML = "De som van " + getal_1 + "-" + getal_2 + "=" + verschiil;
    }
    
     
    // Voor deelsommen
    function berekenquotient(){
    
        var getal_1 = document.getElementById("getal_1").value;
    
        var getal_2 = document.getElementById("getal_2").value;
    
        var quotient = parseFloat(getal_1) / parseFloat(getal_2);
    
        var uitkomst = document.getElementById("uitkomst");
    
        var eigenberekening = document.getElementById("eigenberekening");

        if ( quotient === parseFloat(document.getElementById("getal_3").value)) {
            eigenberekening_F.innerHTML = "Het door jou berekende antwoord is goed";
            eigenberekening_F.style.color = "rgb(0, 255, 0)";
          } else {
            eigenberekening_F.innerHTML = "Het door jou berekende antwoord is fout";
            eigenberekening_F.style.color = "rgb(255, 0, 0)";
          }
        uitkomst.innerHTML = "De som van " + getal_1 + "/" + getal_2 + " = " + quotient;
    }
    
    // Voor keer bedragen
    function berekenproduct(){
    
        var getal_1 = document.getElementById("getal_1").value;
        
        var getal_2 = document.getElementById("getal_2").value;
        
        var product = parseFloat(getal_1) * parseFloat(getal_2);
        
        var uitkomst = document.getElementById("uitkomst");
        
        var eigenberekening_F = document.getElementById("eigenberekening_F");

      if ( product === parseFloat(document.getElementById("getal_3").value)) {
            eigenberekening_F.innerHTML = "Het door jou berekende antwoord is goed";
            eigenberekening_F.style.color = "rgb(0, 255, 0)";
          } else {
            eigenberekening_F.innerHTML = "Het door jou berekende antwoord is fout";
            eigenberekening_F.style.color = "rgb(255, 0, 0)";
          }
         uitkomst.innerHTML = "De som van " + getal_1 + "x" + getal_2 + "=" + product;
    }