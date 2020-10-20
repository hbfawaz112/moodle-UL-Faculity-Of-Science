
<html>
<head>

    <link rel="stylesheet" type="text/css" href="cssLodingAnimation.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">


</head>
<body>

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
                
                $query="SELECT * FROM user_st where username = '$username' and password='$password' ";
                
                $result = mysqli_query($dbc,$query);
                
                $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
                
                $usid = $row['id'];
                $maj=$row['major'];
                $lang=$row['language'];
                $yearr=$row['year'];
                
            
                
                $count = mysqli_num_rows($result);
                
                 if($count == 1) {
                
                     $_SESSION["userid"]=$usid;
                     
                     
                     
                     
                     
					
					 
					 echo "
					   <div class=\"top a1\"></div>
						<div class=\"top a2\"></div>
						<div class=\"top a3\"></div>
						<div class=\"top a4\"></div>
						 
					 ";
					 
					 
                    header("location: list_of_courses.php?maj=$maj&lang=$lang&year=$yearr");
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


</body>
</html>