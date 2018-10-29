<?php
//LOGIN DATABASE
$db = new PDO(
	'mysql:host=localhost;dbname=dutchplanefinders;charset=utf8mb4',
	'DPF_admin', 
	'XfZV7GD12P86F11tJBPY47ZGE'
);

$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
?>