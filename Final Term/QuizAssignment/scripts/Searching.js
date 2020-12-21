function DoSearch(searchText){
    if(searchText.value==""){
        document.getElementById("searching").innerHTML="";
        return;
    }
    var xhr=new XMLHttpRequest();
    xhr.onreadystatechange=function(){
        if(this.readyState==4 && this.status==200){
            document.getElementById("searching").innerHTML=this.responseText;
        }
    };
    xhr.open("GET","SearchBooks.php?name="+searchText.value,true);
    xhr.send();
}