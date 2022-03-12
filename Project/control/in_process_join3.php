<?php

session_start();
$catagory = "";
if(isset($_POST["previous"])){
   header("location:in_register_2.php");
}
if(isset($_POST["submit"])){
    $password = $_POST["pwd"];
    if(empty($password) || strlen($password)<7){
        echo("Password must at least 8 character.<br>");
    }
    else{
        if($password == $_POST["pwd2"]){
            $_SESSION["pwd"] = $password;
            $formdata = array( 
                'email'=> $_SESSION["email"],
                'password'=> $_SESSION["pwd"],
                'firstName'=> $_SESSION["fname"],
                'lastName'=> $_SESSION["lname"],
                'DOB' => $_SESSION["DOB"],
                'gender' => $_SESSION["gender"],
                'phone' => $_SESSION["phone"],
                'email' => $_SESSION["email"],
                'pAddress' => $_SESSION["pAddress"],

                'oname' => $_SESSION["DOB"],
                'linumber' => $_SESSION["liname"],
                'tin' => $_SESSION["tin"],
                'oaddress' => $_SESSION["oaddress"],
                'edate' => $_SESSION["edate"],
                'oemail' => $_SESSION["oemail"],
                'site' => $_SESSION["site"]
             );
             $existingdata = file_get_contents('../file/in_join_info.json');
             $tempJSONdata = json_decode($existingdata);
             $tempJSONdata[] =$formdata;
            //Convert updated array to JSON
             $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
         
         //write json data into data.json file
            if(file_put_contents("../file/in_join_info.json", $jsondata)) {
                header("location:in_profile.php");
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