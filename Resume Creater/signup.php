<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="resume";
$conn= mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SIGNUP</title> 
  <link rel="stylesheet" href="css/login.css">
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>

<body>
  <header>
    <nav>
      <div class="container1">
        <td>
        <div class="logo">Resume Creator</div>
        <ul class="menu">
          <li><a href="index.html">Home</a></li>
          <li><a href="#About">About</a></li>
          <li><a href="login1.php">Login</a></li>
          <li><a href="#">Contact</a></li>
        </ul></td>
      </div>
    </nav>
  </header>
  <center>
  <div class="container">
    <center>
      <h3>
        SIGN UP
      </h3>
    </center>
     
        <form action="signup.php" method="GET">
          <div class="box">
            <div class=button>
                  <tr>
                    <td>
                      <div class="input-container">
                        <i class='far fa-user icon'></i>
                        <input type="text" placeholder="Enter Username" name="username" required>
                      </div>
                    </td>
                  </tr>

                  <tr>
                    <td>
                      <div class="input-container">
                        <i class='fas fa-lock icon'></i>
                        <input type="password" placeholder="Enter password" name="password" required>
                      </div>
                    </td>
                  </tr>

                  <tr>
                    <td>
                      <div class="input-container">
                        <i class='fas fa-lock icon'></i>
                        <input type="password" placeholder="Confirm password" name="ConfirmPassword" required>
                      </div>
                    </td>
                  </tr>

                  <tr>
                    <td>
                      <div class="input-container">
                        <i class='far fa-envelope icon'></i>
                        <input type="text" placeholder="Enter Email-ID" name="mail" required>
                      </div>
                    </td>
                  </tr>

                  <tr>
                    <td>
                      <div class="input-container">
                        <i class='fas fa-phone icon'></i>
                        <input type="text" placeholder="Enter Mobile No." name="Mobile" required>
                      </div>
                    </td>
                  </tr>

                  <tr>
                    <td>
                      <center> <input type="submit" name="savedata" value="Submit"></input></center>
                      <br>
                      <center>
                        <a href="#"><img src="images/google.jpg" width="9%" height="8%"></a>&nbsp&nbsp&nbsp&nbsp&nbsp
                        &nbsp&nbsp&nbsp&nbsp&nbsp;
                        <a href="https://www.linkedin.com/school/poornima-group-of-colleges/"><img
                            src="images/linkedin.png" width="7%" height="8%"></a>
                        &nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp;
                        <a href="https://twitter.com/PIET_Jaipur?t=MxeihiSvkKGELVDUssC_TA&s=35"><img
                            src="images/twitter.jpg" width="7%" height="8%"></a>&nbsp&nbsp&nbsp&nbsp&nbsp
                        &nbsp&nbsp&nbsp&nbsp&nbsp;
                        <a href="#"><img src="images/github.jpg" width="7%" height="8%"></a>

                      </center>
                    </td>

                  </tr>

        </form>
        <?php
         if($_GET['savedata'])
         {
               $username=$_GET['username'];
                $password=$_GET['password'];
                $ConfirmPassword=$_GET['ConfirmPassword'];
           $mail=$_GET['mail'];
           $Mobile=$_GET['Mobile'];
         
         if($username!="" && $password!="" && $ConfirmPassword!="" && $mail!="" && $Mobile!="")
         {
             $minpasswordlength=6;
             $maxpasswordlength=8;
             if(strlen($password)>=$minpasswordlength && strlen($password)<=$maxpasswordlength)
             {
             $query2="INSERT INTO `signup` (`Username`, `Password`, `ConfirmPassword`, `EmailID`, `MobileNumber`) 
              VALUES ('$username', '$password', '$ConfirmPassword', '$mail', '$Mobile');";
             }
             else{
               echo '<script type="text/javascript">';
             echo 'alert("Password between length 6 and 8");';
             echo '</script>';
             }
         
           }
         if($password==$ConfirmPassword)
         {
         $data = mysqli_query($conn,$query2);
         }
         }
         if($data)
         {
           echo '<script type="text/javascript">';
           echo 'alert("Signup Successfull Please Login the site ");';
           echo '</script>';
         }
         else{
           echo '<script type="text/javascript">';
         echo 'alert("ConfirmPassword not matches Password and username, ID already exist does not signup");';
         echo '</script>';
         }
         ?>
        
      </div>
  </div>
  </div>
  </center>



</body>

</html>

