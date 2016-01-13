<?php
require_once("PHPUnit/AutoLoad.php");
require_once("C:/xampp/htdocs/automated_forms/factories.php");
require_once("testfunctions.php");

class testCreateObject extends  PHPUnit_Framework_TestCase
{
	
	public function testFormObjectMethodExists(){
        $this->assertTrue(
            method_exists("CreateObject","FormObject"),
			"FormObject Method does not exist");	
	}
	
	public function testFieldObjectMethodExists(){
		$this->assertTrue(
            method_exists("CreateObject","FieldObject"),
			"FieldObject Method does not exist");
	}
	
	public function testIfFormObjectParamsAreStrings(){
		$method = "post";
		$url = "../.php";
		$fname="form-1";
		$formclass="form-inline";
		$this ->assertTrue(
		   is_string($method),"Got a ".gettype($method)."instead");
		$this->assertTrue(
		   is_string($url),"Got a ".gettype($url)."instead");
		$this->assertTrue(
		   is_string($fname),"Got a ".gettype($fname)."instead");
		$this->assertTrue(
		   is_string($formclass),"Got a ".gettype($formclass)."instead");	   
	}
	
	public function testIfFieldObjectParamIsAssociativeArray(){
		$params=array("lname"=>"christ","fname"=>"nikos");
		
		
	  $this->assertTrue(
	      is_assoc($params),"Got a".gettype($params)."instead"
		  );	 
		 
	}	
}
?>
