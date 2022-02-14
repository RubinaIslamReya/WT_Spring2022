<?php   include "Control/validation.php" ; ?>

<!DOCTYPE html>
<html>
<head>

<title>Registration Form </title>

</head>
<body>
<table>
<h1>Registration Form</h1>
<form action="process.php" method="post" enctype= "multipart/form-data">
<tr>

<td> First Name : </td>
<td><input type="text" name="name"> <?php echo $Name; ?>  </td>
</tr>

<td> Last Name : </td>
<td><input type="text" name="name"> <?php echo $Name; ?>  </td>
</tr>

<td> Age : </td>
<td><input type="text" age="age"> <?php echo $Age; ?>  </td>
</tr>

<tr>
<td> Designation : </td>
<td>
<input type="radio" name="designation" value="Junior Programmer"> Junior Programmer 
<input type="radio" name="designation" value="Senior Programmer"> Senior Programmer 
<input type="radio"  name="designation" value="Project Land"> Project Land <br> <?php echo $validateradio; ?><br>
</td>
</tr>

<tr>
<td> Preffered Language :</td>
<td>
<input type="checkbox"  name="JAVA" value="JAVA"> JAVA
<input type="checkbox" name="PHP" value="PHP"> PHP
<input type="checkbox" name="C++" value="C++"> C++ <br> <?php echo $validatecheckbox; ?>
</td>
</tr>

<tr>
<td> Email :  </td>
<td><input type="text" name="email"> <?php echo $validateemail; ?> </td>
</tr>

<tr>
<td>Password :  </td>
<td><input type="password" name="password"><?php echo $validatepassword; ?></td>
</tr>

<tr>
<td> <label for="file ">Please Choose a File : </label> </td>
<td><input type="file" id="file"name= "fileupload"><?php echo $validfile?></td>>
</tr>



<tr>
<td> <input type="submit" name="Submit"> 
<input type="reset" name="Reset">
</td>
</tr>

</form>
</table>
</body>
</html>