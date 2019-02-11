<?php
/**
 * Created by PhpStorm.
 * User: julia
 * Date: 2/11/2019
 * Time: 2:52 PM
 */
declare (strict_types=1);

final class Math
{
    private $ten;

    private function __construct(int $ten)
    {
        $this->ten = $ten;
    }

    public static function EqualsTen(int $ten): self
    {
        return new self($ten);
    }


}
