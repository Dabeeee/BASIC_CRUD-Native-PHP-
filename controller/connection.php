<?php
$db = mysqli_connect('localhost', 'root', '','test');
if (!$db){trigger_error('Could not connect to MySQL: ' . mysqli_connect_error());}
?>
