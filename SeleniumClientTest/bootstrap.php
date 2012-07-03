<?php

class SeleniumClientAutoLoader {

	public function __construct()
	{
		spl_autoload_register(array($this, 'seleniumClientLoader'));
	}

	private function seleniumClientLoader($className)
	{
		$fileName = "../" . str_replace("\\", "/", $className) . '.php';
		if (file_exists($fileName)) {
			include "../" . str_replace("\\", "/", $className) . '.php';
		}
		else
		{
			include "../" . $fileName;
		}

	}

}

$autoloader = new SeleniumClientAutoLoader();