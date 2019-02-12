<?php
/**
 * Created by PhpStorm.
 * User: MAlzate
 * Date: 2/12/2019
 * Time: 1:05 PM
 */
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class tenTest extends TestCase
{
    public function testStringEqualsString() : void
    {
        $this->assertEquals('Hello World', ten::SayHelloWorld('Hello World'));
    }
    public function testStringNotEqualsString() : void
    {
        $this->assertEquals('Hello', ten::SayHelloWorld('Hello'));
    }

}





