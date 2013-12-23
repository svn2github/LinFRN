<script type="text/javascript">
function loadXMLDoc<?php echo $key ?>()
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
    document.getElementById("<?php echo($div); ?>").innerHTML= xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","<?php echo ($source); ?>",true);
xmlhttp.send();
}
setInterval( "loadXMLDoc<?php echo $key ?>()", 5000 );
</script>

<div id="<?php echo($div); ?>"><?php include($source); ?></div>
