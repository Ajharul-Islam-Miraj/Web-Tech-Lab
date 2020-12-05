<?php 
    $name="";
    $err_name="";
    $uname="";
    $err_uname="";
    $pass="";
    $err_pass="";
    $cpass="";
    $err_cpass="";
    $email="";
    $err_email="";
    $phoneCode="";
    $err_phoneCode="";
    $phoneNum="";
    $err_phoneNum="";
    $address="";
    $err_address="";
    $city="";
    $err_city="";
    $state="";
    $err_state="";
    $postalCode="";
    $err_postalCode="";
    $dobDay="";
    $dobMonth="";
    $dobYear="";
    $err_dob="";
    $gender="";
    $err_gender="";
    $refer="";
    $err_refer="";
    $bio="";
    $err_bio="";
    $has_error=false;
    if(isset($_POST["register"])){
        if(empty($_POST["name"])){
            $err_name="Please Enter Your Name!";
            $has_error=true;
        }
        elseif(strpos($_POST["name"],"abcdefg")){
			$err_name="Name can not contain the sequence of 'abcdefg'";
            $has_error=true;
        }
        else{
            $name=htmlspecialchars($_POST["name"]);
        }
        if(empty($_POST["uname"])){
            $err_uname="Please Enter Username!";
            $has_error=true;
        }
        elseif((strlen($_POST["uname"])<6)){
            $err_uname="Username must be 6 characters long!";
            $has_error=true;
        }
        elseif(strpos($_POST["uname"]," ")){
            $err_uname="Username can not contain any space!";
            $has_error=true;
        }
        else{
            $uname=htmlspecialchars($_POST["uname"]);
        }
        if(empty($_POST["pass"])){
            $err_pass="Please Enter Password!";
            $has_error=true;
        }
        elseif(strlen($_POST["pass"])<8){
            $err_pass="Password must be 8 characters long.";
            $has_error=true;
        }
        elseif(!strpos($_POST["pass"],"#") || !strpos($_POST["pass"],"?")){
            $err_pass="Password must contain '#' or '?'.";
            $has_error=true;
        }
        elseif(!strpos($_POST["pass"],"1")){
            $err_pass="Password must contain 1 numeric.";
            $has_error=true;
        }
        elseif(strtolower($_POST["pass"])==$_POST["pass"] || strtolower($_POST["pass"])==$_POST["pass"]){
            $err_pass="Password must contain 1 Upper and Lowercase letter.";
            $has_error=true;
        }
        else{
            $pass=htmlspecialchars($_POST["pass"]);
        }
        if(empty($_POST["cpass"])){
            $err_cpass="Please Enter Confirm Password!";
            $has_error=true;
        }
        elseif(!strcmp($_POST["cpass"],strtoupper($_POST["pass"]))){
            $err_cpass="Password and Confirm Password must be same.";
            $has_error=true;
        }
        if(empty($_POST["email"])){
            $err_email="Please Enter Email!";
            $has_error=true;
        }
        elseif(strpos($_POST["email"],"@") && strpos($_POST["email"],".")){
            if(strpos($_POST["email"],"@") < strpos($_POST["email"],".")){
                $email=htmlspecialchars($_POST["email"]);
            }
            else{
                $err_email="'@' Must be before '.'.";
                $has_error=true;
            }
        }
        else{
            $err_email="Email must contain '@' and '.'.";
            $has_error=true;
        }
        if(empty($_POST["phoneCode"])){
            $err_phoneCode="Please Enter Phone Code!";
            $has_error=true;
        }
        elseif(strlen($_POST["phoneCode"]) != 3){
            $err_phoneCode="Phone code must be 3 characters.";
            $has_error=true;
        }
        elseif(!is_numeric($_POST["phoneCode"])){
            $err_phoneCode="Phone code must be numeric.";
            $has_error=true;
        }
        else{
            $phoneCode=htmlspecialchars($_POST["phoneCode"]);
        }
        if(empty($_POST["phoneNum"])){
            $err_phoneNum="Please Enter Phone Number!";
            $has_error=true;
        }
        elseif(strlen($_POST["phoneNum"]) != 10){
            $err_phoneNum="Phone number must be 10 characters.";
            $has_error=true;
        }
        elseif(!is_numeric($_POST["phoneNum"])){
            $err_phoneNum="Phone number must be numeric.";
            $has_error=true;
        }
        else{
            $phoneNum=htmlspecialchars($_POST["phoneNum"]);
        }
        if(empty($_POST["address"])){
            $err_address="Address can not be empty.";
            $has_error=true;
        }
        else{
            $address=htmlspecialchars($_POST["address"]);
        }
        if(empty($_POST["city"])){
            $err_city="City can not be empty.";
            $has_error=true;
        }
        else{
            $city=htmlspecialchars($_POST["city"]);
        }
        if(empty($_POST["state"])){
            $err_state="State can not be empty.";
            $has_error=true;
        }
        else{
            $state=htmlspecialchars($_POST["state"]);
        }
        if(empty($_POST["postalCode"])){
            $err_postalCode="Postal Code can not be empty.";
            $has_error=true;
        }
        else{
            $postalCode=htmlspecialchars($_POST["postalCode"]);
        }
        if(isset($_POST["dobDay"])){
            $dobDay=htmlspecialchars($_POST["dobDay"]);
        }
        elseif(isset($_POST["dobMonth"])){
            $dobDay=htmlspecialchars($_POST["dobMonth"]);
        }
        elseif(isset($_POST["dobYear"])){
            $dobDay=htmlspecialchars($_POST["dobYear"]);
        }
        else{
            $err_dob="Please Select Date of Birth Carefully!";
            $has_error=true;
        }
        if(!isset($_POST["gender"])){
			$err_gender="Gender Required.";
			$has_error=true;
        }
        else{
            $gender=htmlspecialchars($_POST["gender"]);
        }
        if(!isset($_POST["refer"])){
			$err_refer="Atleast select 1 Checkbox.";
			$has_error=true;
        }
        else{
            $dobDay=htmlspecialchars($_POST["dobDay"]);
            $dobMonth=htmlspecialchars($_POST["dobMonth"]);
            $dobYear=htmlspecialchars($_POST["dobYear"]);
        }
        if(empty($_POST["bio"])){
            $err_bio="Bio can not be empty!";
            $has_error=true;
        }
        else{
            $bio=htmlspecialchars($_POST["bio"]);
        }
        if(!$has_error){
            $details=array("Name: ".$name,"Username: ".$uname,"Password: ".$pass,"Email: ".$email,"Phone: +".$phoneCode.$phoneNum,"Address: ".$address,"City: ".$city,"State: ".$state,"Postal Code: ".$postalCode,"Birth Date: ".$dobDay.", ".$dobMonth.", ".$dobYear,"Gender: ".$gender,"Referred: ".implode(',', $_POST['refer']),"Bio: ".$bio);
            foreach($details as $detail){
                echo "<h4>".$detail."</h4><br>";
            }
        }
    }
