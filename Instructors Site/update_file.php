<?php


                









   if ($dbc = @mysqli_connect('localhost','root', ''))
	{
		// Handle the error if the database couldnot be selected:
		if (@mysqli_select_db($dbc,'helperexam'))
		{
            if(isset($_POST["filename"]))
            {
                $maj=$_POST['major'];
                $yearr=$_POST['year'];
                $semestree=$_POST['semestre'];
                $lang=$_POST['language'];
                $cour=$_POST['course'];
                $typefilee=$_POST['typefile'];
                $fielnamee=$_POST['filename'];
               // $uploadfilee=$_POST['uploadfile'];
                
                
                $file = $_FILES["uploadfile"];
                
                    $dateofupload = date("Y-m-d");
                
                $query="INSERT INTO pdf_matier_name1 (pdf_name,matier_name,matier_option,matier_lang,date_of_upload) values ('$fielnamee','$cour','$typefilee','$lang','$dateofupload')";
                
                 if(@mysqli_query($dbc,$query))
                    {
                    
                        
                            
                          //here we upload fle 
                     
        move_uploaded_file($file["tmp_name"], "C:/xampp/htdocs/module_ulfs5/data/$cour/$lang/$typefilee/" . $file["name"]);
                        header("location: firstactivity.php?uploadsuc=true");
                  
                     
                    
                    }
                else{echo "error inserted!!";}
                    
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
        <a  href="secondactivity.php" class="list-group-item list-group-item-action ">Create a new course</a>
        <a  href="theirdactivity.php" class="list-group-item list-group-item-action">Profile</a>
        </a>
        
      </div>
    </div>
      <div class="col">


          
          
          
            <?php
   if(isset($_GET["cr"]))
      {
         // echo "<h1>".$_GET['cr']."</h1>";
       $crid=$_GET['cr'];
      
       
        
        if ($dbc = @mysqli_connect('localhost','root', ''))
	       {
		// Handle the error if the database couldnot be selected:
		      if (@mysqli_select_db($dbc,'helperexam'))
		      {
                  $sql="SELECT * FROM matier1 WHERE matier_id='$crid' ";
                   
                  $r=mysqli_query($dbc,$sql);
			if($r){
                
                while($row=mysqli_fetch_array($r,MYSQLI_ASSOC))
                    {
                    
                    
                      echo "<form action=\"update_file.php\" enctype=\"multipart/form-data\" style=\"width:700px; margin:auto\" method=\"post\">

            <h2 style=\"margin-left:200px\">Upload Your File
            <button type=\"button\" class=\"btn btn-success\"
                  onclick=\"window.location.href='show_all_files.php?cr_name=$row[matier_name]&langg=$row[language]&majo=$row[major_name]'\">
				  Show all your uplaoded files
								<br><b>$row[matier_name]</b> $row[language]
                  </button>
            
            </h2>
            <hr style=\"border-top: 1px solid\">


           <div class=\"form-group\">
               <label for=\"major\">Major:</label>
               <input type=\"text\" name=\"major\" id=\"lastname\" class=\"form-control\" 
               value=\"$row[major_name]\" readonly>
               <label for=\"year\">Academic Year:</label>
               <input type=\"text\" name=\"year\" id=\"lastname\" class=\"form-control\" 
               value=\"$row[year]\" readonly>
               <label for=\"sems\">Semstre:</label>
               <input type=\"text\" name=\"semestre\" id=\"lastname\" class=\"form-control\" 
               value=\"$row[semestre]\" readonly>
               <label for=\"lang\">Language</label>
               <input type=\"text\" name=\"language\" id=\"lastname\" class=\"form-control\"
               value=\"$row[language]\" readonly>
               <label for=\"course\">Course</label>
               <input type=\"text\" name=\"course\" id=\"lastname\" class=\"form-control\" 
               value=\"$row[matier_name]\" readonly>

               <label for=\"typefile\">Type Of Your File </label>
               <select name=\"typefile\" id=\"type\" class=\"form-control\">
                 <option value=\"course\"> Course </option>
                 <option value=\"tp\"> TP </option>
                 <option value=\"td\">TD</option>
                 <option value=\"sessions\">Sessions</option>

               </select>
               <label for=\"filename\">File Name:</label>
               <input type=\"text\" name=\"filename\" id=\"filename\" class=\"form-control\">
                <br>
                
               <div class=\"file-upload-wrapper\">
                 <input type=\"file\"  name=\"uploadfile\" class=\"file-upload\" />
               </div>
               <br>
               <div class=\"alert alert-info\" role=\"alert\">
               NB: <b>Make sure the name of the file choosed is the same of the name that you entred  in input above( Name Of File)</b>
               </div>




             </div>





          &nbsp;&nbsp;&nbsp;&nbsp;
          <button type=\"submit>\" class=\"btn btn-primary\" style=\"margin-left:260px\"> Upload</button>



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
    <br>
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
