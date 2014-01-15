<?php

namespace ACDH\FcsXmlTemplates\Tests;

require __DIR__ . '/../../src/FCSTemplates.php';

use ACDH\FcsXmlTemplates\FCSTemplates as FCSTemplates;

/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.1 on 2014-01-14 at 16:19:26.
 */
class FCSTemplatesTest extends \PHPUnit_Framework_TestCase {

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {
        
    }

    /**
     * @covers ACDH\FcsXmlTemplates\FCSTemplates::getPath
     * @todo   Implement testGetPath().
     */
    public function testGetPath() {
         $this->assertFileExists(FCSTemplates::getPath(FCSTemplates::$explain));
    }

}
