document.getElementById("loginForm").addEventListener("submit", function(event) {
    event.preventDefault();

    var username = document.getElementById("username").value.trim();
    var password = document.getElementById("password").value.trim();

    if (username === "" || password === "") {
        document.getElementById("error-message").style.display = "block";
        document.getElementById("error-message").innerText = "Por favor, completa todos los campos.";
        return false;
    }

    this.submit();
});
