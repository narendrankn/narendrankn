

function validateName(){
    console.log("coming here");
    
    var userName = document.getElementById("username").value;
    if(userName.length === 0){
        producePrompt("Name is required", "fnerror", "red","username");
        return false;
    }
    if(!userName.match(/^[A-za-z]*$/)){
        producePrompt("please enter valid name", "fnerror", "red", "username");
        return false;
    }
    producePrompt("valid Name", "fnerror", "green","username");
        return true;
}

function validateEmail(){
    
    var email = document.getElementById("email").value;
    if(email.length == 0){
        producePrompt("Email is required", "emerror", "red", "email");
        return false;
    }
    if(!email.match(/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/)){
        producePrompt("please enter valid email address", "emerror", "red","email");
        return false;
    }
    producePrompt(" valid Email address", "emerror", "green","email");
        return true;

}

function validatePhone(){
    var phoneno = document.getElementById("phone").value;
    if(phoneno.length == 0){
        producePrompt("phone Number is required", "pnerror", "red","phone");
        return false;
    }
    if(!phoneno.match(/^[0-9]{10}$/)){
        producePrompt("please enter valid phone Number", "pnerror", "red","phone");
        return false;
    }
    producePrompt("valid Phone Number", "pnerror", "green","phone");
        return true;
}



function validatedate(){
   
    if(date.length == 0){
        producePrompt("date is required", "dterror", "red", "date");
        return false;
    }
    producePrompt(" valid date", "dterror", "green","date");
        return true;
}

function validatepassword(){
    
    var password = document.getElementById("password").value;
    if(password.length == 0){
        producePrompt("password is required", "pswerror", "red","password");
        return false;
    }
    if(!password.match(/^(?=.*[A-Za-z])(?=.*\d)(?=.*[$@$!%*#?&])[A-Za-z\d$@$!%*#?&]{8,}$/)){
        producePrompt("password contain atleast 8 characters and at least 1 Alphabet and 1 Number", "pswerror", "red", "password");
        return false;
    }
    if(password.match(/^(?=.*[A-Za-z])(?=.*\d)(?=.*[$@$!%*#?&])[A-Za-z\d$@$!%*#?&]{8,}$/)){
     producePrompt(" valid password", "pswerror", "green","password");
    }
    return true;
}

function validaterepassword(){

    var repassword = document.getElementById("repassword").value;
    var password = document.getElementById("password").value;

    if(repassword.length == 0){
        producePrompt("re-password is required", "repswerror", "red","repassword");
        return false;
    }

    if((repassword.length != password.length) && (repassword != password)){
        producePrompt("password is not matching", "repswerror", "red", "repassword");
        return false;
    }
    if((repassword.length == password.length) && (repassword == password)){
        producePrompt("password matched", "repswerror", "green", "repassword");
        return true;
    }
    return true;
    
}


function producePrompt(message, promptLocation, color,username){
    document.getElementById(promptLocation).innerHTML = message;
    document.getElementById(promptLocation).style.color = color;
    document.getElementById(username).style.borderColor = color;
}


function validateFormOnSubmit(){
    var userName = document.getElementById("username").value;{
    if(userName.length == 0){
        producePrompt("Name is required", "fnerror", "red", "username");
        return false;
        }
        validateName();
    }

    var email = document.getElementById("email").value;{
    if(email.length == 0){
        producePrompt("Email is required", "emerror", "red", "email");
        return false;
        }
        validateEmail();
    }
    
   var phoneno = document.getElementById("phone").value;{
    if(phoneno.length == 0){
        producePrompt("Phone No is required", "pnerror", "red", "phone");
        return false;
        }
        validatePhone();
    }

    

     var date = document.getElementById("date").value;{
    if(date.length == 0){
        producePrompt("date is required", "dterror", "red", "date");
        return false;
        }
        validatedate();
    }

    var password = document.getElementById("password").value;{
    if(password.length == 0){
        producePrompt("password is required", "pswerror", "red", "password");
        return false;
        }
        validatepassword();
    }

    var repassword = document.getElementById("repassword").value;{
    if(repassword.length == 0){
        producePrompt("re-password is required", "repswerror", "red", "repassword");
        return false;
        }
        validaterepassword();
    }
}



