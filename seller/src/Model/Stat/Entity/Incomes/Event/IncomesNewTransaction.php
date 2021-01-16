<?php
declare(strict_types=1);

namespace App\Model\Stat\Entity\Incomes\Event;


class IncomesNewTransaction
{
    public $transactionKey;
    public $createAt;

    /**
     * IncomesNewDoc constructor.
     * @param $transactionKey
     */
    public function __construct(string $transactionKey,\DateTime $dateTime)
    {
        $this->transactionKey = $transactionKey;
        $this->createAt = $dateTime;
    }

}