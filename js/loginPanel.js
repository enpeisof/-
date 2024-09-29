function valideForm (){
    var matricule = document.getElementById('user').value;
    var password = document.getElementById('pass').value;
    var submitButton = document.getElementById('input-submit');

        if(password.length<8 || password.includes("'") || matricule.includes("'") || matricule.length<5 ) {
                     submitButton.disabled = true;
                     submitButton.style.opacity = "50%";
                     return true;
             }else{
                 submitButton.style.opacity = "100%";
                 submitButton.disabled = false;
                 return false;
             }  
    
    
}
document.getElementById('loginForm').addEventListener("input",function(){
    valideForm ();
})




var showPasswordIcon = document.getElementById('show-password');
var passwordField = document.getElementById('pass');

showPasswordIcon.addEventListener('click', function () {
    if (passwordField.type === 'password') {
        passwordField.type = 'text';
    } else {
        passwordField.type = 'password';
    }
    showPasswordIcon.classList.add('blinking');

    setTimeout(function() {
        showPasswordIcon.classList.remove('blinking');
    }, 1000);
});