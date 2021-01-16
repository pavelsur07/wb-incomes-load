<?php


namespace App\ReadModel\Stat\Incomes;


interface IncomesFetcherInterface
{
    public function getLastChangeDate(string $supplierId): \DateTimeImmutable;

}