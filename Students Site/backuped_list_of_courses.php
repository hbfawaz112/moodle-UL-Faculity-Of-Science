<?php

session_start();

    if(!isset($_SESSION["userid"])){echo "problemm!!";}
    $useridofdr=$_SESSION["userid"];
   
    //echo $useridofdr;
?>

<?php
if(!isset($_GET["maj"]) && !isset($_GET["lang"]) && !isset($_GET["year"]))
                        {
                            //echo "error isset ";

                        }


                         $languagee=$_GET['lang'];
                         $majorr=$_GET['maj'];
                         $acdemicyear=$_GET['year'];

$_SESSION["lan"]=$languagee;
$_SESSION["majjj"]=$majorr;
$_SESSION["acayear"]=$acdemicyear;



$val1=$_SESSION['lan'];
$val2=$_SESSION['majjj'];
$val3=$_SESSION['acayear'];


//echo $val1.$val2.$val3;



                           
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <title>Your Courses</title>
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

<?php
    /*
    $_SESSION["lan"]=$languagee;
$_SESSION["majjj"]=$majorr;
$_SESSION["acayear"]=$acdemicyear;
    */
    ?>


<div class="row">
<div class="col-2">
  <div class="list-group">
    <a class="list-group-item  "> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Menu</a>
<?php
echo "  <a  href=\"list_of_courses.php?maj=$val2&lang=$val1&year=$val3\" class=\"list-group-item list-group-item-action active\">
      Home
      </a>";
      ?>
    
    <a  href="profile.php" class="list-group-item list-group-item-action ">Profile</a>
    <a  href="index.php" class="list-group-item list-group-item-action">LogOut</a>
  </div>
</div>
  <div class="col">
<div class="container">
    
    <h3>Student Info:</h3>
    
    <?php
            
            
if ($dbc = @mysqli_connect('localhost','root', ''))
	{
		// Handle the error if the database couldnot be selected:
		if (@mysqli_select_db($dbc,'helperexam'))
		{
            
            $sql="SELECT * FROM user_st WHERE id ='$useridofdr' ";
            $r=mysqli_query($dbc,$sql);
			if($r)
            {
                 while($row=mysqli_fetch_array($r,MYSQLI_ASSOC))
                    {
                     
                        
                     
                     echo " <b>Full Name</b> : $row[fname]  $row[lname]     &nbsp;<b> Major</b> : $row[major]   &nbsp;<b>Academic Year </b>: $row[year] Year &nbsp;
       <b>Language </b> : $row[language] &nbsp; <b>Student File Number </b> : $row[student_file_number] </b>";
                     
                     }
            }
            
        }
    
}
    
    ?>

          
          <hr style="border-top: 1px solid">

       <h3> List Of Your Courses : </h3>
       
       <?php
        
        if ($dbc = @mysqli_connect('localhost','root', ''))
	       {
		// Handle the error if the database couldnot be selected:
		      if (@mysqli_select_db($dbc,'helperexam'))
		          {
                  
                   
                  
                $query="SELECT * FROM matier1 WHERE major_name='$majorr' AND year='$acdemicyear' AND language='$languagee' ";
                  
                  $r=mysqli_query($dbc,$query);
                    if($r){
                        
                        
                        echo "
                                <table class=\"table\";>
                <thead class=\"thead-dark\">
                  <tr>
                    <th>Course Code</th>
                    <th>Semstre</th>

                      <th><b style=\"margin-left:200px\">Option</b></th>
                    </tr>
                    </thead>
                    <tbody>
                            ";
                 while($row1=mysqli_fetch_array($r,MYSQLI_ASSOC))
                    {
                     echo "
                     
                      <tr>
                    <td>$row1[matier_name]</td>
                    <td>$row1[semestre] </td>
                    <td>
                  <button type=\"button\" class=\"btn btn-primary\"
                  onclick=\"window.location.href='list_of_files.php?cr=$row1[matier_id]&option=course&crcode=$row1[matier_name]'\"
                  >Course
                  </button>
                  
                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                 <button type=\"button\" class=\"btn btn-success\"
                  onclick=\"window.location.href='list_of_files.php?cr=$row1[matier_id]&option=tp&crcode=$row1[matier_name]'\"
                  >&nbsp;&nbsp;&nbsp;&nbsp; TP&nbsp;&nbsp;&nbsp;&nbsp;
                  </button>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                  <button type=\"button\" class=\"btn btn-warning\"
                  onclick=\"window.location.href='list_of_files.php?cr=$row1[matier_id]&option=td&crcode=$row1[matier_name]'\"
                  >&nbsp;&nbsp;&nbsp;&nbsp;TD&nbsp;&nbsp;&nbsp;&nbsp;
                  </button>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <button type=\"button\" class=\"btn btn-danger\"
                  onclick=\"window.location.href='list_of_files.php?cr=$row1[matier_id]&option=sessions&crcode=$row1[matier_id]'\"
                  
                  >Sessions
                  </button>
                  

                </td>

            
                    </tr>
                     ";
                     
                    }
                echo "</tbody></table>";
                        
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
