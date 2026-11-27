<?php
namespace App;

class Initials
{
    // Bracket string offset (curly-brace offsets were removed in PHP 8.0).
    public function first($text)
    {
        return $text[0];
    }
}
