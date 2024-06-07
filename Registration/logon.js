const signUpButton=document.getElementById('signUpButton');
const signInButton=document.getElementById('signInButton');
const signInForm=document.getElementById('signIn');
const signUpForm=document.getElementById('signUp');

//adding event listener to the sign up button

signUpButton.addEventListener('click',function()
{
    //allowing visibility/display of one container and disappearance of the other

    signInForm.style.display="none";
    signUpForm.style.display="block";
})

signInButton.addEventListener('click',function()
{
    signInForm.style.display="block";
    signUpForm.style.display="none";
})