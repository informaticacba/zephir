<?php

/**
 * This file is part of the Zephir.
 *
 * (c) Phalcon Team <team@zephir-lang.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Extension;

use PHPUnit\Framework\TestCase;
use Stub\ArrayManipulation;

final class ArrayManipulationTest extends TestCase
{
    public function testArrayFill(): void
    {
        $class = new ArrayManipulation();
        $array = $class->arrayFillMany();

        $this->assertIsArray($array);
        $this->assertCount(1000000, $array);
    }
}
