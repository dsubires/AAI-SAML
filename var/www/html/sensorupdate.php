<?php

$servername = "localhost";
$username = "debian-sys-maint";
$password = "";
$dbname = "devices";


$sensor = $_POST['sensor'];
$message = $_POST['data'];



if(empty($sensor) || empty($message)){
  echo "Error";
  
}else{

 try {
     $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
     // set the PDO error mode to exception
     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $sql = "INSERT INTO device_status (device, message) VALUES ('" . $sensor . "', '" . $message . "')"; 
     // use exec() because no results are returned
     $conn->exec($sql);
     echo "Sensor status updated successfully";
     //header("location: test.php");
     }
 catch(PDOException $e)
     {
     echo $sql . "<br>" . $e->getMessage();
     }

 $conn = null;

}
?>
