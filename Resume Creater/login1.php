<?php session_start()?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="css/login.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>

<body>
    <?php include "LOGIN_CONNECTION.php" ?>
    <header>
        <nav>
            <div class="container1">
                <td>
                    <div class="logo">Resume Creator</div>
                    <ul class="menu">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="#About">About</a></li>
                        
                        <li><a href="#">Contact</a></li>
                    </ul>
                </td>
            </div>
        </nav>
    </header>
    <center>
        <section class="container">
            <center>
                <h3>
                    LOGIN
                </h3>
            </center>
            <center>
                <form action="" method="POST">
                    <div class="box">
                      
                                <tr>
                                    <td>
                                        <div class="input-container">
                                            <i class='far fa-user icon'></i>
                                            <input type="text" placeholder="Enter Username" name="username" value=""
                                                required>

                                        </div>
                                    </td>
                                </tr>
                                <br><br>
                                <tr>
                                    <td>
                                        <div class="input-container">

                                            <i class='fas fa-lock icon'></i>
                                            <input type="password" placeholder="Enter password" name="password"
                                                required>


                                        </div>

                                        <h4><a href="mailto:2021pietcshitesh139@poornima.org">Forget password?</a></h4>
                                    </td>
                                </tr>
<br><br><br>
                                <tr>
                                    <div class=button>
                                        <td>
                                            <center>
                                            <input type="submit" name="savedata" value="Submit"  onclick="C:\xampp\htdocs\Resume Creater\resume.php"></input>
                                            </center>
                                    </div> <br>
                                    <hr>
                                    <br>
                                    <center>
                                        <div>
                                            <a
                                                href="https://accounts.google.com/SignOutOptions?hl=en&continue=https://www.google.com/"><img
                                                    src="images/google.jpg" width="9%"
                                                    height="8%"></a>&nbsp&nbsp&nbsp&nbsp&nbsp
                                            &nbsp&nbsp&nbsp&nbsp&nbsp;
                                            <a href="https://www.linkedin.com"><img
                                                    src="images/linkedin.png" width="7%" height="8%"></a>
                                            &nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp;
                                            <a href="https://twitter.com"><img
                                                    src="images/twitter.jpg" width="7%"
                                                    height="8%"></a>&nbsp&nbsp&nbsp&nbsp&nbsp
                                            &nbsp&nbsp&nbsp&nbsp&nbsp;
                                            <a href="https://github.com"><img src="images/github.jpg"
                                                    width="7%" height="8%"></a>
                                            <p>Not have any account?<a href="signup.php">Signup</a>
                                    </center>
                    </div>
                    </td>

                    </tr>

                </form>
</body>
</html>