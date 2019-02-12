<?php

declare(strict_types=1);

namespace Whacking1234\functions;

/**
 * @param string $first
 * @param string $second
 * @return string
 */
function sum(string $first, string $second): string
{
    $result = '';
    $firstPos = \strlen($first) - 1;
    $secondPos = \strlen($second) - 1;
    $maxPos = \max($firstPos, $secondPos);
    $memoryVal = 0;

    for ($currentPos = $maxPos; $currentPos > -1; $currentPos--, $firstPos--, $secondPos--) {
        $firstVal = ($firstPos > -1) ? (int)$first{$firstPos} : 0;
        $secondVal = ($secondPos > -1) ? (int)$second{$secondPos} : 0;
        $resultVal = $firstVal + $secondVal + $memoryVal;
        $memoryVal = \floor($resultVal / 10);
        $resultVal -= $memoryVal * 10;
        $result = $resultVal . $result;
    }

    if ($memoryVal > 0) {
        $result = $memoryVal . $result;
    }

    return \ltrim($result, '0');
}