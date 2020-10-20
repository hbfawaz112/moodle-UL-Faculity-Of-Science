

<?php

session_start();

    if(!isset($_SESSION["userid"])){echo "problemm!!";}
    $useridofdr=$_SESSION["userid"];
   
//    echo $useridofdr;

$val1=$_SESSION['lan'];
$val2=$_SESSION['majjj'];
$val3=$_SESSION['acayear'];


//echo $val1.$val2.$val3;





if ($dbc = @mysqli_connect('localhost','root', ''))
	{
		// Handle the error if the database couldnot be selected:
		if (@mysqli_select_db($dbc,'helperexam'))
		{
          if(isset($_GET["fnamee"]) && $_GET["fnamee"]!=" ")
            {
                $fname=$_GET['fnamee'];
                $lname=$_GET['lnamee'];
                $usname=$_GET['usename'];
                $pass=$_GET['password'];
              
                $majeur=$_GET['majorr'];
                $languagee=$_GET['langg'];
                $yeare=$_GET['yearr'];
             
                 $query="UPDATE user_st SET fname='$fname', lname='$lname' , username='$usname' , password='$pass' WHERE id = '$useridofdr' ";
              
                $r=mysqli_query($dbc,$query);
				 if(mysqli_affected_rows($dbc)==1){
					 
                     echo("<script>
                        alert(\" Your Profile Has Been Update successfully \");
                        </script>");
                        //$_SESSION["userfulname"]=$fname." ".$lname;
                     sleep(2);
                     
                     $SESSION["ulrfirst"]="list_of_courses.php?maj=$majeur&lang=$languagee&year=$yeare";
                     
                        header("location: list_of_courses.php?maj=$majeur&lang=$languagee&year=$yeare");
                  
                     
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
  <a class="navbar-brand" href="index.php">
    <img src="http://schedule.ulfs5.net/web/images/logo.jpg" width="60" height="60" class="d-inline-block align-top" alt="">

  </a>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">

 <a class="navbar-brand" href="index.php">  &nbsp;&nbsp;&nbsp;Moodle UL-FS5 &nbsp; <small> For Students</small>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 </a>

</div>

</nav>



<div class="row">
<div class="col-2">
  <div class="list-group">
    <a class="list-group-item  "> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Menu</b></a>

    <?php
echo "  <a  href=\"list_of_courses.php?maj=$val2&lang=$val1&year=$val3\" class=\"list-group-item list-group-item-action \">
      <b>Home</b>
      </a>";
      ?>
      <a  href="http://schedule.ulfs5.net" class="list-group-item list-group-item-action "><b>UL-FS5 Scheduling</b></a>
      <a  href="http://schedule.ulfs5.net" class="list-group-item list-group-item-action "><b>Circulars and News</b></a>

    <a  href="secondactivity.php" class="list-group-item list-group-item-action active "><b>Profile</b></a>
    <a  href="index.php" class="list-group-item list-group-item-action"><b>LogOut</b></a>
  </div>
</div>
  <div class="col">
<div class="container">
  <h2 style="margin-left:350px">Update Your Profile </h2>
  
  <?php
  if ($dbc = @mysqli_connect('localhost','root', ''))
	{
		// Handle the error if the database couldnot be selected:
		if (@mysqli_select_db($dbc,'helperexam'))
		{
            
            $query="SELECT * FROM user_st WHERE id='$useridofdr'";
            
            	 $r=mysqli_query($dbc,$query);
                if($r){
                            while($row=mysqli_fetch_array($r,MYSQLI_ASSOC))
                            {
                                
                                echo "
                                
                                 <form action=\"\"  style=\"width:550px; margin:auto\" method=\"get\">
  <label for=\"firstname\">First Name</label>
  <input type=\"text\" name=\"fnamee\" id=\"lastname\" class=\"form-control\" required  value=\"$row[fname]\">

  <label for=\"lastname\">Last Name</label>
  <input type=\"text\" name=\"lnamee\" id=\"lastname\" class=\"form-control\" required  value=\"$row[lname]\">

  <label for=\"username\">UserName</label>
  <input type=\"text\" name=\"usename\" id=\"username\" class=\"form-control\" required  value=\"$row[username]\" >


  <label for=\"pass\">Password</label>
  <input type=\"text\" name=\"password\" id=\"password\" class=\"form-control\" required value=\"$row[password]\">



  <label for=\"major\">Major</label>
  <input type=\"text\" name=\"majorr\" id=\"major\" class=\"form-control\" readonly value=\"$row[major]\">

  <label for=\"year\">Academic Year</label>
  <input type=\"text\" name=\"yearr\" id=\"year\" class=\"form-control\" readonly value=\"$row[year]\">

  <label for=\"lang\">Language</label>
  <input type=\"text\" name=\"langg\" id=\"lang\" class=\"form-control\" readonly value=\"$row[language]\">

  <label for=\"stdfilenb\">Student File Number(رقم الملف)</label>
  <input type=\"text\" name=\"stdfilenb\" id=\"stdfilenumber\" class=\"form-control\" disabled value=\"$row[student_file_number]\">
<br>
  <button type=\"submit\" style=\"margin-left:165px\" class=\"btn btn-primary\"> Update Your Profile</button>
</form>

                                
                                
                                ";
                                
                            }        
                                    
                       }
		}
    }
    
    ?>
  
  






</div>
</div>
</div>



<hr><footer class="footer">
                <div class="container">
                    <p class="pull-left">&copy;Copyright 2020 | Lebanese University - Faculty of Sciences (section 5)
                         <small style="margin-left:370px">By : Hussein B. Fawaz </small>
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
