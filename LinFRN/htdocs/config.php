<?php

$pagetitle="Configuration";
$head="Change stuff";
$para="Enter your FRN client settings and then click the button at the bottom to save the configuration.";
include("header.php");

$file = fopen("frnclient.conf", "r") or exit("Unable to open file!");

//Output a line of the file until the end is reached
while(!feof($file))
  {
  $thisline = fgets($file);
  $firstchar = substr($thisline, 0, 1);
  $linearray = preg_split('/\s+/', $thisline);
  $title = $linearray[0];
  $contents = "";
  $num = count($linearray);
  for ($c=1; $c < $num; $c++) {
            $contents = ($contents . $linearray[$c]. " ");
	}
  // $contents = $linearray[1]. " ". $linearray[2]. " ". $linearray[3]. " ". $linearray[4]. " ". $linearray[5]. " ". $linearray[6]. " ". $linearray[7]. " ". $linearray[8]. " ". $linearray[9]. " ". $linearray[10];
  $contents = trim($contents);
  $contents = trim($contents, "\"");

  if ($firstchar == "#" or $title == "" or $contents == "")
    {
    // if ($firstchar == "#") echo "<br>". $thisline. "<br>";
    }
  else
    {
    if ($title == "Host") $host = $contents;
    if ($title == "Port") $port = $contents;
    if ($title == "Callsign") $callsign = $contents;
    if ($title == "Name") $name = $contents;
    if ($title == "Email") $email = $contents;
    if ($title == "Password") $password = $contents;
    if ($title == "Country") $country = $contents;
    if ($title == "Net") $net = $contents;
    if ($title == "Type") $type = $contents;
    if ($title == "City") $city = $contents;
    if ($title == "Locator") $loc = $contents;
    if ($title == "Desc") $desc = $contents;
    if ($title == "Compath") $compath = $contents;
	if ($title == "Comline") $rtsdts = $contents;
    if ($title == "PTTHigh") $ptthl = $contents;
    if ($title == "Rxon") $rxon = $contents;
    if ($title == "Rxoff") $rxoff = $contents;
    if ($title == "Squelch") $squelch = $contents;
    if ($title == "Wavpath") $wavpath = $contents;

    // echo $title. $spaces. $contents;
    }
  }

fclose($file);
?>

<div class="box">
<h1><a href="index.html">RaspRN <span class="white">Configuration</span></a></h1>
				
			<form method="post" action="save.php">
	
				<h3>Your details</h3>
				<label>Your callsign</label>
				<input name="callsign" value="<?php echo $callsign ?>" type="text" size="15" />
                                <label>Your name</label>
				<input name="name" value="<?php echo $name ?>" type="text" size="30" />
				<label>Your e-mail address</label>
				<input name="email" value="<?php echo $email ?>" type="text" size="30" />
				<label>Your password</label>
				<input name="password" value="<?php echo $password ?>" type="password" size="15" />
				<label>Your city</label>
				<input name="city" value="<?php echo $city ?>" type="text" size="30" />
				<label>Your QTH locator or district</label>
				<input name="loc" value="<?php echo $loc ?>" type="text" size="30" />                                
				<label>Your country</label>
				<input name="country" value="<?php echo $country ?>" type="text" size="30" />
				<br />	</br />
				<h3>Client settings</h3>
				<label>FRN server</label>
				<input name="host" value="<?php echo $host ?>" type="text" size="30" />
				<label>Server port</label>
				<input name="port" value="<?php echo $port ?>" type="text" size="6" />
				<label>Default net</label>
				<input name="net" value="<?php echo $net ?>" type="text" size="30" />
				<label>Client type</label>
				<input name="type" value="<?php echo $type ?>" type="text" size="30" />                                
				<label>Client description</label>
				<input name="desc" value="<?php echo $desc ?>" type="text" size="30" />
				<label>Path to COM port</label>
				<input name="compath" value="<?php echo $compath ?>" type="text" size="30" />
				<label>RTS / DTS</label>
				<input name="RTSDTS" value="<?php echo $rtsdts ?>" type="text" size="30" />
				<label>PTT Active High</label>
				<input name="PTTHL" value="<?php echo $ptthl ?>" type="text" size="30" />
				<label>RX ON delay</label>
				<input name="rxon" value="<?php echo $rxon ?>" type="text" size="6" />
				<label>RX OFF delay</label>
				<input name="rxoff" value="<?php echo $rxoff ?>" type="text" size="6" />
				<label>Squelch setting time</label>
				<input name="squelch" value="<?php echo $squelch ?>" type="text" size="6" />
				<label>Path to roger beep WAV</label>
				<input name="wavpath" value="<?php echo $wavpath ?>" type="text" size="30" />

				<br />	</br />
				<input class="button" type="submit" value="Save Settings" />		
						
			</form>

				
							
			</div>			
			
			<br />	

<?php include("footer.php") ?>