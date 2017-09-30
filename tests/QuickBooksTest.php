<?php 

/**
*  Corresponding Class to test QuickBooks class
*
*  For each class in your library, there should be a corresponding Unit-Test for it
*  Unit-Tests should be as much as possible independent from other test going on.
*
*  @author Erik Lee Olson
*/
class QuickBooksTest extends PHPUnit_Framework_TestCase{
	
  /**
  * Just check if the YourClass has no syntax error 
  *
  * This is just a simple check to make sure your library has no syntax error. This helps you troubleshoot
  * any typo before you even use this library in a real project.
  *
  */
  public function testIsThereAnySyntaxError(){
	$var = new ErikLeeOlson\QuickBooks\QuickBooks;
	echo "\ntest1\n";
	$this->assertTrue(is_object($var));
	unset($var);
  }
  
  /**
  * Just check if the QuickBooks has no syntax error 
  *
  * This is just a simple check to make sure your library has no syntax error. This helps you troubleshoot
  * any typo before you even use this library in a real project.
  *
  */
  public function testMethod1(){
	$var = new ErikLeeOlson\QuickBooks\QuickBooks;
	echo "\ntest2\n";
	$this->assertTrue($var->method1("hey") == 'Hello World');
	unset($var);
  }

  public function testInit(){
  	echo "\ntest3\n";
	$var = new ErikLeeOlson\QuickBooks\QuickBooks;

	$init = $var->init();
	if ($init != false) {
		echo "\n$init\n";
		}
	$this->assertTrue($init != false);

	unset($var);
  }


  
}