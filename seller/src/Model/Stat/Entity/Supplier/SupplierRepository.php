<?php
declare(strict_types=1);

namespace App\Model\Stat\Entity\Supplier;


use Doctrine\ORM\EntityManagerInterface;

class SupplierRepository
{
    private $em;
    private $repository;

    /**
     * SupplierRepository constructor.
     * @param $em
     */
    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
        $this->repository = $this->em->getRepository(Supplier::class);
    }

    public function get($id): Supplier
    {

    }

    public function add(Supplier $supplier): void
    {
        $this->em->persist($supplier);
    }

    public function remove(Supplier $supplier): void
    {
        $this->em->remove($supplier);
    }

}