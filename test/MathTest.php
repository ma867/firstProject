<?php
/**
 * Created by PhpStorm.
 * User: julia
 * Date: 2/11/2019
 * Time: 2:52 PM
 */
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class MathTest extends TestCase
{
    public function testTenIsTen(): void
    {
        $this->assertEquals(10, Math::EqualsTen(10));
    }
    public function testTenIsNotTen(): void
    {
        $this->assertEquals(10, Math::EqualsTen(11));
    }


}
