const signInButton = document.getElementById('signInButton');

const signInForm = document.getElementById('signIn');

const signUpForm = document.getElementById('signup'); // Fixed ID to match the HTML


signUpButton.addEventListener('click', function () {

    signInForm.style.display = "none"; // Ensures signInForm is hidden

    signUpForm.style.display = "block"; // Ensures signUpForm is shown

});


signInButton.addEventListener('click', function () {

    signUpForm.style.display = "none"; // Ensure signUpForm is hidden

    signInForm.style.display = "block"; // Ensure signInForm is shown

});


