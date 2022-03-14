<?php

$eflag = 0;

if(isset($_POST["reset"])){
    session_unset();
    session_destroy();
}

if(isset($_POST["continue"])){

    $error = 0;

    $fname = $_POST["fname"];
    if(empty($fname)){
        echo"Invalid Frist Name.<br>";
        $error = 1;
    }

    $lname = $_POST["lname"];
    if(empty($lname)){
        echo"Invalid Last Name.<br>";
        $error = 1;
    }
    

    $email = $_POST["email"];
    if(empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email)){
        echo"Invalid email<br>";
        $error = 1;
    }
    else{

        $eflag = 0;
        $data = file_get_contents("../file/em_join_info.json");
        $readData = json_decode($data);
        foreach($readData as $myobject)
        {
	        foreach($myobject as $key=>$value)
            {
		        if($key == "email" && $value == $_POST["email"]){
                    $eflag = 1;
                }

	        }
    
        }
        if($eflag == 1){
            echo "Email already exists.<br>";
            $error = 1;
        }
    }



    if($error == 0){
        
        $_SESSION["fname"] = $_POST["fname"];
        $_SESSION["lname"] = $_POST["lname"];
        $_SESSION["email"] = $_POST["email"];
        header("location:J_Employee_reg02.php");
    }
    else{
        $error = 0;
    }

   

}
?>