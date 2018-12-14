<?php
    require_once ('./vendor/autoload.php');
    require_once ('./mode/User.php')

use PHPUnit\Framework\TestCase;

final class UserTest extends TestCase
{
    public function testFistTest() 
    {
        $this->assertEquals(1,1);
    }


}