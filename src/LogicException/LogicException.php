<?php

/**
 * Copyright ©2024 Graywings. All rights reserved.
 *
 * PHP version >= 8.3.0
 *
 * @category Graywings\Exception
 * @package  Graywings\Exception
 * @author   Taira Terashima <taira.terashima@gmail.com>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     https://github.com/old-home/exception
 */

declare(strict_types=1);

namespace Graywings\Exception\LogicException;

use Graywings\Exception\Exception;

/**
 * Exception that represents error in the program logic.
 * This kind of exception should lead directly to a fix in your code.
 *
 * @category Graywings\Exception
 * @package  Graywings\Exception
 * @author   Taira Terashima <taira.terashima@gmail.com>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     https://github.com/old-home/exception
 * @see      https://www.php.net/manual/en/class.logicexception.php
 */
class LogicException extends \LogicException implements Exception
{
}
