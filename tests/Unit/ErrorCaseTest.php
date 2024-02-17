<?php

/**
 * Copyright ©2024 Graywings. All rights reserved.
 *
 * PHP version >= 8.3.0
 *
 * @category Graywings\Exception\Tests\Unit
 * @package  Graywings\Exception\Tests\Unit
 * @author   ${USER_NAME} <${EMAIL}>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     https://github.com/old-home/exception
 */

declare(strict_types=1);

namespace Graywings\Exception\Tests\Unit;

use Graywings\Exception\ErrorCase;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

/**
 * ErrorCase test
 *
 * @category Graywings\Exception\Tests\Unit
 * @package  Graywings\Exception\Tests\Unit
 * @author   ${USER_NAME} <${EMAIL}>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     https://github.com/old-home/exception
 */
#[CoversClass(ErrorCase::class)]
class ErrorCaseTest extends TestCase
{
    public function testAll()
    {
        self::assertSame(E_ALL, ErrorCase::all());
    }
}
