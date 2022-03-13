<?php

$eflag = 0;
if(isset($_POST["ad_next1"])){

    $error = 0;

    $fname = $_POST["fname"];
    if(empty($fname)){
        echo"Invalid Full name.<br>";
        $error = 1;
    }
    

    $email = $_POST["email"];
    if(empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email)){
        echo"Invalid email<br>";
        $error = 1;
    }
    else{

        $eflag = 0;
        $data = file_get_contents("../file/ad_join_info.json");
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
        $_SESSION["email"] = $_POST["email"];
        header("location:s_admin_reg02.php");
    }
    else{
        $error = 0;
    }

   

}
?>