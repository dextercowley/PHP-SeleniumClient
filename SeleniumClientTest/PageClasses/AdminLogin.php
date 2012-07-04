<?php
use SeleniumClient\IllegalStateException;

require_once '..\bootstrap.php';

use SeleniumClient\By;
use SeleniumClient\SelectElement;
use SeleniumClient\WebDriver;
use SeleniumClient\WebDriverWait;
use SeleniumClient\DesiredCapabilities;
use SeleniumClient\WebElement;

class AdminLogin
{
	private $_driver = null;
	
	public function __construct(WebDriver $driver)
	{
		$this->_driver = $driver;
		if (!$driver->findElement(By::xPath("//h1[contains(text(), Administration Login)]")))
		{
			throw new Exception("This is not an AdminLogin page: " . $driver->getCurrentPageUrl());
		}
	}
	
	public function loginValidUser($userName, $password)
	{
		
	}
	
}