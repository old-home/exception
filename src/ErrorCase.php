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

namespace Graywings\Exception;

/**
 * Enumerated error types. Multiple types can be specified by bitwise operation.
 *
 * @category Graywings\Exception
 * @package  Graywings\Exception
 * @author   Taira Terashima <taira.terashima@gmail.com>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     https://github.com/old-home/exception
 */
enum ErrorCase: int
{
    case ERROR = 1;
    case WARNING = 2;
    case PARSE = 4;
    case NOTICE = 8;
    case CORE_ERROR = 16;
    case CORE_WARNING = 32;
    case COMPILE_ERROR = 64;
    case COMPILE_WARNING = 128;
    case USER_ERROR = 256;
    case USER_WARNING = 512;
    case USER_NOTICE = 1024;
    case STRICT = 2048;
    case RECOVERABLE_ERROR = 4096;
    case DEPRECATED = 8192;
    case USER_DEPRECATED = 16384;

    public static function all(): int
    {
        $all = 0;
        foreach (self::cases() as $case) {
            $all += $case->value;
        }
        return $all;
    }
}
