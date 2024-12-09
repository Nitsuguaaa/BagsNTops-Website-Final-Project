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

document.getElementById("login").addEventListener("submit", function(event) {
    event.preventDefault();
    const formData = new FormData(this);

    fetch('PHP/login_functions.php', {
        method: 'POST',
        body: formData
    })
    .then(response => {
        // Check if the response is OK (200 status)
        if (!response.ok) {
            throw new Error('Network response was not ok ' + response.statusText);
        }

        // Only read the response as JSON here
        return response.json();
    })
    .then(data => {
        console.log("Response data:", data); // Log the parsed data
        if (data.success) {
            console.log("login success!");
        } else {
            console.log("failed to login");
        }
    })
    .catch(error => {
        console.error('Error:', error);
    });
});