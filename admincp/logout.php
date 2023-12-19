<?php ob_start();?>
<?php 
	session_start();
	session_destroy();
	header('Location: ../layout/trangchu.php');
?>
<?php ob_flush();?>