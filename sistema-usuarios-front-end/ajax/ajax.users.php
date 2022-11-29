<?php 
//valicacion con php datos formulario 
if (isset($_POST['username']) && isset($_POST['email'])) {
	if ($_POST['email'] !== '' || $_POST['username'] !== '' || $_POST['password'] !== '') {

		if (!preg_match('/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/', $_POST['email'])) {
			echo "Email_no_valido";
			exit();

		}
		else if (!preg_match('/^[a-zA-Z0-9]+$/', $_POST['username'])) {
			echo "Usuario_no_valido";

		}
		else if (!preg_match('/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}$/', $_POST['password'])) {
			echo "Password_no_valido";

		}

		echo $_POST['email']. '</br>';
		echo $_POST['username']. '</br>';
		echo $_POST['password']. '</br>';
	}else
	{
		echo "campos vacíos";
	}
}

?>