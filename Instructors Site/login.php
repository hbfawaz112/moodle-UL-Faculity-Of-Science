<?php

session_start();

?>

<?php
if ($dbc = @mysqli_connect('localhost','root', ''))
	{
		// Handle the error if the database couldnot be selected:
		if (@mysqli_select_db($dbc,'helperexam'))
		{
            
            if(isset($_POST["usernamee"]) && $_POST["usernamee"]!=" ")
            {
                $username=$_POST['usernamee'];
                
                $password=$_POST['passwordd'];
                
                $query="SELECT id,username,first_name,last_name FROM user where username = '$username' and password='$password' ";
                
                $result = mysqli_query($dbc,$query);
                
                $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
                
                $usid = $row['id'];
                
                $fullname= $row['first_name']." ".$row['last_name'];
                
                $count = mysqli_num_rows($result);
                
                 if($count == 1) {
                
                     $_SESSION["userid"]=$usid;
                     
                     $_SESSION["userfulname"]=$fullname;
                     
                     echo $fullname;
                     
                     header("location: firstactivity.php");
                  }
                else {
                    header("location: index.php?er1=er");
                    
                        
                 }
      
                
                
                
            }
            
        }
    
    else{echo"can't connect to database ";}
    
}
else{echo " can't conncet to server";}


?>