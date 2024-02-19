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

use Graywings\Exception\ErrorException;
use PHPUnit\Framework\Attributes\CoversFunction;
use function Graywings\Exception\initErrorHandler;
use PHPUnit\Framework\TestCase;

/**
 * functionsTest
 *
 * @category Graywings\Exception\Tests\Unit
 * @package  Graywings\Exception\Tests\Unit
 * @author   Taira Terashima <taira.terashima@gmail.com>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     https://github.com/old-home/exception
 */
#[CoversFunction('Graywings\Exception\initErrorHandler')]
class FunctionsTest extends TestCase
{
    public function setUp(): void
    {
        initErrorHandler();
    }

    public function tearDown(): void
    {
        restore_error_handler();
    }

    public function testInitErrorHandler(): void
    {
        $this->expectException(ErrorException::class);
        $array = [];
        $array[0];
    }
}
