<?php

class MathUtils
{

    public static $pi = 3.14;

    public static function add(...$nums)
    {
        return array_sum($nums);
    }
}

echo MathUtils::$pi;

echo MathUtils::add(1,2,3,4,5);