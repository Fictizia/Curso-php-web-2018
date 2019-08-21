<?php
require_once ('autoload.php');
require_once ('./vendor/autoload.php');

use PHPUnit\Framework\TestCase;

final class UserTest extends TestCase
{
    public function testFistTest() 
    {
        $this->assertEquals(1,1);
    }
    public function testUserClassExist()
    {
        $class = new User();
        $this->assertInstanceOf(User::class,$class);
    }
    public function testPetClassExist()
    {
        $class = new Pet();
        $this->assertInstanceOf(Pet::class,$class);
    }
    public function testIfUserName() {
        $class = new User();
        $class->setName('pepito');
        $this->assertEquals($class->getName(),'pepito');
    }
}