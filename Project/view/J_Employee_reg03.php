<?php include "./nav_ber_ad.php"?>

<html>
<body>
<center>
<img src="../img/title_logo.png" width="88" height="80">
<h3>Employee Join BEPARTNER   3/3</h3>

<form action="" method="post">

<table>
    
  <tr>
       <td>Password:</td>
       <td><input type ="Password" name="pwd"></td>
  </tr> 
       <tr>
        <td>Comfrim password:</td>
        <td><input type ="Password" name="pwd2"></td>
    </tr>
    
  <tr>
  <td><input type="submit" name="previous" value="Previous">
  <input type="submit" name="join" value="Join">
</td>
    <td>
  <input type="submit" name="reset" value="Reset">
</td>
</tr>

 </table>
 
<p> Already have an account? <a href="sign_in_employee.php">Sign In</a>
<br> <br> <br> <br>
<?php include "../control/em_process_join3.php"?>
</center>
</body>
</html>


<?php include "./footer.php"?>