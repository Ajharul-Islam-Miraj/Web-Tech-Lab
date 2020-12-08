function getElement(id){
    return document.getElementById(id);
}

function doLoginValidation(){
    refreshLog();
    var hasError=false;
    var username=getElement("username");
    var password=getElement("password");
    var err_username=getElement("err_username");
    var err_password=getElement("err_password");
    if(username.value==""){
        hasError=true;
        err_username.innerHTML="* Username Required";
        err_username.focus();
    }
    else if(username.search(" ")!=-1 && username.length<6){
        hasError=true;
        err_username.innerHTML="* Username Cannot Contain Spaces and Must be 6 Characters";
        err_username.focus();
    }
    if(password.value==""){
        hasError=true;
        err_password.innerHTML="* Password Required";
        err_password.focus();
    }
    else if(password.length<8){
        hasError=true;
        err_password.innerHTML="* Password Must be 8 Characters";
        err_password.focus();
    }
    return !hasError;
}

function doRegValidation(){
    refreshReg();
    var hasError=!doLoginValidation();
    var name=getElement("name");
    var email=getElement("email");
    var phone=getElement("phone");
    var err_name=getElement("err_name");
    var err_email=getElement("err_email");
    var err_phone=getElement("err_phone");
    if(name.value==""){
        hasError=true;
        err_name.innerHTML="* Name Required";
        err_name.focus();
    }
    else if(name.search("1")!=-1 && name.search("2")!=-1 && name.search("3")!=-1 && name.search("4")!=-1 && name.search("5")!=-1 && name.search("6")!=-1 && name.search("7")!=-1 && name.search("8")!=-1 && name.search("9")!=-1 && name.search("0")!=-1){
        hasError=true;
        err_name.innerHTML="* Name Cannot Contain Numbers";
        err_name.focus();
    }
    if(email.value==""){
        hasError=true;
        err_email.innerHTML="* Email Required";
        err_email.focus();
    }
    else if(email.search("@") && email.length<6){
        hasError=true;
        err_email.innerHTML="* Invalid Email";
        err_email.focus();
    }
    if(phone.value==""){
        hasError=true;
        err_phone.innerHTML="* Phone Required";
        err_phone.focus();
    }
    else if(phone.length!=11){
        hasError=true;
        err_phone.innerHTML="* Invalid Phone";
        err_phone.focus();
    }
    return !hasError;
}

function refreshLog(){
    var err_username = getElement("err_username");
    var err_password = getElement("err_password");
	err_username.innerHTML = "";
    err_password.innerHTML = "";
}

function refreshReg(){
	var err_name = getElement("err_name");
    var err_email = getElement("err_email");
    var err_phone = getElement("err_phone");
	err_name.innerHTML = "";
	err_email.innerHTML = "";
    err_phone.innerHTML = "";
}