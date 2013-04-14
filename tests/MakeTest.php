<?php
namespace tests;

use src\PharCompiler\Console;

/**
 * MakeTest class extending PHPUnit_Framework_TestCase
 *
 * @package
 *
 * @author Jeremy Mills
 * @author Insu Mun
 * @author Carlie Hiel
 *
 * @copyright 2013
 * @version PHP 5.3
 */
class MakeTest extends \PHPUnit_Framework_TestCase
{
    /**
     * testInit tests __construct() of Make class
     *
     * @access public
     */
    public function testInit() {
        
    }
    
    /**
     * testConfigure tests configure() of Make class
     *
     * @access public
     */
    public function testConfigure() {
        $test = new \src\PharCompiler\Console\Make();
        
        //$name->configure()->setName('Name');
        
        $this->assertEquals('Name', $test->configure()->setName('Name'));
        $this->assertEquals('Description', $test->configure()->setDescription('Description'));
        
    }
    
    /**
     * testExecute tests execute() of Make class
     *
     * @access public
     */
    public function testExecute() {
        
    }
    
    /**
     * testCompress tests compress() of Make class
     *
     * @access public
     */
    public function testCompress() {
        
    }
    
    /**
     * testIsPharWritiable tests is_phar_writable() of Make class
     *
     * @access public
     */
    public function testIsPharWritable() {
        
    }
    
    /**
     * testGetVar tests get_var() of Make class
     *
     * @access public
     */
    public function testGetVar() {
        
    }
    
    /**
     * testMakeAbsolute tests makeAbsolute() of Make class
     *
     * @access public
     */
    public function testMakeAbsolute() {
        
    }
    
    /**
     * testExecCommand tests execCommand() of Make class
     *
     * @access public
     */
    public function testExecCommand() {
        
    }
    
    /**
     * testGetOption tests get_option() of Make class
     *
     * @access public
     */
    public function testGetOption() {
        
    }
    
    /**
     * testGetLastOption tests get_last_option() of Make class
     *
     * @access public
     */
    public function testGetLastOption() {
        
    }
    
    /**
     * testRequestOption tests request_option() of Make class
     *
     * @access public
     */
    public function testRequestOption() {
        
    }
    
    /**
     * testError tests error() of Make class
     *
     * @access public
     */
    public function testError() {
        
    }
    
    /**
     * testSuccess tests success() of Make class
     *
     * @access public
     */
    public function testSuccess() {
        
    }
    
    /**
     * testScandir tests _scandir() of Make class
     *
     * @access public
     */
    public function testScandir() {
        
    }
}