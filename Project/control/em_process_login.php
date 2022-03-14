<?php
session_start();
$flag = 1;
if(isset($_POST["submit"])){
    $data = file_get_contents("../file/em_join_info.json");
        $readData = json_decode($data,true);
        foreach($readData as $myobject)
        {
            if($myobject["email"] == $_POST["email"]){
                if($myobject["password"] == $_POST["pwd"]){
                    $flag = 0;
                }
                else{
                    $flag = 1;
                }
            }
	           
        }
        
        
        if($flag == 1){
            echo "Incorrect email or password.<br>";
        }
        else if($flag == 0){
            header("location:employee.php");
        }
    
}



?>