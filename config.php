<!--?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "recipe_book";
$port = "3306";
  // Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname, $port);

   // Check connection
   if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
   }
   echo " ";
   
?> -->

<?php
define('SQL_HOST','localhost');
define('SQL_USER','root');
define('SQL_DB','recipe_book');
define('SQL_PASS','');
define('SQL_PORT','3306');

$conn=mysqli_connect(SQL_HOST,SQL_USER,SQL_PASS,SQL_DB,SQL_PORT);

if($conn->connect_error){
    echo 'Sorry could not connect to database';
    die;
}
else{
    //echo 'Hurray!! DB Connected successfully';
}
