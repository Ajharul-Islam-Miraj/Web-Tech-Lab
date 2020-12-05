<?php include_once "php_codes/reg_validation.php" ;?>
<html>
    <head>
        <title>Registration</title>
    </head>
    <body>
        <center>
            <h1>Welcome to Registration</h1>
        </center>
        <center>
            <form action="" method="POST">
                <table>
                    <tr>
                        <td align="left">User Name:</td>
                        <td align="left"><input type="text" value="<?php echo $uname;?>" name="uname"></td>
                        <td align="left"><span style="color:red;">*<?php echo $err_uname;?></span></td>
                    </tr>
                    <tr>
                        <td align="left">Password:</td>
                        <td align="left"><input type="password" value="<?php echo $pass;?>" name="pass"></td>
                        <td align="left"><span style="color:red;">*<?php echo $err_pass;?></span></td>
                    </tr>
                    <tr>
                        <td align="left">Confirm Password:</td>
                        <td align="left"><input type="password" value="<?php echo $cpass;?>" name="cpass"></td>
                        <td align="left"><span style="color:red;">*<?php echo $err_cpass;?></span></td>
                    </tr>
                    <tr>
                        <td align="left">Type:</td>
                        <td>
                            <input type="radio" name="type" value="Male"> Admin
                            <input type="radio" name="type" value="Female"> User
                        </td>
                        <td align="left"><span style="color:red;">*<?php echo $err_type;?></span></td>
                    </tr>
                    
                    <tr>
                        <td colspan="2" align="center">
                            <input type="submit" name="ok" value="OK">
                        </td>
                    </tr>
                </table>
            </form>
        </center>
    </body>
</html>