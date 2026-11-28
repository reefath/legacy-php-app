<?php
namespace App;

class Matcher
{
    // Silent semantic change: in PHP 7.4, 0 == "abc" is true. In PHP 8.0 it is false.
    // No crash, no warning: only a test notices.
    // Migrated to PHP 8 semantics on purpose: a non-numeric string is NOT zero-like.
    // Do not restore the PHP 7 string-to-number juggling (authentication-bypass hazard).
    public function isZeroLike($value)
    {
        return $value == 0;
    }
}
