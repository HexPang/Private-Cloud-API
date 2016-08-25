<?php
	require_once("CloudAPIClient.php");
	$api = new CloudAPIClient('10000');
	var_dump($api->Request('hello',['page'=>1,'msg'=>'hahaha']));
?>
