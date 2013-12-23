<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>

<meta name="Description" content="Web config interface for RaspRN" />
<meta name="Keywords" content="RaspRN, FRN, Free Radio Network, Raspberry Pi" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="Distribution" content="Global" />
<meta name="Author" content="Steve 30TM001" />
<meta name="Robots" content="noindex,nofollow" />		

<link rel="stylesheet" href="images/BluePigment.css" type="text/css" />

<title>RaspRN</title>
	<script src="processing.js" type="text/javascript"></script>
</head>

<body>

	<!-- header starts here -->
	<div id="header"><div id="header-content">	
		
		<h1 id="logo-text"><a href="index.html" title="">Rasp<span>RN</span></a></h1>	
		<h2 id="slogan">The Raspberry Pi FRN Client</h2>		
		
		<div id="header-links">
			<p>
				<!--- status info script --->

<script type="text/javascript">
function loadXMLDoc()
{
var xmlhttp;
if (window.XMLHttpRequest){
  xmlhttp=new XMLHttpRequest();
}else{
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("myDiv").innerHTML= xmlhttp.responseText; 
    }
  }
xmlhttp.open("GET","status.txt",true);
xmlhttp.send();
}
setInterval( "loadXMLDoc()", 5000 );
</script>

<div id="myDiv"><?php include("status.txt") ?></div>
			</p>		
		</div>	
	
	</div></div>
	
	<!-- navigation starts here -->
	<div id="nav-wrap"><div id="nav">
