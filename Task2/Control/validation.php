<?php

$validateradio="";
$validatecheckbox="";
$validatepassword=""; 
$v1=$v2=$v3="";
$Name="";
$email="";
$Age=""; 
$Password="";

if($_SERVER["REQUEST_METHOD"]=="POST")
{
$Name=$_REQUEST["name"];
$Password=$_REQUEST["password"];
$email=$_REQUEST["email"];

if(!empty($Name) && strlen($Name)>=6) 
{
    $Name="You Name Is ".$Name;
}

else if(empty($Name))
{
    $Name="Field Must Be fulfilled ";
}
else if( strlen($Name)<5)
{
    $Name="Name Must Have 5 character !!";
}

if(strlen($Password)<8)
{
    $validatepassword=" Password Must Contain 8 character!!";
}
else{
    $validatepassword=$Password;
}

if(isset($_REQUEST["designation"]))
{
    $validateradio= "Designation - ".$_REQUEST["designation"];
}
else{
    $validateradio= "Please Select Your Designation";
}

if(!isset($_REQUEST["JAVA"])&&!isset($_REQUEST["PHP"])&&!isset($_REQUEST["C++"]))
{
    $validatecheckbox = "Please Select at Least One Checkbox";
    
}
else{
    
   if(isset($_REQUEST["JAVA"]))
   {
       $v1= $_REQUEST["JAVA"];
   }
   if(isset($_REQUEST["PHP"]))
   { 
       $v2= $_REQUEST["PHP"];
   }
   if(isset($_REQUEST["C++"]))
   {
    $v3= $_REQUEST["C++"];
   }
   $validatecheckbox="Please Select Your Preffered Language : ";
   $validatecheckbox=$validatecheckbox.$v1.",".$v2.",".$v3; 
   
}
} 
 ?>



