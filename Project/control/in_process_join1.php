<?php

session_start();
$catagory = "";
$eflag = 0;
$pflag = 0;
if(isset($_POST["next1"])){
    //echo"Submit button is clicked.";
    $error = 0;

    $fname = $_POST["fname"];
    if(empty($fname)){
        echo"Invalid first name.<br>";
        $error = 1;
    }
    
    $lname = $_POST["lname"];
    if(empty($lname)){
        echo"Invalid last name.<br>";
        $error = 1;
    }

    $age = $_POST["age"];
    if(empty($age)){
        echo"Invalid age.<br>";
        $error = 1;
    }

    if(!isset($_POST["gender"]))
    {
        echo "Invalid gender.<br>";
        $error = 1;
    }
    else{
        if(isset($_POST["gender"]) && $_POST["gender"] == "r1")
        {
            $catagory = "Male";
        }
        if(isset($_POST["gender"]) && $_POST["gender"] == "r2")
        {
            $catagory = "Female";
        }
        if(isset($_POST["gender"]) && $_POST["gender"] == "r3")
        {
            $catagory = "Other";
        }
        
    }

    if(!isset($_POST["phone"])){
        echo("Invalid phone.<br>");
        $error = 1;
    }
    else{
        $eflag = 0;
        $pflag = 0;
        $data = file_get_contents("../file/in_join_info.json");
        $readData = json_decode($data);
        foreach($readData as $myobject)
        {
	        foreach($myobject as $key=>$value)
            {
		        if($key == "email" && $value == $_POST["email"]){
                    $eflag = 1;
                }
                if($key == "phone" && $value == $_POST["phone"]){
                    $pflag = 1;
                }

	        }
    
        }
        if($pflag == 1){
            echo "Phone already exixts.<br>";
            $error = 1;
        }
    }

    $email = $_POST["email"];
    if(empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email)){
        echo"Invalid email<br>";
        $error = 1;
    }
    else{
        if($eflag == 1){
            echo "Email already exists.<br>";
            $error = 1;
        }
    }



    
    
    if(empty($_POST["pAddress"])){
        echo"Invalid address.<br>";
        $error = 1;
    }

    if($error == 0){
        $_SESSION["lname"] = $_POST["lname"];
        $_SESSION["fname"] = $_POST["fname"];
        $_SESSION["DOB"] = $_POST["age"];
        $_SESSION["gender"] = $catagory;
        $_SESSION["phone"] = $_POST["phone"];
        $_SESSION["email"] = $_POST["email"];
        $_SESSION["pAddress"] = $_POST["pAddress"];
        header("location:in_register_2.php");
    }
    else{
        $error = 0;
    }
   

}
?>