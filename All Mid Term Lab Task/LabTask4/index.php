<?php
    $file=readfile("datafile.txt"); 
    $file=fopen("datafile.txt","r");

    while(!feof($file)){ 
        echo fgets($file)."<br>";
    }

    echo fgetc($file); 
    echo fgets($file); 

    while(!feof($file)){ 
        $line=fgets($file);
        $info=explode(" ",$line); 
    }
    echo "<pre>";
    print_r($info);
    echo "</pre>";
    echo "Username: ".$info[0]."<br>";
    echo "Pass: ".$info[1]."<br>"; 
    echo "Auth: ".$info[2]."<br>"; 
    $xml=simplexml_load_file("datafile.xml");
    echo "<pre>";
    print_r($xml); //WILL PRINT XML ELEMENT OBJECTS STORED IN ARRAY
    echo "</pre>";
    $users=$xml->user;
    foreach($users as $user){
        echo "Username: ".$user->username;
    }
    //redirect
    $flag=true;
    if($flag){
        header("Location: dashboard.php");
    }
?>