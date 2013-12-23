<?php
$pagetitle="RaspRN Web Config";
$head="Welcome";
$para="RaspRN status and info appear on this page.  To change settings click configuration.";
include("header.php");
?>
<div class="box">
<h1>RaspRN</h1>
<h3>Users online</h3>							
<!-- insert clientlist.php -->
<?php $key="b"; $div="clientlist"; $source="clientlist.php"; include("refresh.php"); ?>


			</div>			
			
			<br />	

<?php include("footer.php") ?>