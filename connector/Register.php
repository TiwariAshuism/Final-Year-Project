
<?php
header('Content-type: application/json');

$showAlert = false; 
$showError = false; 
$exists=false;
    
if($_SERVER["REQUEST_METHOD"] == "POST") {
      
    // Include file which makes the
    // Database Connection.
    include '../includes/dbconnect.php';   
    
    $name = $_POST["name"]; 
    $email = $_POST["email"]; 
    $phone = $_POST["phone"];
    
    $sql = "Select * from register where name='$name'";
    
    
    $result = mysqli_query($conn, $sql);
            $sql = "INSERT INTO `register` ( `name`, 
                `email`, `phone`,`date`) VALUES ('$name', 
                '$email','$phone', current_timestamp())";
    
            $result = mysqli_query($conn, $sql);
            die( json_encode(array("message"=>"SUCCESS","success"=>true)));

          
          }  
    
?>