<?php
require_once 'config.php';

    if($_POST['act'] == 'rate'){
    	//search if the user(ip) has already gave a note
    	$ip = $_SERVER["REMOTE_ADDR"];
    	$therate = $_POST['rate'];
    	$thepost = $_POST['id_post'];

    	$query = mysql_query("SELECT * FROM wcd_rate where ip= '$ip' AND id_post='$thepost' "); 
    	while($data = mysql_fetch_assoc($query)){
    		$rate_db[] = $data;
    	}

    	if(@count($rate_db) == 0 ){
    		mysql_query("INSERT INTO wcd_rate (id_post, ip, rate)VALUES('$thepost', '$ip', '$therate')");
    	}else{
    		mysql_query("UPDATE wcd_rate SET rate= '$therate' WHERE ip = '$ip' AND id_post='$thepost' ");
    	}
    } 
?>