?>
<html>
    <head>
        <title>Club Registration</title>
    </head>
    <body>
        <center>
            <table>
                <tr>
                    <td>
                        <form action="" method="POST">
                            <fieldset>
                                <legend><h1>Club Member Registration Form</h1></legend>
                                <table>
                                    <tr>
                                        <td align="right">Name:</td>
                                        <td><input type="text" name="name"> <?php echo $err_name ?></td>
                                    </tr>
                                    <tr>
                                        <td align="right">Username:</td>
                                        <td><input type="text" name="uname"> <?php echo $err_uname ?></td>
                                    </tr>
                                    <tr>
                                        <td align="right">Password:</td>
                                        <td><input type="password" name="pass"> <?php echo $err_pass ?></td>
                                    </tr>
                                    <tr>
                                        <td align="right">Confirm Password:</td>
                                        <td><input type="password" name="cpass"> <?php echo $err_cpass ?></td>
                                    </tr>
                                    <tr>
                                        <td align="right">Email:</td>
                                        <td><input type="text" name="email"> <?php echo $err_email ?></td>
                                    </tr>
                                    <tr>
                                        <td align="right">Phone:</td>
                                        <td>
                                            <input type="text" placeholder="Code" size="3" name="phoneCode"> <?php echo $err_phoneCode ?>-
                                            <input type="text" placeholder="Number" size="8" name="phoneNum"> <?php echo $err_phoneNum ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="right">Address:</td>
                                        <td><input type="text" placeholder="Street Address" name="address"> <?php echo $err_address ?></td>
                                    </tr>
                                    <tr>
                                        <td><!--NOTHING--></td>
                                        <td>
                                            <input type="text" placeholder="City" size="9" name="city"> <?php echo $err_city ?>-
                                            <input type="text" placeholder="State" size="15" name="state"> <?php echo $err_state ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><!--NOTHING--></td>
                                        <td><input type="text" placeholder="Postal/Zip Code" name="postalCode"> <?php echo $err_postalCode ?></td>
                                    </tr>
                                    <tr>
                                        <td align="right">Birth Date:</td>
                                        <td>
                                            <select name="dobDay">
                                                <?php
                                                    echo "<option disabled>Day</option>";
                                                    for($i=1; $i<=31; $i++){
                                                        echo "<option>".$i."</option>";
                                                    }
                                                ?>
                                            </select>
                                            <select name="dobMonth">
                                                <?php
                                                    $months=array("January","February","March","April","May","Jun","July","August","September","October","November","December");
                                                    echo "<option disabled>Month</option>";
                                                    for($i=0; $i<=11; $i++){
                                                        echo "<option>".$months[$i]."</option>";
                                                    }
                                                ?>
                                            </select>
                                            <select name="dobYear">
                                                <?php
                                                    echo "<option disabled>Year</option>";
                                                    for($i=1990; $i<2021; $i++){
                                                        echo "<option>".$i."</option>";
                                                    }
                                                ?>
                                            </select>
                                            <?php echo $err_dob ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="right">Gender:</td>
                                        <td>
                                            <input type="radio" name="gender"> Male
                                            <input type="radio" name="gender"> Female <?php echo "  |".$err_gender ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Where did you hear about us?</td>
                                        <td>
                                            <input type="checkbox" name="refer[]" value="A Friend or Colleague"> Movies<br>
							                <input type="checkbox" name="refer[]" value="Google"> Music <br>
							                <input type="checkbox" name="refer[]" value="Blog Post"> Programming<br>
							                <input type="checkbox" name="refer[]" value="News Article"> Travelling <?php echo "<br>".$err_refer ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="right">Bio:</td>
                                        <td><textarea name="bio"></textarea> <?php echo $err_bio ?></td>
                                    </tr>
                                    <tr>
                                        <td><!--NOTHING--></td>
                                        <td>
                                            <input type="submit" name="register" value="Register">
                                        </td>
                                    </tr>
                                </table>
                            </fieldset>
                        </form>
                    </td>
                </tr>
            </table>
        </center>
    </body>
</html>