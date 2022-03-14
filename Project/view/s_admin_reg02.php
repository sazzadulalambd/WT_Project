<?php include "./nav_ber_ad.php"?>
<?php session_start();?>
<html>
<body>
<center>
<img src="../img/title_logo.png" width="88" height="80">
<h3>Admin Join BEPARTNER    2/3</h3>

<form action="" method="post">

<table>
<tr>
<td>NID:</td>
<td><input type="text" name="Nname" placeholder="10 digit number" value="<?php if(isset($_SESSION["Nname"])) echo  $_SESSION["Nname"];  ?>" ></td>
</tr>

<tr>
<td>Phone number:</td>
<td><input type="tel" id="phone" name="phone" placeholder="01998888224" value="<?php if(isset($_SESSION["phone"])) echo  $_SESSION["phone"];  ?>"></td>
</tr>

<tr>
<td>Address:</td>
<td><input type="text" name="Address" value="<?php if(isset($_SESSION["Address"])) echo  $_SESSION["Address"];  ?>"></td>
</tr>

<tr>
<td>Security key:</td>
<td><input type="key" name="Skey" value="<?php if(isset($_SESSION["Skey"])) echo  $_SESSION["Skey"];  ?>" ></td>
</tr>

<tr>
  <td>Gender:</td>
 <td><input type="radio" name = "gender" value="r1">Male
 <input type="radio" name = "gender" value="r2">Female
  <input type="radio" name = "gender" value="r3">Other</td>
</tr>

<tr>
<td>Date of birth:</td>
<td><input type="date" name="age" value="<?php if(isset($_SESSION["age"])) echo  $_SESSION["age"];?>"></td>
</tr>


<tr> 
<td>
</td>
</tr>
</table>

<input type="submit" value="Previous" name = "previous">
<input type="submit" value="Continue" name="ad_next1">
<input type="reset" value="Reset">

<p> Already have an account? <a href="sign_in_admin.php">Sign In</a>
<br> <br> <br> <br>

<?php include "../control/ad_process_join2.php"?>
</center>
</body>
</html>



<?php include "./footer.php"?>