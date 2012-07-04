<?php

use SeleniumClient\By;
use SeleniumClient\WebDriver;
use SeleniumClient\WebElement;
require_once 'AutoLoader.php';

class WebElementTest extends PHPUnit_Framework_TestCase {

	private $_driver = null;
	private $_url = "http://localhost/joomla_development/nearsoft-fork/SeleniumClientTest/Sandbox/nested-elements.php";

	public function setUp()
	{

		$this->_driver = new WebDriver();
		$this->_driver->get($this->_url);
	}

	public function tearDown()
	{
		if($this->_driver != null)
		$this->_driver->quit();
	}

	public function testTextShouldGetText()
	{
		$label = $this->_driver->findElement(By::xPath("//h1"));
		$this->assertEquals("Nested Anchor Elements Test Page", $label->getText());

		$firstAnchor = $this->_driver->findElement(By::xPath("//a"));
		$this->assertEquals("Site", $firstAnchor->getText());

// 		$firstAnchor = $this->_driver->findElement(By::partialLinkText('Control Panel'));
// 		$this->assertEquals("Control Panel", $firstAnchor->getText());

		$allAnchors = $this->_driver->findElements(By::tagName('a'));
		foreach ($allAnchors as $anchor) {
			echo "text = " . $anchor->getText() . "\n";
		}

		$menuList = $this->_driver->findElement(By::id("menu"));
		$menuElements = $menuList->findElements(By::tagName('a'));
		foreach ($menuElements as $menuElement) {
			echo "text = " . $menuElement->getText() . "\n";
		}


	}


}