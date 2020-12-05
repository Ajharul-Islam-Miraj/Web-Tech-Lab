<?php
	$uname="";
	$err_uname="";
	$pass="";
    $err_pass="";
    $cpass="";
    $err_cpass="";
    $type="";
    $err_type="";
	$hasError=false;
	if(isset($_POST["ok"])){
        //USERNAME VALIDATION
		if(empty($_POST["uname"])){
			$err_uname="Username Required";
			$hasError =true;	
        }
        elseif((strlen($_POST["uname"])<6)){
            $err_uname="Username must be 6 characters long!";
            $hasError=true;
        }
		else{
			$uname = htmlspecialchars($_POST["uname"]);
        }
        //PASSWORD VALIDATION
		if(empty($_POST["pass"])){
            $err_pass="Please Enter Password!";
            $hasError=true;
        }
        elseif(strlen($_POST["pass"])<8){
            $err_pass="Password must be 8 characters long.";
            $hasError=true;
        }
        elseif(!strpos($_POST['pass'], "1") && !strpos($_POST['pass'], "2") && !strpos($_POST['pass'], "3") && !strpos($_POST['pass'], "4")
            && !strpos($_POST['pass'], "5") && !strpos($_POST['pass'], "6") && !strpos($_POST['pass'], "7") && !strpos($_POST['pass'], "8")
            && !strpos($_POST['pass'], "9") && !strpos($_POST['pass'], "0")) {
            $err_pass="Password must have 1 numeric";
            $hasError=true;
        }
        elseif(strcmp(strtoupper($_POST["pass"]),$_POST["pass"])==0 && strcmp(strtolower($_POST["pass"]),$_POST["pass"])==0){
            $err_pass="Password must contain 1 Upper and Lowercase letter.";
            $hasError=true;
        }
        elseif(strpos($_POST["pass"],"#")==false && strpos($_POST["pass"],"?")==false){
            $err_pass="Password must contain '#' or '?'.";
            $hasError=true;
        }
        elseif(empty($_POST["cpass"])){
            $err_cpass="Please Enter Confirm Password!";
            $hasError=true;
        }
        elseif(strcmp($_POST["cpass"],$_POST["pass"])!=0){
            $err_cpass="Password and Confirm Password must be same.";
            $hasError=true;
        }
        else{
            $pass=htmlspecialchars($_POST["pass"]);
        }
        //CONFIRM PASSWORD VALIDATION
        
        //GENDER VALIDATION
        if(isset($_POST["type"])){
            $type=$_POST["type"];
        }
        else{
            $err_type="Select a Type!";
            $hasError=true;
        }
		
		if(!$hasError){
            $dbuname="root";
            $dbserver="localhost";
            $dbpass="";
            $dbname="labtask";
            $query="";

            $conn=mysqli_connect($dbserver,$dbuname,$dbpass,$dbname);
            if(!$conn){
                die("Connection Failed: ".mysqli_connect_error());
            }

            $passencrypt=md5($pass);

            if(strcmp($type,"User")==0){
                $query="INSERT INTO users VALUES('".$uname."','".$passencrypt."','user')";
                mysqli_query($conn,$query);
                header("Location: login.php");
            }
            elseif(strcmp($type,"Admin")==0){
                $query="INSERT INTO users VALUES('".$uname."','".$passencrypt."','admin')";
                mysqli_query($conn,$query);
                header("Location: login.php");
            }
		}
	}
	
?>