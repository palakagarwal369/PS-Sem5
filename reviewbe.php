<?php
// Variables to be inserted into the table
$name = $_POST['name'];
$feedback = $_POST['feedback'];
// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "ps1";

// Create a connection
$conn = new mysqli($servername, $username, $password, $database);
// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo "Connection was successful<br>";
}


// Sql query to be executed
$sql = "INSERT INTO `review`(`name`, `feedback`) VALUES ('$name','$feedback')";
$result = mysqli_query($conn, $sql);

// Add a new trip to the Trip table in the database
if($result){
    echo "The record has been inserted successfully successfully!<br>";
}
else{
    echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
}
header('location: home.php#stories');
?>
