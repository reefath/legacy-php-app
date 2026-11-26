<?php
namespace App;

class Initials
{
    // Curly-brace string offsets were removed in PHP 8.0 (parse error); bracket offset used.
    public function first($text)
    {
        return $text[0];
    }
}
