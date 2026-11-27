<?php
namespace App;

class Matcher
{
    // Silent semantic change: in PHP 7.4, 0 == "abc" is true. In PHP 8.0 it is false.
    // No crash, no warning: only a test notices. The PHP 8 result is intended;
    // the pre-PHP-8 type juggling is deliberately not re-implemented.
    public function isZeroLike($value)
    {
        return $value == 0;
    }
}
