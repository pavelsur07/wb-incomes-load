<?php
declare(strict_types=1);

namespace App\Model\Stat\Service\Stats;


use Webmozart\Assert\Assert;

class StatUriGenerator
{
    public const INCOMES = 'incomes';
    public const STOCKS = 'stocks';
    public const ORDERS = 'orders';
    public const SALES = 'sales';
    public const REPORT = 'reportDetailMart';
    private const URI = 'https://suppliers-stats.wildberries.ru/api/v1/supplier/';


    /**
     * @param string             $key
     * @param \DateTimeImmutable $date
     * @param                    $method
     * @return string
     */
    public function generate(
        string $key,
        \DateTimeImmutable $date,
        string $method
        ): string
    {
        Assert::oneOf($method,
            [
                self::INCOMES,
                self::STOCKS,
                self::ORDERS,
                self::SALES,
                self::REPORT
            ]
        );

        return $uri = self::URI.
            '?dateFrom='.$date->format(\DateTime::RFC3339).
            '&key='.$key;
    }

}