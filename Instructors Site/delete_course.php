<?php

      


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
    <button type="submit" class="btn btn-primary" style="margin-left:940px">LogOut</button>
      </form>
        </div>
      </nav>


  <div class="row">
    <div class="col-2">
      <div class="list-group">
        <a class="list-group-item  "> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Menu</a>

        <a  href="firstactivity.php" class="list-group-item list-group-item-action">
          Home
        </a>
        <a  href="secondactivity.php" class="list-group-item list-group-item-action ">Create a new course</a>
        <a  href="theirdactivity.php" class="list-group-item list-group-item-action">Profile</a>
      </div>
    </div>
      <div class="col">
        <div class="container">
 
            
            <?php
            
            if ($dbc = @mysqli_connect('localhost','root', ''))
	       {
		// Handle the error if the database couldnot be selected:
		      if (@mysqli_select_db($dbc,'helperexam'))
		      {
                if(isset($_GET["cr"]) && isset($_GET["crname"]))
                {          
                 $courid=$_GET['cr'];
                 $courname=$_GET['crname'];
                 $path="C:/xampp/htdocs/module_ulfs5/data/$courname";
                      
                 if(!is_dir($path))
                     {
                         echo "file not exitst to delete :( ";
                     }
                
                 else{
                     
                     $sql="DELETE FROM matier1 where  matier_id='$courid'";
                 
                 
                 if($r=mysqli_query($dbc,$sql))
                 {
					 $path="C:/xampp/htdocs/module_ulfs5/data/$courname";
                       
                     
                     
                     // nefore we delete a directory , we need to delete all files inside each direactiry.
                     /*
                     // this is a function that delete a directory with a non empty data (contains pdf').
                     function Delete($path)
                        {
                            if (is_dir($path) === true)
                            {
                                $files = array_diff(scandir($path), array('.', '..'));

                                foreach ($files as $file)
                                {
                                    Delete(realpath($path) . '/' . $file);
                                }

                                return rmdir($path);
                            }

                            else if (is_file($path) === true)
                            {
                                return unlink($path);
                            }

                            return false;
                        }	
                    */
                     
                     // Then remove each folder  into the main folder ( course name ).
                     
                     
                     
                    rmdir($path."/en/cours");
                    rmdir($path."/en/TP");
                    rmdir($path."/en/TD");
                    rmdir($path."/en/sessions");
                    
                     
                    rmdir($path."/fr/cours");
                    rmdir($path."/fr/TP");
                    rmdir($path."/fr/TD");
                    rmdir($path."/fr/sessions");
                     
                    rmdir($path."/fr");
                    rmdir($path."/en");
                    
                    rmdir($path);
                    
                      echo("delete seccussefly!");
                 }
                     else
                 {
                     echo("error query");
                 }
                 
                    
                    }
                    
                     
                    
                
                    
				 }
				 
				 
              }
        }
    
  
            ?>
            
             <button type="submit" class="btn btn-primary" style="margin-left:940px"
              onclick="window.location.href='firstactivity.php'"
             >GO BACK</button>
    
               
     

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
  </body>
    </html>
