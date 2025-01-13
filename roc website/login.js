

// Login function
function login() {
    if (inputUsername === "" || inputdate === "") {
        messageDiv.innerHTML = "Please fill in all fields.";
        messageDiv.style.color = "red";
        return;
    }

    if (user.validateLogin(inputUsername, inputPassword)) {
        window.location.href = "Roblox.html";

    } else {
        messageDiv.innerHTML = "please type in a valid Username and join date.";
        messageDiv.style.color = "red";
    }
}