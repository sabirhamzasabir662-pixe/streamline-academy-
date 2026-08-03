// Login Function
function login() {

    let username = document.getElementById("username").value;
    let password = document.getElementById("password").value;

    if (username === "admin" && password === "12345") {

        alert("Login Successful!");

        window.location.href = "dashboard.html";

    } else {

        document.getElementById("error").innerHTML =
        "Invalid Username or Password";

    }

}

// Show / Hide Password

function showPassword() {

    let password = document.getElementById("password");

    if (password.type === "password") {

        password.type = "text";

    } else {

        password.type = "password";

    }

}