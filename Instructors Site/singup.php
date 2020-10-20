
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
              
              $sql= "INSERT INTO user (first_name,last_name,username,password,major) values ('$fname','$lname','$usname','$pass','$maj')";
              
                    if(@mysqli_query($dbc,$sql))
                    {
                        $fname="";
                        $lname="";
                        $usname="";
                        $pass="";
                        
                        
                            
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
