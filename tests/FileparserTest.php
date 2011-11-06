<?php
require dirname(__FILE__) . '/../Fileparser.php';

class FileparserTest extends PHPUnit_Framework_TestCase {
    private $fileparserObj;
    
    public function setUp() {
        $this->fileparserObj = new Fileparser;
    }
}
?>