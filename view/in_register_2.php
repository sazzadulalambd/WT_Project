<?php include "in_nav_bar.php" ?>
<html>
<body>
<hr>
<h3>Profational Information</h3>

<form action="" method="post">

<table>
<tr>
<td>Organization name:</td>
<td><input type="text" name="oname"></td>
</tr>

<tr>
<td>Organization license:</td>
  <td><input type="text" name="liname"></td>
</tr>

<tr>
<td>Tax identification number:</td>
  <td><input type="number" name="tin"></td>
</tr>

<tr>
<td>Organization address:</td>
  <td><input type="text" name="oaddress"></td>
</tr>

<tr>
<td>Established date:</td>
<td><input type="date" name="edate"></td>
</tr>

<!-- <tr>
  <td>Gender:</td>
  <td><input type="radio" name = "gender" value="r1">Male
  <input type="radio" name = "gender" value="r2">Female
  <input type="radio" name = "gender" value="r3">Other</td>
</tr> -->
<tr>
<td>Organization email:</td>
<td><input type="email" name="oemail"></td>
</tr>
<tr>
<td>Organization website:</td>
<td><input type="url" name="site"></td>
</tr>
<tr>
<!-- <td>Add photo:</td>
<td><input type="file" name="myfile"></td>
</tr> -->
<tr> 
<td><input type="submit" value="Previous" name = "previous">
<input type="submit" value="Continue" name="next1">
<input type="reset" name="Reset">
</td>
</tr>
</table>
</body>
</html>
<?php include "../control/in_process_join2.php"?>