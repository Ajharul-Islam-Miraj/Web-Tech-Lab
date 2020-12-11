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
        username.style.border="2px solid red";
    }
    if(password.value==""){
        hasError=true;
        err_password.innerHTML="* Password Required";
        err_password.focus();
        password.style.border="2px solid red";
    }
    return !hasError;
}

function doStudentValidation(){
    refreshAdd();
    var hasError=false;
    var name=getElement("name");
    var dob=getElement("dob");
    var credit=getElement("credit");
    var cgpa=getElement("cgpa");
    var dept=getElement("dept");
    var err_name=getElement("err_name");
    var err_dob=getElement("err_dob");
    var err_credit=getElement("err_credit");
    var err_cgpa=getElement("err_cgpa");
    var err_dept=getElement("err_dept");
    if(name.value==""){
        hasError=true;
        err_name.innerHTML="* Name Required";
        err_name.focus();
        name.style.border="4px solid red";
        
    }
    else if(name.value.search("1")!=-1 && name.value.search("2")!=-1 && name.value.search("3")!=-1 && name.value.search("4")!=-1 && name.value.search("5")!=-1 && name.value.search("6")!=-1 && name.value.search("7")!=-1 && name.value.search("8")!=-1 && name.value.search("9")!=-1 && name.value.search("0")!=-1){
        hasError=true;
        err_name.innerHTML="* Name Cannot Contain Numbers";
        err_name.focus();
        name.style.border="4px solid red";
    }
    if(dob.value==""){
        hasError=true;
        err_dob.innerHTML="* DOB Required";
        err_dob.focus();
        dob.style.border="4px solid red";
    }
    if(credit.value==""){
        hasError=true;
        err_credit.innerHTML="* Credit Required";
        err_credit.focus();
        credit.style.border="4px solid red";
    }
    if(cgpa.value==""){
        hasError=true;
        err_cgpa.innerHTML="* Name Required";
        err_cgpa.focus();
        cgpa.style.border="4px solid red";
    }
    else if(cgpa.value>4 && cgpa.value<0){
        hasError=true;
        err_cgpa.innerHTML="* Range 0-4";
        err_cgpa.focus();
        cgpa.style.border="4px solid red";
    }
    if(dept.value=="Select"){
        hasError=true;
        err_dept.innerHTML="* Name Required";
        err_dept.focus();
        dept.style.border="4px solid red";
    }
    return !hasError;
}

function refreshLog(){
    var err_username = getElement("err_username");
    var err_password = getElement("err_password");
	err_username.innerHTML="";
    err_password.innerHTML="";
    username.style.border="4px solid black";
    password.style.border="4px solid black";
}

function refreshAdd(){
    var err_name=getElement("err_name");
    var err_credit=getElement("err_credit");
    var err_cgpa=getElement("err_cgpa");
    var err_dob=getElement("err_dob");
    var err_dept=getElement("err_dept");
    err_name.innerHTML="";
    err_credit.innerHTML="";
    err_cgpa.innerHTML="";
    err_dob.innerHTML="";
    err_dept.innerHTML="";
    name.style.border="4px solid black";
    credit.style.border="4px solid black";
    cgpa.style.border="4px solid black";
    dob.style.border="4px solid black";
    dept.style.border="4px solid black";
}