

<?php
$server = "";
$username = "";
$password = "";
$database = "";

$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn){
    
    die("Error". mysqli_connect_error());
}
// else{
//     echo "success";
// }


?>


