<?php include "./nav_ber_ad.php"?>
<?php session_start();?>
<html>
<body>
<center>
<img src="../img/title_logo.png" width="88" height="80">
<h3>Admin Join BEPARTNER    1/3</h3>

<form action="" method="post" enctype="multipart/form-data">

<table>
<tr>
<td>Full Name:</td>
<td><input type="text" name="fname" placeholder="User name" value="<?php echo  $_SESSION["fname"];  ?>"></td>
</tr>


<td>Email:</td>
<td><input type="email" name="email" placeholder="example@bepartner.com"  value="<?php echo  $_SESSION["email"];  ?>"> </td>
</tr>
<tr>

<td>Add photo:</td>
<td><input type="file" name="myfile"></td>
</tr>
<tr> 
<td><input type="submit" value="Continue" name="ad_next1">
<input type="reset" value="Reset"></td>
</tr>
</table>

<p> Already have an account? <a href="sign_in_admin.php">Sign In</a>
<br> <br> <br> <br>
<?php include "../control/ad_process_join1.php"?>

</center>
</body>
</html>



<?php include "./footer.php"?>