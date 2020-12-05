<?php
    session_start();
	$uname="";
	$err_uname="";
	$pass="";
	$err_pass="";
	$hasError=false;
	$flag=false;
	if(isset($_POST["login"])){
		if(empty($_POST["uname"])){
			$err_uname="Username Required";
			$hasError =true;	
		}
		else{
			$uname = htmlspecialchars($_POST["uname"]);
		}
		if(empty ($_POST["pass"])){
			$err_pass="Password Required";
			$hasError = true;
		}
		else{
			$pass=htmlspecialchars($_POST["pass"]);
        }
		
		if(!$hasError){
			$dbuname="root";
            $dbserver="localhost";
            $dbpass="";
            $dbname="labtask";

            $conn=mysqli_connect($dbserver,$dbuname,$dbpass,$dbname);
            if(!$conn){
                die("Connection Failed: ".mysqli_connect_error());
			}

			$passencrypt=md5($pass);
			
			$query="SELECT * FROM users";
			$userdata=mysqli_query($conn,$query);
			if(mysqli_num_rows($userdata)>0){
				echo '<table border="1" style="border-collapse:collapse;">';
				echo "<tr>";
				echo "<th>Username</th>";
				echo "<th>Password</th>";
				echo "<th>Usertype</th>";
				while($row=mysqli_fetch_assoc($userdata)){
					echo "</tr>";
					echo "<tr>";
					echo "<td>".$row["username"]."</td>";
					echo "<td>".$row["pass"]."</td>";
					echo "<td>".$type["type"]."</td>";
					echo '</tr>';
				}
				echo '</table>';
			}
		}
	}
	
?>
