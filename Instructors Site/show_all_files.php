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

    <a class="navbar-brand" href="firstactivity.php">  &nbsp;&nbsp;&nbsp;Modules UL-FS5
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

             
             <?php
                
                if(isset($_GET["cr_name"]) && isset($_GET["langg"]) )
                {
                    $crname=$_GET['cr_name'];
                    $lang=$_GET['langg'];
                    
                    echo "<h2 style=\"margin-left:220px\"> List Of Your Uploads Files($crname - $lang)</h2>";
              

                   if ($dbc = @mysqli_connect('localhost','root', ''))
                    {
                        // Handle the error if the database couldnot be selected:
                        if (@mysqli_select_db($dbc,'helperexam'))
                        {       
                            $query="SELECT * FROM pdf_matier_name1 WHERE matier_name='$crname' AND matier_lang='$lang' ";
                            //order by date
                            
                            $r=mysqli_query($dbc,$query);
                                if($r)
                                {
                                    
                                    echo "<table class=\"table\">
                                        <thead class=\"thead-dark\">
                                          <tr>
                                            <th>File Name</th>
                                            <th>File Type</th>
                                            <th>Date Of Upload</th>
                                            <th>Option</th>
                                            
                                            
                                          </tr>
                                        </thead>
                                        <tbody>";
                            
                                      while($row=mysqli_fetch_array($r,MYSQLI_ASSOC))
                                      {
                                          
                                          echo "
                                                
                                                <tr>
                            <td>    <img src=\"images/pdf1.png\" width=\"30\" height=\"30\"> 
                                            $row[pdf_name]</td>
                            <td>$row[matier_option]</td>
                            <td>$row[date_of_upload]</td>
                            <td>
                            <button type=\"button\" class=\"btn btn-danger\"
                  onclick=\"window.location.href='delete_file.php?pdfid=$row[pdf_id]'\">Delete File
                  </button>
                            
                            </td>
                          </tr>
                                          
                                          ";
                                      }
                                    
                                    echo "</tbody> </table>";
                                }
                            else{echo "error query !!";}
                            
                            
                            
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
