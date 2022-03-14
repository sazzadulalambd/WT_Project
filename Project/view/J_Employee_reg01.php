<?php include "./nav_ber_ad.php"?>
<?php session_start();?>
<html>
<body>
<center>
<img src="../img/title_logo.png" width="88" height="80">
<h3>Employee Join BEPARTNER    1/3</h3>

<form action="" method="post" enctype="multipart/form-data">

<table>
    <tr>
    <td>Frist Name:</td>
               <td><input type="text" name="fname"placeholder="User Frist name" ></td>
 </tr>
       <tr>
        <td>Last Name:</td>
          <td><input type ="text" name="lname" placeholder="User Last name" ></td>
    </tr>
    <tr>
       <td> E-mail:</td>
        <td><input type="text" name="email"placeholder="example@bepartner.com"></td>
</tr>
<tr>
 
  <td><input type="submit" name="continue" value="Continue">
  <td><input type="submit" name="reset" value="Reset">
</td>
</tr>
</form>
 </table>
 <p> Already have an account? <a href="sign_in_employee.php">Log In</a></p>
 <br> <br> <br> 
<?php include "../control/em_process_join1.php"?>
<center>
      </body>

    </html>

    <?php include "./footer.php"?>
