  <?php

   // insert data to databse
// create folder w test lal folder mk_dir rm_dir ... 
    
        
    session_start();

    if(!isset($_SESSION["userid"])){echo "problemm!!";}
    $useridofdr=$_SESSION["userid"];

//echo "<h3>$useridofdr  hede btkun bldatabase w bs7ab listet lmawed 3a 2asesa :) </h3>";
     
    if ($dbc = @mysqli_connect('localhost','root', ''))
	{
		// Handle the error if the database couldnot be selected:
		if (@mysqli_select_db($dbc,'helperexam'))
		{
            if(isset($_POST["coursename"]) && $_POST["coursename"]!=" ")
            {
                $maj=$_POST['major'];
                $yea=$_POST['year'];
                $sems=$_POST['sem'];
                $lan=$_POST['lang'];
                $courcode=$_POST['coursename'];

                if(!is_dir("C:/xampp/htdocs/module_ulfs5/data/$courcode"))
                {
                $sql="INSERT INTO matier1 (matier_name,major_name,year,semestre,language,userid) values ('$courcode','$maj','$yea','$sems','$lan','$useridofdr') ";
                    
                    if(@mysqli_query($dbc,$sql)){
                
                     $path="C:/xampp/htdocs/module_ulfs5/data/$courcode";
                    mkdir($path,0770,true);
                    mkdir($path."/Francais",0770,true);
                    mkdir($path."/English",0770,true);
                    mkdir($path."/Francais/course",0770,true);
                    mkdir($path."/Francais/tp",0770,true);
                    mkdir($path."/Francais/td",0770,true);
                    mkdir($path."/Francais/sessions",0770,true);
                    mkdir($path."/English/course",0770,true);
                    mkdir($path."/English/tp",0770,true);
                    mkdir($path."/English/td",0770,true);
                    mkdir($path."/English/sessions",0770,true);
                        sleep(1);
                    
                    header("location: firstactivity.php");
					
                    }
                
                    
                }
                 else{
                     
                     /*if("EXISTS(SELECT matier_name FROM matier1 WHERE language = '$lan')")
                     {
                            echo "<h1>course alredy created!!</h1>";
                     }*/
                     
                     
                     
                    $sql="INSERT INTO matier1 (matier_name,major_name,year,semestre,language,userid) values ('$courcode','$maj','$yea','$sems','$lan','$useridofdr') ";
                     
                     if(@mysqli_query($dbc,$sql)){  header("location: firstactivity.php"); }
                   
                     
                        
                     
                 
                 }
                
                 
                    
                 
            
        }
            //else{echo "not isset";}
                    
                
                
                
        }
        else
        {
        echo "can't select the database :( ";
        }

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

    <a class="navbar-brand" href="firstactivity.php">&nbsp;&nbsp;&nbsp;Moodle UL-FS5&nbsp;&nbsp; <small>For Instructors </small>
    </a>
        </div>    
    </nav>

  <div class="row">
    <div class="col-2">
      <div class="list-group">
        <a class="list-group-item  "> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Menu</a>

        <a  href="firstactivity.php" class="list-group-item list-group-item-action ">
          Home
        </a>
        <a  href="secondactivity.php" class="list-group-item list-group-item-action active">Create a new course</a>
        <a  href="theirdactivity.php" class="list-group-item list-group-item-action">Profile</a>
      </div>
    </div>
      <div class="col">


        <h3 align="center"> Enter Your New Course  </h3>


        <form action="secondactivity.php" style="width:800px; margin:auto" method="post">
          <hr style="border-top: 1px solid">




          <div class="form-group">
            <label for="majror"><h5>Major:</h5></label>
            <select name="major" id="major"  class="form-control">
              <option value="Informatic">Informatic</option>
              <option value="Math">Math</option>
              <option value="Physics">Physics</option>
              <option value="Biology">Biology</option>
              <option value="Chemestry">Chemestry</option>
              <option value="BioChemstry">BioChemstry</option>



            </select>
        <label for="year"><h5>Year :</h5></label>
        <select name="year" id="year" class="form-control">
         
          <option value="First">First Year </option>
          <option value="Second">Second Year</option>
          <option value="Third">Third Year</option>
          <option value="M1">Master 1 </option>
        </select>

        <label for="sem"><h5>Semestre:</h5></label>
        <select name="sem" id="sem" class="form-control">
          <option value="Fisrt">Semestre 1</option>
          <option value="Second">Semestre 2</option>

        </select>

                <label for="lang"><h5>Language:</h5></label>
                <select name="lang" id="lang" class="form-control">
                  <option value="Francais">Francais</option>
                  <option value="English">English</option>

                </select>
        <label for="course"><h5>Course Name (ex:X0000):</h5></label>
        <input type="text" placeholder="Couse Name" name="coursename" id="lastname" class="form-control" required>




        <hr style="border-top: 1px solid">

        <p>

        <button type="submit>" class="btn btn-primary" style="margin-left:300px"> Create Your Course</button>
      </p>
            </div>
        </form>


      </div>
      

    </div>


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
  </body>
    </html>


       
       
     