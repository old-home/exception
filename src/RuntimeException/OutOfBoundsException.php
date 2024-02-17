<?php

/**
 * Copyright ©2024 Graywings. All rights reserved.
 *
 * PHP version >= 8.3.0
 *
 * @category Graywings\Exception\RuntimeException
 * @package  Graywings\Exception\RuntimeException
 * @author   Taira Terashima <taira.terashima@gmail.com>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     https://github.com/old-home/exception
 */

declare(strict_types=1);

namespace Graywings\Exception\RuntimeException;

use Graywings\Exception\Exception;

/**
 * Exception thrown if a value is not a valid key.
 * This represents errors that cannot be detected at compile time.
 *
 * @category Graywings\Exception\RuntimeException
 * @package  Graywings\Exception\RuntimeException
 * @author   Taira Terashima <taira.terashima@gmail.com>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     https://github.com/old-home/exception
 * @see      https://www.php.net/manual/en/class.outofboundsexception.php
 */
class OutOfBoundsException extends \OutOfBoundsException implements Exception
{
}
