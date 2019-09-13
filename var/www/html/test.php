<?php
  require_once('/var/simplesamlphp/lib/_autoload.php');

  $as = new SimpleSAML_Auth_Simple('default-sp');
  $as->requireAuth();
  $attributes = $as->getAttributes();
?>
<html>
<head><title>My First Service Provider in PHP</title></head>
<body>
<h1>SAML SP FOR SENSORS</h1>
<p>Welcome to the sensor service provider. Below you will find the form to be able to send information to the server</p>

<h2>Your attributes:</h2>
<pre><?php print_r($attributes); ?></pre>

<form action="sensorupdate.php" method="POST">
<label>Add sensor update:</label>
<input type="text" id="sensor" name="sensor" placeholder="Sensor" /><br/>
<input type="text" id="data" name="data" placeholder="Data" required/><br/>
<input type="submit" value="Añadir" /> 
</form>

</body></html>
