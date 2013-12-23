<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>

<meta name="Description" content="Web config interface for RaspRN" />
<meta name="Keywords" content="RaspRN, FRN, Free Radio Network, Raspberry Pi" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="Distribution" content="Global" />
<meta name="Author" content="Steve 30TM001" />
<meta name="Robots" content="noindex,nofollow" />
<meta http-equiv="Cache-Control" content="no-cache">		

<link rel="stylesheet" href="images/BluePigment.css" type="text/css" />

<title><?php echo($pagetitle) ?></title>
	
</head>

<body>

<!-- header starts here -->
<div id="header"><div id="header-content">	
		
<h1 id="logo-text"><a href="index.html" title="">Rasp<span>RN</span></a></h1>	
<h2 id="slogan">The Raspberry Pi FRN Client<BR /></h2>		
		
<div id="header-links">
<p>
<!--- status info script --->
<?php $key="a"; $div="status"; $source="status.txt"; include("refresh.php"); ?>
</p>		
</div>	
	
</div></div>
	
<!-- navigation starts here -->
<div id="nav-wrap"><div id="nav">
<ul>

<!-- auto-select current tag based on $pagetitle -->

<?php
if ($pagetitle=="RaspRN Web Config") {
	echo ('<li id="current"><a href="index.php">Start</a></li>');
	} else {
	echo ('<li><a href="index.php">Start</a></li>');
	}
if ($pagetitle=="Configuration") {
	echo ('<li id="current"><a href="config.php">Configuration</a></li>');
	} else {
	echo ('<li><a href="config.php">Configuration</a></li>');
	}
if ($pagetitle=="Advanced") {
	echo ('<li id="current"><a href="telnet.php">Advanced</a></li>');
	} else {
	echo ('<li><a href="telnet.php">Advanced</a></li>');
	}
if ($pagetitle=="About RaspRN") {
	echo ('<li id="current"><a href="about.php">About</a></li>');
	} else {
	echo ('<li><a href="about.php">About</a></li>');
	}
?>

</ul>
	
</div></div>
				
<!-- content-wrap starts here -->
<div id="content-wrap"><div id="content">	 
<div id="sidebar" >	
<div class="sep"></div>
<div class="sidebox">
<?php echo('<h1>'. $head. '</h1><p>'. $para. '</p>') ?>
<br />
</div>
<div class="sidebox">
<h1>RaspRN</h1>
<p>The RaspRN project is under active development. Visit the developer's website by following <A HREF="http://www.frnraspberry.wordpress.com" TARGET="_blank">this link</a>.</p>
<br />
</div>
</div>
<div id="main">	