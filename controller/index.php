<?php
	class Index extends Controller
	{
		
		function Home()
		{
			$this->view->render("index/index", true);
		}

		function News()
		{
			$this->view->render("index/news", true);
		}

		function sayThis($say)
		{
			echo $say;
		}
	}
?>