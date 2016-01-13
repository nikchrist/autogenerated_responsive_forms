<?php
require_once("PHPUnit/AutoLoad.php");
require_once("C:/xampp/htdocs/automated_forms/form_class.php");

class testFormClass extends PHPUnit_Framework_TestCase
{
	protected $test;
    protected function setUp(){
		$this->test = new Form('post','../.php/','form-1','form-inline');
	}
	
	
	public function testIfMethodExists(){
		$this->assertTrue(
		    method_exists($this->test,'__construct'),
			"Constructor does not exist");
	    $this->assertTrue(
		    method_exists($this->test,'OpenForm'),
			"OpenForm method does not exist");	
		$this->assertTrue(
		    method_exists($this->test,'CloseForm'),
			"CloseForm method does not exist");	
	}
	
	public function testIfNumberOfConstructorParametersIsCorrect(){
		$reflect = new ReflectionClass($this->test);
		$constructor = $reflect->getConstructor();
		$numberofparams = $constructor->getNumberOfRequiredParameters();
		$this->assertTrue($numberofparams == 4 ,
		"Number of parameters must be exactly 4");	    
	}
	
	
	public function testIfFormClassParamsAreStrings(){
		 
		  $this->assertTrue(
		     is_string($this->test->method),
			 "Got a ".gettype($this->test->method)."instead");
	      $this->assertTrue(
		     is_string($this->test->url),
			 "Got a ".gettype($this->test->method)."instead");
	      $this->assertTrue(
		     is_string($this->test->fname),
			 "Got a ".gettype($this->test->method)."instead");
	      $this->assertTrue(
		     is_string($this->test->formclass),
			 "Got a ".gettype($this->test->method)."instead");		 		 	 
	}
	
	
}


?>