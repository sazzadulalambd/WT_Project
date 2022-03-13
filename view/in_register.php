<?php include "in_nav_bar.php" ?>
<html>
<body>
<hr>
<h3>Personal Information</h3>

<form action="" method="post" enctype="multipart/form-data">

<table>
<tr>
<td>First Name:</td>
<td><input type="text" name="fname"></td>
</tr>

<tr>
<td>Last name:</td>
  <td><input type="text" name="lname"></td>
</tr>

<tr>
<td>Date of birth:</td>
<td><input type="date" name="age"></td>
</tr>

<tr>
  <td>Gender:</td>
  <td><input type="radio" name = "gender" value="r1">Male
  <input type="radio" name = "gender" value="r2">Female
  <input type="radio" name = "gender" value="r3">Other</td>
</tr>

<tr>
<td>Phone number:</td>
<td><input type="tel" id="phone" name="phone" placeholder="01993830224" pattern="[0]{1}[1]{1}[0-9]{9}" required></td>
</tr>

<tr>
<td>Personal email:</td>
<td><input type="email" name="email"></td>
</tr>
<tr>
<td>Personal address:</td>
<td><input type="text" name="pAddress"></td>
</tr>
<tr>
<td>Add photo:</td>
<td><input type="file" name="myfile"></td>
</tr>
<tr> 
<td><input type="submit" value="Continue" name="next1">
<input type="reset" name="Reset"></td>
</tr>
</table>
</body>
</html>

<?php include "../control/in_process_join1.php"?>