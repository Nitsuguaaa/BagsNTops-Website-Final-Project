// Get the modal
var modal = document.getElementById('login-form');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

var x = document.getElementById("login");
var y = document.getElementById("signup");
var z = document.getElementById("btn");

function signup() {
    x.style.left = "-750px";
    y.style.left = "50px";
    z.style.left = "130px";
}

function login() {
    x.style.left = "50px";
    y.style.left = "850px";
    z.style.left = "0px";
}