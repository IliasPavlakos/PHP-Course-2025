<?php

class StringUtils {

    public static function shout(string $string): string
    {
        return strtoupper($string) . '!';
    }

    public static function whisper(string $string): string
    {
        return strtolower($string) . '.';
    }

    public static function repeat(string $string, $times = 2): string
    {
        return str_repeat($string, $times);
    }
}


echo StringUtils::shout('hello');
echo '<br/>';
echo StringUtils::whisper('hello');
echo '<br/>';
echo StringUtils::repeat('hello');
echo '<br/>';