
<?php
ob_start();
$connection=mysql_connect("localhost","root","");
if($connection){
	mysql_select_db("sazid",$connection);
}
$delete=$_GET['p'];

$sql = "DELETE FROM status WHERE heading='$delete'";
mysql_query($sql);
mysql_close($connection);
?> 