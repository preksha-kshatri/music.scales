function namevalid(){
    var regexa = /^[A-Za-z0-9]*$/;
    var a = document.getElementById("uname").value;
    if(a==""){
        document.getElementById("amsg").innerHTML="Enter Username";
        var flag = false;
        return flag;
    }
    else if(a.length<8){
        document.getElementById("amsg").innerHTML="At least 8 characters";
        var flag = false;
        return flag;
    }
    else if(a.length>20){
        document.getElementById("amsg").innerHTML="Must be less than 20 characters";
        var flag = false;
        return flag;
    }
    else if(!a.match(regexa)){
        document.getElementById("amsg").innerHTML="Only alphabets & numbers are allowed";
        var flag = false;
        return flag;
    }else if(!isNaN(a.charAt(0))){
        document.getElementById("amsg").innerHTML="First character must be a letter";
        var flag = false;
        return flag;
    }
    else{
        document.getElementById("amsg").innerHTML="";
        var flag = true;
        return flag;
    }
}

function emailvalid(){
    var regexb = /^[a-zA-Z\d\s\._]+@[a-z\.]+\.[a-z]{2,3}$/;
    var b = document.getElementById("email").value;
    if(b==""){
        document.getElementById("bmsg").innerHTML="Enter a valid Email";
        var flag = false;
        return flag;
    }
    else if(!b.match(regexb)){
        document.getElementById("bmsg").innerHTML="Invalid Email";
        var flag = false;
        return flag;
    }
    else{
        document.getElementById("bmsg").innerHTML="";
        var flag = true;
        return flag;
    }
}

function passvalid(){
    var c = document.getElementById("pass").value;
    if(c==""){
        document.getElementById("cmsg").innerHTML="Enter Password";
        var flag = false;
        return flag;
    }
    else if(c.length<8 || c.length>20){
        document.getElementById("cmsg").innerHTML="8 to 20 characters";
        var flag = false;
        return flag;
    }
    else{
        document.getElementById("cmsg").innerHTML="";
        var flag = true;
        return flag;
    }
}

function cpassvalid(){
    var c = document.getElementById("pass").value;
    var d = document.getElementById("passcf").value;
    if(d!=c){
        document.getElementById("dmsg").innerHTML="Password doesn't match";
        var flag = false;
        return flag;
    }
    else{
        document.getElementById("dmsg").innerHTML="";
        var flag = true;
        return flag;
    }
}

function formValidate(){
    var form = document.getElementById('myForm');
    if(namevalid() && emailvalid() && passvalid() && cpassvalid()){
        alert("Account created successfully");
        form.submit();
    }else{
        alert("Invalid values");
        event.preventDefault();
    }
}