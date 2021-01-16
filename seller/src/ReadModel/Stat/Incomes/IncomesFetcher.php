<?php
declare(strict_types=1);

namespace App\ReadModel\Stat\Incomes;

use Doctrine\DBAL\Connection;
use Doctrine\DBAL\FetchMode;
use Doctrine\ORM\EntityManagerInterface;

class IncomesFetcher implements IncomesFetcherInterface
{
    private $connection;


    public function __construct(Connection $connection)
    {
        $this->connection = $connection;
    }

    public function getLastChangeDate(string $supplierId): \DateTimeImmutable
    {

    }
}