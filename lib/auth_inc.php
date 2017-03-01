<?php
/**
  * Authenticates users
  * direct users to login page if not yet authenticated
  * else continue
  */
session_start();
if (!isset($_SESSION['authenticated'])) {

	header('Location:index.php');
	exit;
}
/**** end of file auth_inc.php **/