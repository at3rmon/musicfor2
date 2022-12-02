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
        /**
         * Replace 'σ' as the last character
         */
        $string = preg_replace('/σ$/', 'ς', $string);

        /**
         * Replace 'σ' as a character before white space
         */
        $string = preg_replace('/σ /', 'ς ', $string);

        /**
         * Trims extra white spaces
         */
        return preg_replace('/\s\s+/', ' ', $string);
    }
}
