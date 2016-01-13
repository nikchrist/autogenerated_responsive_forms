<?php
require_once("PHPUnit/AutoLoad.php");
require_once("C:/xampp/htdocs/automated_forms/field_class.php");
require_once("testfunctions.php");

class testFieldClass extends PHPUnit_Framework_TestCase
{
	protected $test ;
	
	protected function setUp(){
		$this->test = new Field(["name"=>"christomanos"]);
	}
	
	public function testIfFieldClassParamIsAssocArray(){
		
		$this->assertTrue(is_assoc($this->test->params),
		"Got a ".gettype($this->test->params)."instead" );
	}
	
}
?>