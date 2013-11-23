<?php
	class BootStrap
	{
		
		function __construct()
		{
			$url = isset( $_GET["url"] ) ? $_GET["url"] : null;
			$url = filter_var($url, FILTER_SANITIZE_URL);

			$url = trim($url, "/");
			$url = explode("/", $url);

			//print_r($url);

			if( empty($url[0]) )
			{
				require_once("controller/index.php");
				$controller = new Index();
				$controller->Home();
				exit();
			}

			$file = "controller/".$url[0].".php";

			if( file_exists($file) )
			{
				require_once($file);
			}
			else
			{
				echo "The Class : ". $url[0]. " Does not exists";
				exit();
			}

			$controller = new $url[0]();
			
			if( isset($url[2]) )
			{
				$controller->{$url[1]}($url[2]);
			}
			else
			{
				if( isset($url[1]) )
				{
					$controller->$url[1]();
				}
				else
				{
					$controller->Home();
				}
			}
		}
	}
?>