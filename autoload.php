<?php
	spl_autoload_register(
		function($className){
			if (file_exists("./classes/$className.php")) {
				require_once "./classes/$className.php";
			}
			else {
				die ("Класс $className не существует");
			}
		}
	);
?>