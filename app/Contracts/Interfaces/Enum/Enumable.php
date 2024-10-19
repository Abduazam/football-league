<?php

namespace App\Contracts\Interfaces\Enum;

interface Enumable
{
    /**
     * Return all case values as an array.
     *
     * @return array
     */
    public static function arrayable(): array;
}
