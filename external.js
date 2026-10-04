const username = document.getElementById('displayusername').innerText;
const userID = document.getElementById('displayuserId').innerText;
const course = document.getElementById('displaycourse').innerText;
const year = document.getElementById('displayyear').innerText;
const section = document.getElementById('displaysection').innerText;

// Create a function that can hold the value of PHP variables
function greetUser() {
    alert(
        "Hello " + username + ". Your User ID is: " + userID + ". Your Course is: " + course +". Your Year Level is: " + year + ". Your Section is: " + section
    );
}