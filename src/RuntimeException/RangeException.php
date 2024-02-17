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
 * Exception thrown to indicate range errors during program execution.
 * Normally this means there was an arithmetic error other than under/overflow.
 * This is the runtime version of DomainException.
 *
 * @category Graywings\Exception\RuntimeException
 * @package  Graywings\Exception\RuntimeException
 * @author   Taira Terashima <taira.terashima@gmail.com>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     https://github.com/old-home/exception
 * @see      https://www.php.net/manual/en/class.rangeexception.php
 */
class RangeException extends \RangeException implements Exception
{
}
