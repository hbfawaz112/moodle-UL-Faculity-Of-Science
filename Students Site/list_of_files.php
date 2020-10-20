
 <?php
session_start();


 if(isset($_SESSION['lan']) && isset($_SESSION['majjj']) && isset($_SESSION['acayear']))
 {
     $val1=$_SESSION['lan'];
     $val2=$_SESSION['majjj'];
     $val3=$_SESSION['acayear'];
 }

?>
<?php
  // echo "<h2>$val2 $val1 $val3(year)</h2>";
  ?> 
    

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<style>
  
  </style>
</head>
<body>



  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php">
    <img src="http://schedule.ulfs5.net/web/images/logo.jpg" width="60" height="60" class="d-inline-block align-top" alt="">

  </a>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">

 <a class="navbar-brand" href="index.php">  &nbsp;&nbsp;&nbsp;Moodle UL-FS5 &nbsp; <small> For Students</small>

 </a>
      </div>
</nav>



<div class="row">
<div class="col-2">
  <div class="list-group">
    <a class="list-group-item  "> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Menu</b></a>

       <?php
echo "  <a  href=\"list_of_courses.php?maj=$val2&lang=$val1&year=$val3\" class=\"list-group-item list-group-item-action \">
      <b>Home </b>
      </a>";
      ?>
          <a  href="http://schedule.ulfs5.net" class="list-group-item list-group-item-action "><b>UL-FS5 Scheduling</b></a>
          <a  href="https://www.facebook.com/ul.fsciences5/?epa=SEARCH_BOX" class="list-group-item list-group-item-action "><b>Circulars and News</b></a>

    <a  href="profile.php" class="list-group-item list-group-item-action "><b>Profile</b></a>
    <a  href="index.php" class="list-group-item list-group-item-action"><b>LogOut</b></a>
  </div>
</div>
  <div class="col">
<div class="container">

  <h3>About This Course :</h3>
  
  <?php
    
        if ($dbc = @mysqli_connect('localhost','root', ''))
	       {
		// Handle the error if the database couldnot be selected:
		      if (@mysqli_select_db($dbc,'helperexam'))
		          {
                    
                    if(isset($_GET["cr"]) && isset($_GET["option"]))
                    {
                        $courid=$_GET['cr'];
                        $type=$_GET['option'];
                        $sql="SELECT * FROM courses WHERE id='$courid' ";
                        
                        $r=mysqli_query($dbc,$sql);
                        
                        if($r){
                            while($row=mysqli_fetch_array($r,MYSQLI_ASSOC))
                                    {
                                      
                                        
                                        echo "
                                          <b>Course Code</b> : $row[course_code]  &nbsp;&nbsp;&nbsp; 
                                          <b>Course Name</b> : $row[course_name]&nbsp;&nbsp;&nbsp;
   <b>Semstre </b>: $row[semestre] Semestre &nbsp;&nbsp;&nbsp; <b>Language </b>: $row[language] &nbsp;&nbsp;&nbsp;   
                                <b>Files Type</b> : $type";
                                echo "<hr style=\"border-top: 1px solid\">";
                                
                                
                               /* echo "
                                   <hr>
    <h4 style=\"margin-left:450px\"> $type </h4>
    
                            
                            
    
    

                                ";*/
                                
                                    }
                            }
                        
                        
                        
                        
                        
                    }
                    else{}
                  
                  }
        }
    
    ?>
  
  <?php
    
        if ($dbc = @mysqli_connect('localhost','root', ''))
	       {
		// Handle the error if the database couldnot be selected:
		      if (@mysqli_select_db($dbc,'helperexam'))
		          {
                   
                  if(isset($_GET["crcode"]))
                  {
                      $coursecode=$_GET['crcode'];
                      //$val1 --> language
                      
                      $sql1="SELECT * FROM pdf_matier_name1 WHERE matier_name='$coursecode' AND matier_lang='$val1' AND matier_option='$type' "; 
                      
                       $r=mysqli_query($dbc,$sql1);
                         if($r){
                             
                             
                             $count=mysqli_num_rows($r);
                           
                             
                             
                             if($count==0){echo "<br><br><br><br><br><h3 style=\"color:red  \">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;There Are No Upladed Files Yet.<br><br>
                            <br><br><br><br>
                            </h3> ";}
                             
                             
                             
                             else{echo "<table class=\"table\" border=\"1\">
                                <thead class=\"thead-dark\">
                                  <tr>
                                    <th>File</th>
                                    <th>Date Of Upload</th>
                                    <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Download</th>
                                    

                                  </tr>
                                </thead>
                                <tbody>";
                             while($row1=mysqli_fetch_array($r,MYSQLI_ASSOC))
                                {
                                 echo "
                                 <tr>
                                    <td>
                                      <img src=\"imgs/pdf1.png\" width=\"30\" height=\"30\"> $row1[pdf_name]
                                    </td>
                                    <td>$row1[date_of_upload]</td>
                                    <td>
                                      <button type=\"button\" class=\"btn btn-primary\"
                                      onclick=\"window.location.href='http://192.168.1.101:8080/module_ulfs5/data/$coursecode/$val1/$type/$row1[pdf_name].pdf'\"
                                      >Download File</button>

                                    </td>

                                  </tr>
                                 ";
                                }
                             echo "</tbody></table><br><br><br>";
                         }
                         }
                  }
                   
              }
        }
    ?>
  


   

</div>
</div>
<div class="col-3">
  <br>
   <div class="card">
   
   <h5 style="margin-left:45px">Leave a comment for the instructor of this course.</h5>
    <hr>
   <div class="form-group">
   <form style="margin:10px">
  <textarea  class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3" placeholder="Your Comment" ></textarea>
  <br>
  <button type="button" class="btn btn-success" style="margin-left:105px">Submit</button>
       
      </form>
       
   </div>
    </div>
   
</div>
    
<div class="col-1">
    
</div>
</div>



<hr><footer class="footer">
                <div class="container">
                    <p class="pull-left">&copy;Copyright 2020 | Lebanese University - Faculty of Sciences (section 5)
                         <small style="margin-left:470px">By : Hussein B. Fawaz </small>
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
