// signin
const signinForm = document.querySelector('#loging-form');

singinForm.addEventListener('submit', e => {
    e.preventDefault();
    const Email = document.querySelector('#login-email');value;
    const Password = document.querySelector('#login-password');value;
    console.log(email, password)

    Auth
       .createUserWithEmailAndPassword(email, password)
       .then(userCredential => {
        // clear the form
        signupform.reset();

        // close the moral
        $('#signupmoral').modal('hide')

           console.log('sing up')
       })
})

function redireccion() {
    location.href="login.html";
}