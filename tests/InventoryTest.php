<?php
use App\Inventory;
use PHPUnit\Framework\TestCase;

class InventoryTest extends TestCase
{
    public function testFirstSkuAndTotal()
    {
        $inv = new Inventory();
        $inv->add('A-1', 2);
        $inv->add('B-2', 3);
        $this->assertSame('A-1', $inv->firstSku());
        $this->assertSame(5, $inv->total());
    }

    public function testLineCountOfNothingIsZero()
    {
        // 7.4: count(null) returned 0 with a warning. 8.x: TypeError, so
        // Inventory::lineCount() normalizes null and no suppression is needed.
        $this->assertSame(0, (new Inventory())->lineCount(null));
    }

    public function testFirstSkuOfEmptyInventoryIsNull()
    {
        $this->assertNull((new Inventory())->firstSku());
    }
}
