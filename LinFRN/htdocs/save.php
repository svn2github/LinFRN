<?php
$pagetitle="Configuration";
$head="Tis done!";
$para="Yeah.  We saved your Config.";
include("header.php");
?>

<div class="box">
		
<h1>RaspRN <span class="white">Configuration</span></h1>
<h3>Save Settings</h3>
<p>
		
<?php
// $extra_args = $_REQUEST['args'];
// if ($extra_args == 1){

$filename = "frnclient.conf";

$data = "# FRN server hostname and port\r\n";
$data .= "Host        ". $_POST['host']. "\r\n";
$data .= "Port        ". $_POST['port']. "\r\n";
$data .= "\r\n# User's callsign\r\n";
$data .= "Callsign    ". $_POST['callsign']. "\r\n";
$data .= "\r\n# User's real name\r\n";
$data .= "Name        ". $_POST['name']. "\r\n";
$data .= "\r\n# User's e-mail address\r\n";
$data .= "Email       ". $_POST['email']. "\r\n";
$data .= "\r\n# User's password\r\n";
$data .= "Password    ". $_POST['password']. "\r\n";
$data .= "\r\n# Country\r\n";
$data .= "Country     ". $_POST['country']. "\r\n";
$data .= "\r\n# Network (room)\r\n";
$data .= "Net         ". $_POST['net']. "\r\n";
$data .= "\r\n# Client type\r\n";
$data .= "Type        \"". $_POST['type']. "\"\r\n";
$data .= "#Type        Link\r\n#Type        Crosslink\r\n";
$data .= "\r\n# City\r\n";
$data .= "City        ". $_POST['city']. "\r\n";
$data .= "\r\n# QTH locator or district\r\n";
$data .= "Locator     ". $_POST['loc']. "\r\n";
$data .= "\r\n# Description (used for crosslinks only)\r\n";
$data .= "Desc        \"". $_POST['desc']. "\"\r\n";
$data .= "\r\n# Client settings\r\n";
$data .= "Compath     ". $_POST['compath']. "\r\n";
$data .= "Comline     ". $_POST['RTSDTS']. "\r\n";
$data .= "PTTHigh     ". $_POST['PTTHL']. "\r\n";
$data .= "Rxon        ". $_POST['rxon']. "\r\n";
$data .= "Rxoff        ". $_POST['rxoff']. "\r\n";
$data .= "Squelch        ". $_POST['squelch']. "\r\n";
$data .= "Wavpath        ". $_POST['wavpath']. "\r\n";

$filehandle = fopen($filename, "w+") or die("Couldn't open $filename for writing!");
fwrite($filehandle, $data) or die("Couldn't write values to file!");
fclose($filehandle);

echo "Configuration file saved successfully!";

// }
?>
						
</p>

<p><A HREF="config.php">Click here to return to config page</a> or choose a link above.</p>
</div>
<br />	

<?php include("footer.php") ?>