<?php

class LogoutAdmin {
	public function __construct()
	{
		unset($_SESSION['admin']);
		header('Location: ./');
	}
}
$logoutAdmin = new LogoutAdmin();

