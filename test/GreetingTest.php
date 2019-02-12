<?php
/**
 * Created by PhpStorm.
 * User: MAlzate
 * Date: 2/12/2019
 * Time: 2:55 PM
 */
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class GreetingTest extends TestCase
{
    public function testGreetingIsHelloWorld(): void
    {
        $this->assertEquals(
            'Hello World',
            Greeting::fromString('Hello World')
        );
    }

    public function testGreetingIsNotHelloWorld(): void
    {
        $this->assertEquals(
            'HelloWorld',
            Greeting::fromString('Thanks')
        );
    }
}
