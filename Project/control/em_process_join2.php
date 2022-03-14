<?php


$catagory = "";
$nflag = 0;
$pflag = 0;

if(isset($_POST["previous"])){

    header("location:J_Employee_reg01.php");
 } 
if(isset($_POST["continue"]))
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

    if(!isset($_POST["Nname"])){
        echo("Invalid NID.<br>");
        $error = 1;
    }
    else{
        $nflag = 0;
        $data = file_get_contents("../file/em_join_info.json");
        $readData0 = json_decode($data);
        foreach($readData0 as $myobject)
        {
	        foreach($myobject as $key=>$value)
            {
		        if($key == "ekey" && $value == $_POST["ekey"]){
                    $nflag = 1;
                }
	        }
    
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

    if(empty($_POST["designation"])){
        echo"Invalid Designation.<br>";
        $error = 1;
    }

    if(!isset($_POST["ekey"])){
        echo("Enter Security key .<br>");
        $error = 1;
    }
    else{
        
        $data = file_get_contents("../file/SQK_em.json");
        $readData = json_decode($data,true);
        foreach($readData as $myobject)
        {
            if($myobject["Securitykey"] == $_POST["ekey"])
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

        $_SESSION["designation"] = $_POST["designation"];
        $_SESSION["ekey"] = $_POST["ekey"];
        $_SESSION["gender"] = $catagory;
        $_SESSION["Nname"] = $_POST["Nname"];
        $_SESSION["DOB"] = $_POST["age"];
        
                
        header("location:J_Employee_reg03.php");
    }
    else{
        $error = 0;
    }
   
}

}
?>