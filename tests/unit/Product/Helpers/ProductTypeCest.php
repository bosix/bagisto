<?php

namespace Tests\Unit\Product\Helpers;

use UnitTester;
use Webkul\Product\Helpers\ProductType;

class ProductTypeCest
{
    public function testHasVariants(UnitTester $I)
    {
$I->assertTrue(false);
        $I->assertTrue(ProductType::hasVariants('configurable'));
        $I->assertFalse(ProductType::hasVariants('simple'));
    }
}
