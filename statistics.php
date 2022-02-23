<?php
/*
$date    = date("l F j Y");
$time    = date("g:i:s A");
$browser = mysql_real_escape_string($_SERVER['HTTP_USER_AGENT']);
$ip      = $_SERVER['REMOTE_ADDR'];
$query = mysql_query('SELECT * FROM statistics ORDER BY id DESC');
$row = mysql_fetch_array($query);
$id = strval(intval($row['id']) + 1);
mysql_query("INSERT INTO statistics VALUES ('$id', '$date', '$time', '$browser', '$ip')");
*/

header("Location: /index.php", true, 301);
?>
