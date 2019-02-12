<?php
/**
 * Created by PhpStorm.
 * User: MAlzate
 * Date: 2/12/2019
 * Time: 2:52 PM
 */
declare(strict_types=1);
final class Greeting
{
    private $greeting;

    private function __construct(string $greeting)
    {
        $this->greeting = $greeting;
    }

    public static function fromString(string $greeting): self
    {
        return new self($greeting);
    }

    public function __toString(): string
    {
        return $this->greeting;
    }
}
