function uvalidation(){
    var regexa = /^[a-zA-Z\d\s\._]+@[a-z\.]+\.[a-z]{2,3}$/;
    var a = document.getElementById("uemail").value;
    if(a==""){
        document.getElementById("amsg").innerHTML="Enter a valid Email";
        return false;
    }
    else if(!a.match(regexa)){
        document.getElementById("amsg").innerHTML="Invalid Email";
        return false;
    }
    else{
        document.getElementById("amsg").innerHTML="";
        return true;
    }
}

function pvalidation(){
    var b = document.getElementById("upass").value;
    if(b==""){
        document.getElementById("bmsg").innerHTML="Enter Password";
        return false;
    }
    else{
        document.getElementById("bmsg").innerHTML="";
        return true;
    }
}