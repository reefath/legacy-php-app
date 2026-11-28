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
    // key (null for an empty inventory, as the old false pair did).
    public function firstSku()
    {
        return array_key_first($this->items);
    }

    // count(null) throws TypeError in PHP 8.0 (it was a warning returning 0 in 7.x);
    // null is normalized explicitly to keep the 0 result.
    public function lineCount($lines)
    {
        return count($lines ?? []);
    }

    public function total()
    {
        return array_sum($this->items);
    }
}
