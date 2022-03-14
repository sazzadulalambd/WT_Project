<?php

session_start();
$catagory = "";
if(isset($_POST["previous"])){
   header("location:J_Employee_reg02.php");
}
if(isset($_POST["join"])){
    $password = $_POST["pwd"];
    if(empty($password) || strlen($password)<7){
        echo("Password must at least 8 character.<br>");
    }
    else{
        if($password == $_POST["pwd2"]){
            $_SESSION["pwd"] = $password;
            $formdata = array( 
                'FristName'=> $_SESSION["fname"],
                'lastName'=> $_SESSION["lname"],
                'email'=> $_SESSION["email"],
                'password'=> $_SESSION["pwd"],
                'NIDName'=> $_SESSION["Nname"],
                'DOB' => $_SESSION["DOB"],
                'gender' => $_SESSION["gender"],
                'Designation' => $_SESSION["designation"],
                'Securitykey' => $_SESSION["ekey"],

             );
             $existingdata = file_get_contents('../file/em_join_info.json');
             $tempJSONdata = json_decode($existingdata);
             $tempJSONdata[] =$formdata;
           
             $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
         
         
            if(file_put_contents("../file/em_join_info.json", $jsondata)) {
                header("location:employee.php");
            }
            else 
              echo "Something went wrong";
                
        }
        else{
            echo"Password did not match.<br>";
        }
    }
}
?>