<<?php
$dbHost='sql300.mipropia.com';
$dbName='mipc_29349553_cursophp';
$dbUser='mipc_29349553';
$dbPass='Ale1421';
try{
	$pdo=new PDO("mysql:host=$dbHost;dbname=$dbName",$dbUser,$dbPass);
	$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch (Exception $e){
	echo $e->getMessage();
}

?>