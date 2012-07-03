<?php

// require_once 'AutoLoader.php';
use SeleniumClient\WebElement;

require_once '..\bootstrap.php';

use SeleniumClient\By;
use SeleniumClient\SelectElement;
use SeleniumClient\WebDriver;
use SeleniumClient\WebDriverWait;
use SeleniumClient\DesiredCapabilities;

class AlertTest extends PHPUnit_Framework_TestCase
{
	private $_driver = null;
	private $_testUrl = null;

	public function setUp()
	{
		$this->_testUrl = "http://localhost/joomla_development/cms-trunk/";

// 		$desiredCapabilities = new DesiredCapabilities("firefox");
		$desiredCapabilities = new DesiredCapabilities("chrome");

		$this->_driver = new WebDriver($desiredCapabilities);
	}

	public function tearDown()
	{
		if($this->_driver != null) { $this->_driver->quit(); }
	}

	public function testCreateMenuItem()
	{
		//get url
		$this->_driver->get($this->_testUrl . '/administrator');
		$d = $this->_driver;

		$this->assertFalse((bool) $d->findElement(By::id('xxx'), true));
		$test = $d->findElement(By::id('xxx'), true);

		$d->findElement(By::id('mod-login-username-lbl'));
		$d->waitForElementUntilIsNotPresent(By::id('xxx'));


	}

	public function checkElementNotPresent(By $by, $polling = false)
	{
		try
		{
			$this->_driver->findElement($by, $polling);
		}
		catch (SeleniumClient\Http\SeleniumNoSuchElementException $ex)
		{
			return true;
		}
		return false;
	}
}