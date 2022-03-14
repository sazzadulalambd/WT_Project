<?php include "./nav_ber_em.php"?>

<html>
    <head><title>BePartner</title></head>
<body>
<center>
<img src="../img/title_logo.png" width="88" height="80">
<h3>Employee Sign IN BEPARTNER</h3>

<form action="" method="post" enctype="multipart/form-data">

<table>
<tr>
<td>Email:</td>
</tr>
<tr>
<td><input type="email" name="email" placeholder="example@bepartner.com"></td>
</tr>
<tr>
<td>Password:</td>
</tr>
<tr>
<td><input type="password" name="pwd" placeholder="******"></td>
</tr>
<tr>
<td><input type="checkbox" name="checkbox">Remember me.
</tr>
<tr>
<td><input type="submit" value="Sign In" name="submit"><td>
</tr>
</table>
<p> Not a member yet? <a href="J_Employee_reg01.php">Join now</a>

<br><br><br>
<?php include "../control/em_process_login.php"?>
</center>
</body>
</html>




<?php include "./footer.php"?>