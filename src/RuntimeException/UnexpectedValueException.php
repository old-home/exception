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
 * Exception thrown if a value does not match with a set of values.
 * Typically, this happens when a function calls another function and
 * expects the return value to be of a certain type or value not including arithmetic or buffer related errors.
 *
 * @category Graywings\Exception\RuntimeException
 * @package  Graywings\Exception\RuntimeException
 * @author   Taira Terashima <taira.terashima@gmail.com>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     https://github.com/old-home/exception
 * @see      https://www.php.net/manual/en/class.unexpectedvalueexception.php
 */
class UnexpectedValueException extends \UnexpectedValueException implements Exception
{
}
