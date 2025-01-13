let plaatje = document.getElementById("plaatje");
let stapgrootteInput = document.getElementById("stapgrootte");
let afbeeldingsUrlInput = document.getElementById("afbeeldingsUrl");

function vergrootPlaatje() {
  if (plaatje.width < 500) {
    plaatje.width += 25;
  }
}

function verkleinPlaatje() {
  if (plaatje.width > 100) {
    plaatje.width -= 25;
  }
}

function resetPlaatje() {
  plaatje.width = 350;
}

function pasStapgrootteAan() {
  let nieuweStapgrootte = parseInt(stapgrootteInput.value);
  if (!isNaN(nieuweStapgrootte) && nieuweStapgrootte >= 0 && nieuweStapgrootte <= 50) {
    plaatje.width += nieuweStapgrootte;
  }
}

function updateAfbeelding() {
  let nieuweAfbeeldingsUrl = afbeeldingsUrlInput.value;
  if (nieuweAfbeeldingsUrl.trim() !== "") {
    plaatje.src = nieuweAfbeeldingsUrl;
  }
}
