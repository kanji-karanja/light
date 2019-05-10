function signUser() {
    var status = checkValidityForm();
    if(status==false){
       document.getElementById("signDetails").innerHTML = "<div class='alert alert-danger '>Kindly rectify the errors and try again</div>";
    }
    else {
        var names;
        var email;
        var phone;
        var password;
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("signUp").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET.html", "assets/serve/sign-up.php", true);
        xmlhttp.send();
    }
}
function checkValidityForm() {
    var password = document.getElementById('password').value;
    var repeatPass = document.getElementById('retypePassword').value;
    
    if(password!=repeatPass) {
        return false;
    }
    else{
        return true;
    }
    }