<?php 

$data = file_get_contents("../file/in_join_info.json");
$readData = json_decode($data,true);
foreach($readData as $myobject)
{echo $myobject["email"];
    
	foreach($myobject as $key=>$value)
    {   
        if($key == "password" && $value =="cadetrifat"){

        }
    }

	}



?>