<?php

/**
* Cette classe permet de gérer les erreurs
*/
class Error
{
	var $request;
	function __construct($request)
	{
		$this->request = $request;
	}

	function errorSingle($msg)
	{
		echo $msg;
		require_once HTML . '_templates/footer.php';
		die();
	}
}

?>