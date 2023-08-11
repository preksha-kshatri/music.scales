function evalid(){
    var regexe = /^[a-zA-Z\d\s\._]+@[a-z\.]+\.[a-z]{2,3}$/;
    const e = document.getElementById('email').value
    if(e==""){
        displayMsg('Email is mandatory','msg','red')
        return false
    }
    else if(!e.match(regexe)){
        displayMsg('Invalid Email','msg','red')
        return false
    }
    else{
        displayMsg('Valid Email','msg','green')
        return true
    }
}

function displayMsg(msg, idvalue, colorvalue){
    document.getElementById(idvalue).innerHTML = msg
    document.getElementById(idvalue).style.color = colorvalue
}