<?php

session_start();
$catagory = "";
if(isset($_POST["next1"])){
    //echo"Submit button is clicked.";
    $error = 0;

    $fname = $_POST["oname"];
    if(empty($fname)){
        echo"Invalid organization name.<br>";
        $error = 1;
    }
    
    $lname = $_POST["liname"];
    if(empty($lname)){
        echo"Invalid organization license.<br>";
        $error = 1;
    }

    $age = $_POST["tin"];
    if(empty($age)){
        echo"Invalid tax identification number.<br>";
        $error = 1;
    }

    
    if(empty($_POST["oaddress"])){
        echo("Invalid organization address.<br>");
        $error = 1;
    }

    if(empty($_POST["edate"])){
        echo("Invalid date.<br>");
        $error = 1;
    }

    $email = $_POST["oemail"];
    if(empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email)){
        echo"Invalid email<br>";
        $error = 1;
    }
    
    if(empty($_POST["site"])){
        echo"Invalid website.<br>";
        $error = 1;
    }

    if($error == 0){
        $_SESSION["oname"] = $_POST["oname"];
        $_SESSION["liname"] = $_POST["liname"];
        $_SESSION["tin"] = $_POST["tin"];
        $_SESSION["oaddress"] = $_POST["oaddress"];
        $_SESSION["edate"] = $_POST["edate"];
        $_SESSION["oemail"] = $_POST["oemail"];
        $_SESSION["site"] = $_POST["site"];
        header("location:in_register_3.php");
    }
    else{
        $error = 0;
    }
   

}
?>
