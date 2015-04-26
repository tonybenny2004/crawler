<?php
namespace Crawler;
 
class CurlTest extends \PHPUnit_Framework_TestCase {

        public function testExtensionsLoaded()
            {
                 $this->assertTrue(extension_loaded('curl'));
            }

        public function testSetUrl()
    	   {
        		 $urlExpected = "http://php.net" ;
        		 $urlname = new \Crawler\Index();
        		 $this->assertEquals($urlExpected,$urlname->getUrl());
           }

        /* For running continuous integration tests */
        public function testRun()
            {
                $curl = new \Crawler\Index();
            }
            
}
