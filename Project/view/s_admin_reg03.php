<?php include "./nav_ber_ad.php"?>

<html>
<body>
<center>
<img src="../img/title_logo.png" width="88" height="80">
<h3>Admin Join BEPARTNER   3/3</h3>

<form action="" method="post">

<table>
<tr>
<td>Password:</td>
<td><input type="password" name="pwd"></td>
</tr>

<tr>
<td>Confirm password:</td>
  <td><input type="password" name="pwd2"></td>
</tr>



</table>
<input type="checkbox" name="checkbox">I agree to BEPARTNER's Terms of service
<br>
<input type="submit" value="Previous" name = "previous">
<input type="submit" value="Join" name="join">
<input type="reset"  value="Reset">

<p> Already have an account? <a href="sign_in_admin.php">Sign In</a>
<br> <br> <br> <br>
<?php include "../control/ad_process_join3.php"?>
</center>
</body>
</html>


<?php include "./footer.php"?>