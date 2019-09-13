<?php


$sensor = $_POST['sensor'];
$temperature = $_POST['data'];
$hoy = date("Y-m-d H:i:s"); 

if(empty($sensor) || empty($temperature)){
   echo '{ "Error" : "RuntimeError" }';
}else{
  
$data = array(
    'device' => $sensor,
    'timestamp' => $hoy,
    'temperature' => $temperature
);

$payload = json_encode($data);

// Prepare new cURL resource
$ch = curl_init('http://localhost:9200/device_status/_doc/?pretty');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLINFO_HEADER_OUT, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);

// Set HTTP Header for POST request
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Content-Length: ' . strlen($payload))
);

// Submit the POST request
$result = curl_exec($ch);

// Close cURL session handle
curl_close($ch);
echo $result;

}

?>
