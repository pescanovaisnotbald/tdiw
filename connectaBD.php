<?php
function connectaBD(){

	$host = "deic-docencia.uab.cat";
	$port="5432";
	$dbname ="tdiw-w15";
	$user="tdiw-w15";
	$password="tdiw-w15";
	$connexio = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$pasword") or die("Error connexio DB".pg_last_error());
	return($connexio)
}
?>
