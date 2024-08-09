<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\User;

class UserTest extends TestCase
{
    public function testGetName()
    {
        $user = new User('Zé das batatas', 'zedasbatatas@gmail.com');
        $this->assertEquals('Zé das batatas', $user->getName());
    }

    public function testGetEmail()
    {
        $user = new User('Zé das batatas', 'zedasbatatas@gmail.com');
        $this->assertEquals('zedasbatatas@gmail.com', $user->getEmail());
    }

    public function testSetName()
    {
        $user = new User('Zé das batatas', 'zedasbatatas@gmail.com');
        $user->setName('Zé das batatas');
        $this->assertEquals('Zé das batatas', $user->getName());
    }

    public function testSetEmail()
    {
        $user = new User('Zé das batatas', 'zedasbatatas@gmail.com');
        $user->setEmail('zedasbatatas@gmail.com');
        $this->assertEquals('zedasbatatas@gmail.com', $user->getEmail());
    }
}
