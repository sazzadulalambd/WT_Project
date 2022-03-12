<?php

session_start();
$catagory = "";
$nflag = 0;
$pflag = 0;

if(isset($_POST["previous"])){

    header("location:s_admin_reg01.php");
 } 
if(isset($_POST["ad_next1"]))
{
    
    $error = 0;


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
        echo("Invalid Phone number.<br>");
        $error = 1;
    }
    else{
        $nflag = 0;
        $pflag = 0;
        $data = file_get_contents("../file/ad_join_info.json");
        $readData = json_decode($data);
        foreach($readData as $myobject)
        {
	        foreach($myobject as $key=>$value)
            {
		        if($key == "Nname" && $value == $_POST["Nname"]){
                    $nflag = 1;
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

    $Nname = $_POST["Nname"];
    if(empty($Nname)){
        echo"Invalid NID .<br>";
        $error = 1;
    }
    else{
        if($nflag == 1){
            echo "NID already exists.<br>";
            $error = 1;
        }
    }

    if(empty($_POST["Address"])){
        echo"Invalid address.<br>";
        $error = 1;
    }

    if(!isset($_POST["Skey"])){
        echo("Enter Security key .<br>");
        $error = 1;
    }
    else{
        
        $data = file_get_contents("../file/SQK.json");
        $readData = json_decode($data,true);
        foreach($readData as $myobject)
        {
            if($myobject["Securitykey"] == $_POST["Skey"])
            {
                    $Sflag = 0;
                
            }
            else
                {
                    $Sflag = 1;
                    
                }
	      
        }
    
        if($Sflag == 1){
            echo "Incorrect Security key.<br>";
        }
        
       

    if($error == 0){

        $_SESSION["Nname"] = $_POST["Nname"];
        $_SESSION["phone"] = $_POST["phone"];
        $_SESSION["Address"] = $_POST["Address"];
        $_SESSION["Skey"] = $_POST["Skey"];
        $_SESSION["DOB"] = $_POST["age"];
        $_SESSION["gender"] = $catagory;
                
        header("location:s_admin_reg03.php");
    }
    else{
        $error = 0;
    }
   
}

}
?>