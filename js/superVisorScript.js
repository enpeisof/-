function togglePassword(){
    var passInput =document.getElementById('passInput');

    if (passInput.type === 'password') {
        passInput.type = 'text';
    } else {
        passInput.type = 'password';
    }
   
}



function checkPass(){
    var pass = document.getElementById('newPassword').value;
    var passConf = document.getElementById('newPasswordConfirme').value;
    var passHelp = document.getElementById('passHelp');
    passHelp.textContent = "heloo";
    alert('ff');
    return 0;
}

document.getElementById("changePassForm").addEventListener("input",function(){
    alert("f");
})