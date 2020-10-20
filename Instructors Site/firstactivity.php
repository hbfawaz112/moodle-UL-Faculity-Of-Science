
<?php


session_start();

    if(!isset($_SESSION["userid"])){echo "problemm!!";}
    $useridofdr=$_SESSION["userid"];
    
    if(isset($_GETP["del"]))
    {
         echo("<script>
        alert(\" Delete Success \");
              </script>"
             );
    }


  if(isset($_GET["uploadsuc"]) && $_GET["uploadsuc"]=='true')
  {
      echo("<script>
        alert(\"Your Fil Was Uplaoded Suuceffully :) \");
        </script>");
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

    <a class="navbar-brand" href="firstactivity.php"> &nbsp;Moodle UL-FS5&nbsp;&nbsp; <small>For Instructors </small>
    </a>
      <form action="index.php">
    <button type="submit" class="btn btn-primary" style="margin-left:850px">LogOut</button>
      </form>
        </div>
    </nav>


  <div class="row">
    <div class="col-2">
      <div class="list-group">
        <a class="list-group-item  "> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Menu</a>

        <a  href="firstactivity.php" class="list-group-item list-group-item-action active">
          Home
        </a>
        <a  href="secondactivity.php" class="list-group-item list-group-item-action ">Create a new course</a>
        <a  href="theirdactivity.php" class="list-group-item list-group-item-action">Profile</a>
      </div>
    </div>
      <div class="col">
    <div class="container">
 
  
  
  <h2>List Of Your Couses</h2>
  <?php
    if(!isset($_SESSION["userfulname"])){echo "problemm!!";}
    $nameofdr=$_SESSION["userfulname"];
    echo "<h3>$nameofdr</h3>";
    
    ?>
    
    <?php
    
if ($dbc = @mysqli_connect('localhost','root', ''))
	{
		// Handle the error if the database couldnot be selected:
		if (@mysqli_select_db($dbc,'helperexam'))
		{
            $sql="SELECT * FROM matier1 WHERE userid='$useridofdr' ";
            $r=mysqli_query($dbc,$sql);
			if($r)
            {
                $count=mysqli_num_rows($r);
                if($count==0){echo "<br><br><br><br><h1>NO COURSES YET GO AND START CREATE YOUR COURSES</h1> ";}
                
                else{
                echo "
                    <table class=\"table\">
    <thead class=\"thead-dark\">
      <tr>
        <th>Course Name</th>
        <th>Major</th>
        <th>Academic Year</th>
        <th>Semstre</th>
        <th>Language</th>
        
          <th><b style=\"margin-left:140px\">Option</b></th>
        </tr>
        </thead>
        <tbody>
                ";
                 while($row=mysqli_fetch_array($r,MYSQLI_ASSOC))
                    {
                     echo "
                     
                  <tr>
                <td>$row[matier_name]</td>
                <td>$row[major_name]</td>
                <td>$row[year] year </td>
                <td>$row[semestre] semestre</td>
                <td>$row[language]</td>
                <td>
                  <button type=\"button\" class=\"btn btn-primary\"
                  onclick=\"window.location.href='update_file.php?cr=$row[matier_id]'\">Upload File
                  </button>
                  
                  <button type=\"button\" class=\"btn btn-success\"
                  onclick=\"window.location.href='update_course.php?cr=$row[matier_id]&crname=$row[matier_name]'\">Update Course
                  </button>

                  <button type=\"button\" class=\"btn btn-danger\"
                  onclick=\"window.location.href='delete_course.php?cr=$row[matier_id]&crname=$row[matier_name]'\">Delete Course
                  </button>

                </td>

            
                    </tr>
                     ";
                     
                    }
                echo "</tbody></table>";
                
            }
            }
            
        }
    
    }
 ?>
   
     

      </div>

    </div>

    <br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <hr>
    <footer class="footer">
                <div class="container">
                    <p class="pull-left">&copy;Copyright 2020 | Lebanese University - Faculty of Sciences (section 5)
                         <small style="margin-left:370px">By: Hussein B. Fawaz - Abbas Sherkawi</small>
                  </p>
                </div>
            </footer>






  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
      </div>
   </body>
    
    </html>
