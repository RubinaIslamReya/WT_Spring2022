
<?php

 
include "..\control/reg.php";



?>
<form action='' method='post'>


<input type='hidden' name='username' value="" >
firstname : <input type='text' name='firstname' value="<?php echo $firstname; ?>" ><br><br>
Password : <input type='text' name='password' value="<?php echo $password; ?>" >
email : <input type='text' name='email' value="<?php echo $email; ?>" ><br><br>
Address: <textarea rows="5" cols="30" name="address"> <?php echo $address; ?> </textarea>
 Gender:
     <input type='radio' name='gender' value='female'<?php echo $radio1; ?>>Female
     <input type='radio' name='gender' value='male' <?php echo $radio2; ?> >Male
     <input type='radio' name='gender' value='other'<?php  $radio3; ?> > Other 


Profession: 
<select name="profession" >
<option > </option>
<optgroup label="Profession">
	  <option value="Academician" <?php echo $Prof1; ?>>Academician</option>
    <option value="student"<?php echo $Prof2; ?>>Student</option>
    <option value="Business" <?php echo $Prof3; ?>>Business</option>
    <option value="Stuff" <?php echo $Prof4; ?>>Stuff</option>   
    </select><br><br>

Interest : 

<input type="checkbox"  name="music" value="music" <?php echo $I1;?>> music
<input type="checkbox" name="sports" value="sports"<?php echo $I2;?>>sports
<input type="checkbox" name="reading" value="reading"<?php echo $I3;?>>reading <br><br>

DOB</td>
 <input type="date" name="dob" value="<?php echo $dob; ?>" >


     <input name='registration' type='submit' value='Registration'>  <br><br>

     <?php echo $error; ?>
<br>
<br>
</body>
</html>