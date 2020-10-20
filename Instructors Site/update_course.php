

   <?php
 session_start();
     
if ($dbc = @mysqli_connect('localhost','root', ''))
	{
		// Handle the error if the database couldnot be selected:
		if (@mysqli_select_db($dbc,'helperexam'))
		{
            if(isset($_GET["cr"]) && isset($_GET["crname"]))
            {$valuecourse=$_GET['cr'];
             $oldcrsname= $_GET['crname'];
            }
            if(isset($_POST["coursename"]))
            {
                $majj=$_POST['major'];
                $yearr=$_POST['year'];
                $sems=$_POST['sem'];
                $langu=$_POST['lang'];
                $crsname=$_POST['coursename'];
                
                $query="UPDATE matier1 SET matier_name='$crsname', major_name='$majj' , year='$yearr' , semestre='$sems' , language='$langu' WHERE matier_id= '$valuecourse' ";
                
                
                $r=mysqli_query($dbc,$query);
				 if(mysqli_affected_rows($dbc)==1){
					 
                     
                      $path="C:/xampp/htdocs/module_ulfs5/data/";
                     rename($path.$oldcrsname , $path.$crsname);
                     
                   
                     
                     sleep(2);
                     header("location: firstactivity.php");
                  
                    
                     
				 }
                else{
					 echo("<script>
                    alert(\" Error Update Your Profile :( \");
                    </script>");

				 }
                
                
            }
        }
    
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
        </div>
      </nav>

  <div class="row">
    <div class="col-2">
      <div class="list-group">
        <a class="list-group-item  "> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Menu</a>

        <a  href="firstactivity.php" class="list-group-item list-group-item-action ">
          Home
        </a>
        <a  href="secondactivity.php" class="list-group-item list-group-item-action">Create a new course</a>
        <a  href="theirdactivity.php" class="list-group-item list-group-item-action">Profile</a>
      </div>
    </div>
      <div class="col">


        <h3 align="center"> Update Your Course  </h3>

        
       <?php 

if ($dbc = @mysqli_connect('localhost','root', ''))
	{
		// Handle the error if the database couldnot be selected:
		if (@mysqli_select_db($dbc,'helperexam'))
		{
            if(isset($_GET["cr"]))
            {
                $val=$_GET['cr'];
                $sql="SELECT * FROM matier1 WHERE matier_id='$val' ";
                $r=mysqli_query($dbc,$sql);
			if($r){
                
                while($row=mysqli_fetch_array($r,MYSQLI_ASSOC))
                    {
                      echo"
                         <form action=\"\" style=\"width:800px; margin:auto\" method=\"post\">
          <hr style=\"border-top: 1px solid\">




          <div class=\"form-group\">
            <label for=\"majror\"><h5>Major:</h5></label>
            <select name=\"major\" id=\"major\"  class=\"form-control\">
              <option value=\"Informatic\">Informatic</option>
              <option value=\"Math\">Math</option>
              <option value=\"Physics\">Physics</option>
              <option value=\"Biology\">Biology</option>
              <option value=\"Chemestry\">Chemestry</option>
              <option value=\"BioChemstry\">BioChemstry</option>



            </select>
        <label for=\"year\"><h5>Year :</h5></label>
        <select name=\"year\" id=\"year\" class=\"form-control\">
          <option value=\"First\">First Year</option>
          <option value=\"Second\">Second Year</option>
          <option value=\"Third\">Third Year</option>
          <option value=\"M1\">Master 1 </option>
        </select>

        <label for=\"sem\"><h5>Semestre:</h5></label>
        <select name=\"sem\" id=\"sem\" class=\"form-control\">
          <option value=\"Fisrt\">Semestre 1</option>
          <option value=\"Second\">Semestre 2</option>

        </select>

                <label for=\"lang\"><h5>Language:</h5></label>
                <select name=\"lang\" id=\"lang\" class=\"form-control\">
                  <option value=\"Francais\">Francais</option>
                  <option value=\"English\">English</option>

                </select>
        <label for=\"course\"><h5>Course Name (ex:X0000):</h5></label>
        <input type=\"text\" placeholder=\"Couse Name\" name=\"coursename\" id=\"lastname\" class=\"form-control\"
         value=\"$row[matier_name]\"
        required>




        <hr style=\"border-top: 1px solid\">

        <p>

        <button type=\"submit>\" class=\"btn btn-primary\" style=\"margin-left:300px\"> Update Your Course</button>
      </p>
        </form>


                      ";
                        
                
                    }
                
                   }
                                            
            }
        }
    }
          ?>

        
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
