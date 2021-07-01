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
            
    
    $sql = "Select * from news where id=1";    

            $sql = "INSERT INTO `news` ( `email_sub`,`date`) VALUES ('$name',current_timestamp())";
    
            $result = mysqli_query($conn, $sql);
              $result = mysqli_query($conn, $sql);
            die( json_encode(array("message"=>"SUCCESS","success"=>true)));
          
          }  
    
?>