<?php
namespace App;

/**
 * Legacy inventory. Contains constructs that are valid in PHP 7.4 and
 * fatal (or silently different) in PHP 8.x.
 */
class Inventory
{
    private $items = [];

    public function add($sku, $qty)
    {
        $this->items[$sku] = ($this->items[$sku] ?? 0) + $qty;
    }

    // each() was removed in PHP 8.0; array_key_first() returns the same first
    // key (or null for an empty inventory).
    public function firstSku()
    {
        return array_key_first($this->items);
    }

    // count(null) throws TypeError in PHP 8.0 (it was a warning in 7.x);
    // null is normalized explicitly so the documented 0 result is kept.
    public function lineCount($lines)
    {
        return count($lines ?? []);
    }

    public function total()
    {
        return array_sum($this->items);
    }
}
