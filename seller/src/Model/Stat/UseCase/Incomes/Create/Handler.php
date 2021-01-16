<?php
declare(strict_types=1);

namespace App\Model\Stat\UseCase\Incomes\Create;


use App\Model\Flusher;
use App\Model\Stat\Entity\Incomes\Incomes;
use App\Model\Stat\Entity\Incomes\IncomesRepository;
use App\Model\Stat\Entity\Incomes\TransactionKey;

class Handler
{
    private $flusher;
    private $repository;
    private $transaction;

    /**
     * Handler constructor.
     * @param $flusher
     */
    public function __construct(Flusher $flusher, IncomesRepository $repository, TransactionKey $key)
    {
        $this->flusher = $flusher;
        $this->repository = $repository;
        $this->transaction = $key;
    }

    public function handle(array $data): void
    {
        foreach ($data as $item){

            //TODO все записи с одинаковыми incomesId должны иметь один TransactionKey

        }

        // Сохраняем пачкой
        $this->flusher->flush();

    }

}