<?php

// backward compatibility
if (!class_exists('\PHPUnit\Framework\TestCase')) {
    class_alias('\PHPUnit_Framework_TestCase', '\PHPUnit\Framework\TestCase');
}

class TestFiles extends \PHPUnit\Framework\TestCase {

    /*
     * Testing the translation files
     */

    public function testloadfiles(){
	$dir = glob("lang.*.php");
		foreach ($dir as $file) {
			var_dump($file);
			$this->filetest($file);
		}
    }
	
	public function filetest($file){
    include_once($file);
	$result = $lang['BEEIMG'];
        $this->assertEquals("BeeIMG", $result);
    }
}
