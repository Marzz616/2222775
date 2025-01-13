// script.js

document.getElementById('Change text').addEventListener('click', function() {
    changeText('New text!');
});

document.getElementById('Change style').addEventListener('click', function() {
    changeStyle('blue', '20px');
});

// Function to change text
function changeText(newText) {
    // Find the element with the id 'text' and change the text
    var textElement = document.getElementById('text');
    if (textElement) {
        textElement.innerText = newText;
    }
}

// Function to change style
function changeStyle(color, size) {
    // Find the element with the id 'text' and change the style
    var textElement = document.getElementById('text');
    if (textElement) {
        // Change the text color
        textElement.style.color = color;

        // Change the font size
        textElement.style.fontSize = size;
    }
}

