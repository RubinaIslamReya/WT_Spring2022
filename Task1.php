<!DOCTYPE html>
<html>
<head>

<title>Registration Form </title>

</head>
<body>
<table>
<h1>Registration Form</h1>
<form>
<tr>
<td> <label for="First_Name ">First Name : </label> </td><td>
    <input type="text" id="First_Name"></td>
</tr>

<tr>
    <td> <label for="Last_Name ">Last Name : </label> </td><td>
        <input type="text" id="Last_Name"></td>
</tr>

<tr>
    <td> <label for="Age ">Age : </label> </td><td>
        <input type="text" id="Age"></td>
</tr>

<tr>
    <td> <label for="Designation">Designation : </label> </td>
    <td>
    <input type="radio" id="Junior Programmer" name="Designation" value="Junior Programmer">
    <label for="Designation">Junior Programmer</label>
      <input type="radio" id="Senior Programmer" name="Designation" value="Senior Programmer">
      <label for="Senior Programmer">Senior Programmer</label>
      <input type="radio" id="Project Lead" name="Designation" value="Project Land">
      <label for="Project Land">Project Land</label>
    </td>
</tr>

    <tr>
        <td> <label for="Checkbox ">Preferred language : </label> </td>
        <td>
        <input type="checkbox"  name="value1" value="JAVA">
        <label for="value1">JAVA</label>
        <input type="checkbox" name="value2" value="PHP">
        <label for="value2">PHP</label>
        <input type="checkbox"  name="value3" value="C++">
        <label for="value3"> C++</label>
        </td>
</tr>  
        
<tr>
    <td> <label for="E-mail ">E-mail : </label> </td>
            <td><input type="text" id="E-mail"></td>
</tr>  

<tr>
    <td> <label for="Password ">Password : </label> </td>
    <td><input type="password" id="Password"></td>
</tr>

<tr>
    <td> <label for="file ">Please Choose a File : </label> </td>
    <td><input type="file" id="file"></td>
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

   
