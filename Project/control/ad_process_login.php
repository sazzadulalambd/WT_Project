<?php
session_start();
$flag = 1;
if(isset($_POST["submit"])){
    $data = file_get_contents("../file/ad_join_info.json");
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
            header("location:admin.php");
        }
    
}



// // see if the auto-login cookie exists, if so set sessions vars
// if (isset($_COOKIE['autologin'])) {
// $user=mysql_query("select * from users where session_key = $_COOKIE[autologin]");
// $row3=mysql_fetch_assoc($user);



//         if ($_COOKIE['autologin'] == $row3['session_key']) {

//            $_SESSION['id'] = $row3['id'];
//            header("Location: admin.php");
//         }
//     }


// // User pressed "Login"
// if (count($_POST)) {

// $result = mysql_query("SELECT id FROM users 
//                        WHERE username = '".mysql_real_escape_string($_POST['email'])."' 
//                        AND password = '".mysql_real_escape_string($_POST['pwd'])."' ");


// if (mysql_num_rows($result) == 0) {
//     echo "Incorrect email or password.<br>";
// } else {
//     $_SESSION['id'] = mysql_result($result, 0, 'id');
//     header("Location: admin.php");
//     mysql_query("UPDATE users SET session_key = '".md5($_SERVER['REMOTE_ADDR'])."'");
//     setcookie("autologin", md5($_SERVER['REMOTE_ADDR']), time()+3600);
// }

// }



// if (isset($_SESSION['id'])) {

// exit('You are logged in!');

// }

?>