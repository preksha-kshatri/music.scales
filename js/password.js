function passvalid(){
    var d = document.getElementById("passcf").value;
    var c = document.getElementById("pass").value;
    if(c==""){
        document.getElementById("cmsg").innerHTML="Enter Password";
        return false;
    }
    else if(c.length<8 || c.length>20){
        document.getElementById("cmsg").innerHTML="8 to 20 characters";
        return false;
    }
    else{
        document.getElementById("cmsg").innerHTML="";
        return true;
    }
}

function cpassvalid(){
    var c = document.getElementById("pass").value;
    var d = document.getElementById("passcf").value;
    if(d!=c){
        document.getElementById("dmsg").innerHTML="Password doesn't match";
        return false;
    }
    else{
        document.getElementById("dmsg").innerHTML="";
        return true;
    }
}