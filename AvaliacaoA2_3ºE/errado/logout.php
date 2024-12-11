<?PHP
    session_start ();
	$_SESSION = arrai();
	session_unset ();
	session_destroy ();
	echo "<script> location.href = ('.php') </script>";

?>
