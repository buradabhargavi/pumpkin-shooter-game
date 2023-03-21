 
<?php
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'movies';
$conn = mysqli_connect($server, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed:" . $con->connect_error);
}
echo "";

session_start();
if (isset($_POST['bt'])) {  
    $year=$_POST['bt'];
    $_SESSION['year']=$year;
    header("location:move.php");
}

//Get details
if (isset($_POST['fetch'])) {  
    $name = $_POST['movie_name'];
    $_SESSION['name']=$name;
    header("location:detail.php");
}
