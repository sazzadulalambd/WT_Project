<?php include "./nav_ber_ad.php"?>
<?php session_start();?>
<html>
<body>
<center>
<img src="../img/title_logo.png" width="88" height="80">
<h3>Employee Join BEPARTNER    2/3</h3>

<form action="" method="post">


<table>
    
  <tr>
    <td>Designation:</td>
    <td><select id="designation" name="designation">
  <option value="COO">Chief Operating Officer(COO)</option>
  <option value="CTO">Chief Technology Officer(CTO)</option>
  <option value="CFO">Chief Financial Officer(CFO)</option>
  <option value="CMO">Chief Marketing Officer(CMO)</option>
  <option value="CMO">Chief Legal Officer(CLO)</option>
  <option value="OTH">Other</option>
</select></td>
    </tr>
    <tr>
<td>Security key:</td>
<td><input type="ekey" name="ekey"  ></td>
</tr>
<tr>
       <td> DOB:</td>
       <td><input type="date" name="age" ></td>
</tr>
<tr>
  <td>Gender:</td>
 <td><input type="radio" name = "gender" value="r1">Male
 <input type="radio" name = "gender" value="r2">Female
  <input type="radio" name = "gender" value="r3">Other</td>
</tr>
<tr>
       <td> NID:</td>
       <td><input type="text" name="Nname" placeholder="10 digit number"  ></td>
        <tr>
<tr>
    
    
<td><input type="submit" name="previous" value="Previous">
  <td><input type="submit" name="continue" value="Continue">
  <input type="submit" name="reset" value="Reset">

</tr>

 </table>
 <p> Already have an account? <a href="sign_in_employee.php">Log In</a></p>
 <br> <br> <br> 
<?php include "../control/em_process_join2.php"?>
<center>
      </body>

    </html>

    <?php include "./footer.php"?>