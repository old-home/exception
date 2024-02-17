<?php

/**
 * Copyright ©2024 Graywings. All rights reserved.
 *
 * PHP version >= 8.3.0
 *
 * @category Graywings\Exception\LogicException
 * @package  Graywings\Exception\LogicException
 * @author   Taira Terashima <taira.terashima@gmail.com>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     https://github.com/old-home/exception
 */

declare(strict_types=1);

namespace Graywings\Exception\LogicException;

use Graywings\Exception\Exception;

/**
 * Exception thrown if an argument is not of the expected type.
 *
 * @category Graywings\Exception\LogicException
 * @package  Graywings\Exception\LogicException
 * @author   Taira Terashima <taira.terashima@gmail.com>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     https://github.com/old-home/exception
 * @see      https://www.php.net/manual/en/class.invalidargumentexception.php
 */
class InvalidArgumentException extends \InvalidArgumentException implements Exception
{
}
