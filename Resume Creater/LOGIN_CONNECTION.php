<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "resume";

    $conn = mysqli_connect($server, $username, $password, $database);
    if (!$conn)
    {
    die("Error". mysqli_connect_error());
    }
    $username = $_POST["username"];
    $password = $_POST["password"]; 
    
     
    $sql = "SELECT * FROM `signup` where Username='$username' AND Password='$password'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    $row = mysqli_fetch_assoc($result);
    if ($num == 1){
        session_start();
        $_SESSION['name'] = $row['Username'];
        if(isset($_SESSION['name'])){
            header("location: resume.php");
            // echo "<script>alert('successfully login')</script>";
        }
        else
        {
            //$showError = "Invalid Credentials";
            header("location: login1.php");
        } 
     
    } 
    else{
        echo "<script>alert('Invalid Credentials')</script>";
    }
}
?>