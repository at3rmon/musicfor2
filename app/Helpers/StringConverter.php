<?php

namespace App\Helpers;

class StringConverter
{
    /**
     * Converts "σ" to "ς" at the end of each word
     * Removes extra white spaces between them
     *
     * @param  string  $string
     * @return string
     */
    public static function setup(string $string): string
    {
        $string = preg_replace('/σ$/', 'ς', $string);
        $string = preg_replace('/σ /', 'ς ', $string);
        $string = preg_replace('/\s\s+/', ' ', $string);

        return $string;
    }
}
