<html>
    <body>
        <?php00
          include "../model/regcheck.php";
        $fname = $lname = $age= $designation=$email=$email=$file="";
        $language1=$language2=$language3="not selected";
        if(isset($_POST["submit"]))
        {
            $fname = $_POST["firstname"];
          
            $age =   $_POST["age"];
            $password = $_POST["password"];
            $email = $_POST["email"];

           if(!isset($_POST["designation"])||empty($_POST["firstname"])||empty($_POST["lastname"]) || empty($_POST["age"] )|| empty($_POST["email"]) || empty($_POST["password"]))
           {
               echo "All field must be filled ";
           }
           else 
            {
                if (strlen($_POST["firstname"]) < 3 )
                {
                    echo "please give a valid name ";
                }
                
                if (strlen($lname) < 3 )
                {
                    echo "please give a valid last name ";
                }

                if ($age < 18 )
                {
                    echo "please give a age ";
                }

                if( empty($email ))
                {
                    echo "please give a valid email ";
                }

                if (isset($_POST["designation"]))
                {
                    $designation = $_POST["designation"];
                }

                if (!isset($_POST["language1"]) && !isset($_POST["language2"]) && !isset($_POST["language3"]))
                 {
                     echo "You have to select atleast one ";
                     $str = $language1.",".$language2.",".$language3;

                 }
                 else 
                 {
                    if (isset($_POST["language1"]))
                    {
                        $language1 = $_POST["language1"];
                    }
                    if (isset($_POST["language2"]))
                    {
                        $language2 = $_POST["language2"];
                    }
                    if (isset($_POST["language3"]))
                    {
                        $language3 = $_POST["language3"];
                    }
                     $str = $language1.",".$language2.",".$language3;
                     
                 }
                 if ($_FILES["file"]["type"] == "text/plain" )
                 {
                     if (move_uploaded_file($_FILES["file"]["tmp_name"],"../files/".$fname.date("y-m-d").".text"))
                     {
                         $file = $_FILES["file"]["name"];

                     }
                    
                    
                 }
                

                


                 $mydb = new DB();
                 $conbj = $mydb->connection();
                 $insert = $mydb->inserdata($fname,$lname,$age,$designation,$str,$email,$password,$file,"person",$conbj);
                 $mydb->closecon($conbj);


            


            }
        }
        ?>
    </body>
</html>