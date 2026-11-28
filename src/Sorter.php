<?php
namespace App;

class Sorter
{
    // create_function() was removed in PHP 8.0; a closure replaces it (no eval).
    public function byName(array $names)
    {
        $cmp = static function ($a, $b) {
            return strcmp($a, $b);
        };
        usort($names, $cmp);
        return $names;
    }
}
