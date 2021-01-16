<?php
declare(strict_types=1);

namespace App\Model\Stat\UseCase\Supplier\Create;


use App\Model\Stat\Entity\Supplier\Id;
use App\Model\Stat\Entity\Supplier\Supplier;
use App\Model\Stat\Entity\Supplier\SupplierRepository;
use App\ReadModel\Stat\Supplier\SupplierFetcher;

class Handler
{
    private SupplierRepository $repository;
    private SupplierFetcher $fetcher;
    /**
     * Handler constructor.
     * @param SupplierRepository $suppliers
     */
    public function __construct(SupplierRepository $suppliers, SupplierFetcher $fetcher)
    {
        $this->repository = $suppliers;
        $this->fetcher = $fetcher;
    }


    public function handle(Command $command): void
    {
        if ($this->fetcher->exists($command->id)){
            throw new \DomainException('Supplier already exist.');
        }

        $suppler = new Supplier(
            new Id($command->id),
            $command->name,
            new \DateTimeImmutable($command->createAt)
        );
        
        $this->repository->add($suppler);

    }

}