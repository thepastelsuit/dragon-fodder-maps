<?php
if(@include_once('config.php')) {
	mysql_connect($config['mysql_db'],$config['mysql_user'],$config['mysql_password']) or die(mysql_error());
	mysql_select_db($config['mysql_table']) or die(mysql_error());
	
	$sql = mysql_query("SELECT * FROM map_points ORDER BY title ASC") or die(mysql_error());
	
	while($row = mysql_fetch_array($sql,MYSQL_ASSOC)) {
		$row['images'] = array();
		$locations[$row['val']] = $row;
		$sql2 = mysql_query("SELECT * FROM images WHERE location LIKE '".$row['id']."'");
		while($row2 = mysql_fetch_array($sql2,MYSQL_ASSOC)) {
			$locations[$row['val']]['images'][] = $row2;
		}
	}
	
	$sql = mysql_query("SELECT * FROM map_types");
	
	while($row = mysql_fetch_array($sql,MYSQL_ASSOC)) {
		$maps[$row['key']] = $row['image'];
	}
	
	mysql_close();
} else {
	echo "<h1>Welcome to Dragon Fodder Maps!</h1>";
	echo "<font size='26px'>To get started, you must first copy <b>default.config.php</b> to <b>config.php</b> and enter in your database settings.</font>";
	die();
}