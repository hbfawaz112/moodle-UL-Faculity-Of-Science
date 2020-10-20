<!--  UPDATE YOUR PROFILE -->



<?php
session_start();


            if(!isset($_SESSION["userid"])){echo "problemm!!";}


            $useridofdr=$_SESSION["userid"];

    if ($dbc = @mysqli_connect('localhost','root', ''))
	{
		// Handle the error if the database couldnot be selected:
		if (@mysqli_select_db($dbc,'helperexam'))
		{
          if(isset($_GET["firstname1"]) && $_GET["firstname1"]!=" ")
            {
                $fname=$_GET['firstname1'];
                $lname=$_GET['lastname1'];
                $usname=$_GET['user_name1'];
                $pass=$_GET['password1'];
                $maj=$_GET['major1'];
             
                 $query="UPDATE user SET first_name='$fname', last_name='$lname' , username='$usname' , password='$pass' , major='$maj' WHERE id = '$useridofdr' ";
              
                $r=mysqli_query($dbc,$query);
				 if(mysqli_affected_rows($dbc)==1){
					 
                     echo("<script>
                        alert(\" Your Profile Has Been Update successfully \");
                        </script>");
                        $_SESSION["userfulname"]=$fname." ".$lname;
                     
				 }else{
					 echo("<script>
                    alert(\" Error Update Your Profile :( \");
                    </script>");

				 }


              }
              
          
            
        }
     else{echo "can't select the database :( ";}
    }

    else{
        echo "can't connect to server :( ";
        }







?>





<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

</head>
<body>



  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="firstactivity.php">
    <img src="http://schedule.ulfs5.net/web/images/logo.jpg" width="60" height="60" class="d-inline-block align-top" alt="">

  </a>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">

 <a class="navbar-brand" href="firstactivity.php">  &nbsp;&nbsp;&nbsp;Moodle UL-FS5&nbsp;&nbsp; <small>For Instructors </small>
 </a>
  <form action="index.php">
    <button type="submit" class="btn btn-primary" style="margin-left:840px">LogOut</button>
      </form>
  
</div>

</nav>

  
  
  
  
  <div class="row">
    <div class="col-2">
      <div class="list-group">
        <a class="list-group-item  "> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Menu</a>

        <a  href="firstactivity.php" class="list-group-item list-group-item-action ">
          Home
        </a>
        <a  href="secondactivity.php" class="list-group-item list-group-item-action ">Create a new course</a>
        <a  href="theirdactivity.php" class="list-group-item list-group-item-action active">Profile</a>
      </div>
    </div>

          <div class="col">

        <div class="container">
 
       
       
         <?php
            
            
            if(!isset($_SESSION["userid"])){echo "problemm!!";}


            $useridofdr=$_SESSION["userid"];


    


if ($dbc = @mysqli_connect('localhost','root', ''))
	{
		// Handle the error if the database couldnot be selected:
		if (@mysqli_select_db($dbc,'helperexam'))
		{
          
            $sql="SELECT * FROM user WHERE id='$useridofdr' ";
            	$r=mysqli_query($dbc,$sql);
			if($r){
                
                while($row=mysqli_fetch_array($r,MYSQLI_ASSOC))
                    {
                            echo"
                            
                            
                              <form action=\"\"  style=\"width:550px; margin:auto\" method=\"get\">
                <h2 style=\"margin-left:155px\">Your Profile <h3 style=\"margin-left:105px\">(Update Your Profile)  </h3> </h2>


               <div class=\"form-group\">
                   <label for=\"firstname\"><b>First Name</b></label>
                   <input type=\"text\" name=\"firstname1\" id=\"lastname\" class=\"form-control\"  
                   value=\"$row[first_name]\"  required>
                 </div>
            <div class=\"form-group\">
                   <label for=\"lastname\"><b>Last Name</b></label>
                   <input type=\"text\" name=\"lastname1\" id=\"lastname\" class=\"form-control\"
                   value=\"$row[last_name]\" required>

                </div>




                <div class=\"form-group\">
                  <label for=\"username\"><b>User Name</b></label>
                  <input type=\"text\" name=\"user_name1\" id=\"username\" class=\"form-control\"
                  value=\"$row[username]\" required>

                </div>
                <div class=\"form-group\">
                  <label for=\"password\"> <b>Password</b></label>
                  <input type=\"text\" name=\"password1\" id=\"password\" class=\"form-control\" 
                  value=\"$row[password]\" required>
                </div>


                <div class=\"form-group\">
                  <label for=\"dep\"><b>Major(Your Degree)</b></label>
                  <select name=\"major1\" id=\"dep\" class=\"form-control\">
                    <option value=\"info\"> Informatic </option>
                    <option value=\"math\"> Math </option>
                    <option value=\"Pyhysics\">Physics</option>
                    <option value=\"Biologie\">Biologie</option>
                    <option value=\"chimie\">chemistry</option>
                    <option value=\"BioChemistry\">BioChemistry</option>

                  </select>
                </div>


              
              <button type=\"submit\" style=\"margin-left:165px \" class=\"btn btn-primary\"> Update Your Profile</button>



              </form>

                            
                            
                            ";
                    }
                
            }
    
            
        }
    else{
        echo "can't select the data base :( ";
    }
    
    }
else{
    echo "can't connect to the server";
}

    
            
            
            ?>
       
         
       
       


        </div>

          </div>

    </div>

  
  
  
  
  
  
  


<br>
<hr><footer class="footer">
                <div class="container">
                    <p class="pull-left">&copy;Copyright 2020 | Lebanese University - Faculty of Sciences (section 5)
                         <small style="margin-left:370px">By : Hussein B. Fawaz - Abbas Sherkawi</small>
                  </p>
                </div>
            </footer>


<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
  </html>
