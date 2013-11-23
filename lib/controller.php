<?php
	class Controller
	{
		
		function __construct()
		{
			require_once("lib/view.php");
			$this->view = new View();
		}

		function loadModel()
		{

		}
	}
?>