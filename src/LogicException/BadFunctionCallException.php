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
 * Exception thrown if a callback refers to an undefined function or if some arguments are missing.
 *
 * @category Graywings\Exception\LogicException
 * @package  Graywings\Exception\LogicException
 * @author   Taira Terashima <taira.terashima@gmail.com>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     https://github.com/old-home/exception
 * @see      https://www.php.net/manual/en/class.badfunctioncallexception.php
 */
class BadFunctionCallException extends \BadFunctionCallException implements Exception
{
}
