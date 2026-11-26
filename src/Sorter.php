<?php
namespace App;

class Sorter
{
    // create_function() was removed in PHP 8.0; a closure is the replacement.
    public function byName(array $names)
    {
        $cmp = static fn($a, $b) => strcmp($a, $b);
        usort($names, $cmp);
        return $names;
    }
}
