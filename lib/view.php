<?php
	class View
	{
		function render($template, $noInclude = false)
		{
			$file = "view/" . $template . ".php";
			if(file_exists($file))
			{
				if($noInclude)
				{
					require_once($file);
				}	
			}
			
		}
		
	}
?>