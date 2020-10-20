<?php

 if(isset($_GET["suc"]))
 {
     echo("<script>
        alert(\" Account Created Succefully :) :) \");
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

  <form class="form-inline my-2 my-lg-0" action="login.php" method="post">


     <input class="form-control mr-sm-2"  name="usernamee" placeholder="User Name" required>
    <input class="form-control mr-sm-2" type="password" name="passwordd" placeholder="Password" required>

    <button type="submit" class="btn btn-primary">LogIn</button>
    <br>

        <?php

  if(isset($_GET["er1"]))
  {
  
      /*echo("<script>
        alert(\" UserName or Password Incorrect :(  \");
        </script>");*/
      echo " <h6 style=\"color:red\">Your login attempt was not successful. Please try again</h6>";
  }
      
        ?>

  </form>


</div>

</nav>



 <table>
     <tr>
       <td width="40%" align="center" valign="middle">
       <img id="Image2"  src="https://scontent.fbey14-1.fna.fbcdn.net/v/t1.0-9/30725369_190613668400294_5562923173143379968_n.jpg?_nc_cat=109&_nc_sid=ca434c&_nc_ohc=bDeHF8ZSKtcAX9WoDl2&_nc_ht=scontent.fbey14-1.fna&oh=a9be40ab290670624bd8e57876d2143c&oe=5ED4E539"
       align="absmiddle" style="border-width:0px;" />
        </td>

       <td>


  <form action="signup.php"  style="width:400px; margin:auto" method="get">
    <h2 style="margin-left:130px">Sign Up</h2>


   <div class="form-group">
       <label for="firstname">First Name</label>
       <input type="text" name="firstname" id="lastname" class="form-control" required>

<label for="lastname">Last Name</label>
       <input type="text" name="lastname" id="lastname" class="form-control" required>





      <label for="username">User Name</label>
      <input type="text" name="user_name" id="username" class="form-control" required>

    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" name="password1" id="password" class="form-control" required>

      <label for="dep">Major(Your Degree)</label>
      <select name="major" id="dep" class="form-control">
        <option value="Informatic"> Informatic </option>
        <option value="Math"> Math </option>
        <option value="Physic">Physics</option>
        <option value="Biologie">Biologie</option>
        <option value="Chemistry">chemistry</option>
        <option value="BioChemistry">BioChemistry</option>

      </select>

      <label for="year">Academic Year</label>
      <select name="year" id="year" class="form-control">
        <option value="First"> First Year </option>
        <option value="Second"> Second Year </option>
        <option value="Third">Third Year </option>
        <option value="Master1">Master 1</option>

      </select>

      <label for="lang">Language</label>
      <select name="language" id="year" class="form-control">
        <option value="Francais"> Francais </option>
        <option value="English"> Engllish </option>

      </select>


      <label for="stdfilenb">Student File Number(رقم الملف)</label>
      <input type="text" name="stdfilenb" id="stdfilenumber" class="form-control" required>



 <div class="from-check">
 <input type="checkbox" id="accept-terms" class="from-check-input" required>
 <label for="accept-terms" class="form-check-label"> Accepet Terms &amp; Conditions </label>
    </div>

  &nbsp;&nbsp;&nbsp;&nbsp;
  <button type="submit>" class="btn btn-primary"> Submit</button>
       </div>
      </div>

  </form>


       </td>
     </tr>
</table>

<hr><footer class="footer">
                <div class="container">
                    <p class="pull-left">&copy;Copyright 2020 | Lebanese University - Faculty of Sciences (section 5)
                         <small style="margin-left:370px">By : Hussein B. Fawaz</small>
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
