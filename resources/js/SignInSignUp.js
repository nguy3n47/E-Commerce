var z = document.getElementById("btn");

function register() {
    z.style.left = "60px";
}

function login() {
    z.style.left = "0px";
}
const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');
var signup = document.getElementsByClassName('sign-up-container');
var signin = document.getElementsByClassName('sign-in-container');
signUpButton.addEventListener('click', () => {
    //signup.style.left="400px";
    container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
    //signin.style.left="0px";
    container.classList.remove("right-panel-active");
});