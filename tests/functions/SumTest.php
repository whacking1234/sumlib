<?php

declare(strict_types=1);

namespace Tests\functions;

use PHPUnit\Framework\TestCase;
use function Whacking1234\functions\sum;

class SumTest extends TestCase
{
    /**
     * @dataProvider testSumProvider
     * @param $first
     * @param $second
     * @param $expectedResult
     */
    public function testSum($first, $second, $expectedResult): void
    {
        $actualResult = sum($first, $second);

        $this->assertEquals($expectedResult, $actualResult);
    }

    /**
     * @return iterable
     */
    public function testSumProvider(): iterable
    {
        for ($i = 0; $i < 1000; $i++) {
            $first = $this->generateRandomLargeNumber();
            $second = $this->generateRandomLargeNumber();
            $expectedResult = \bcadd($first, $second);

            yield [$first, $second, $expectedResult];
        }
    }

    /**
     * @return string
     */
    private function generateRandomLargeNumber(): string
    {
        $result = '';

        for ($i = 0, $l = \mt_rand(64, 128); $i < $l; $i++) {
            $result .= \mt_rand(0, 9);
        }

        return $result;
    }
}
