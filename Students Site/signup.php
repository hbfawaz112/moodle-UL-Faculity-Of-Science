
<?php
if ($dbc = @mysqli_connect('localhost','root', ''))
	{
		// Handle the error if the database couldnot be selected:
		if (@mysqli_select_db($dbc,'helperexam'))
		{
          if(isset($_GET["firstname"]) && $_GET["firstname"]!=" ")
            {
                $fname=$_GET['firstname'];
                $lname=$_GET['lastname'];
                $usname=$_GET['user_name'];
                $pass=$_GET['password1'];
                $maj=$_GET['major'];
                $year=$_GET['year'];
                $lang=$_GET['language'];
                $studentfilenumber=$_GET['stdfilenb'];
              
              $sql= "INSERT INTO user_st (fname,lname,username,password,major,year,language,student_file_number) values ('$fname','$lname','$usname','$pass','$maj','$year','$lang','$studentfilenumber')";
              
                    if(@mysqli_query($dbc,$sql))
                    {
                        $fname="";
                        $lname="";
                        $usname="";
                        $pass="";
                        $studentfilenumber="";
                        
                        
                            
                          header("location: index.php?suc=good");
                    
                    }

                else{
                    
                     }


              }
              
          
            
        }
     else{echo "can't select the database :( ";}
    }

    else{
        echo "can't connect to server :( ";
        }







?>
