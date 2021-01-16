<?php


namespace App\Tests\Unit\Model\Stat\Service;


use App\Model\Stat\Service\Stats\StatUriGenerator;
use PHPUnit\Framework\TestCase;

class GenerateUriTest extends TestCase
{

    public function testSuccess(StatUriGenerator $generator): void
    {
        $now = new \DateTimeImmutable();
        $nowStr = $now->format(\DateTime::RFC3339);
        $testUrl = 'https://suppliers-stats.wildberries.ru/api/v1/supplier/incomes?dateFrom='. $nowStr.
        '&key=W00000000000W';

        $url = $generator->generate(
            'W00000000000W',
            $now,
            StatUriGenerator::INCOMES
        );

        self::assertEquals($testUrl, $url);
    }

}