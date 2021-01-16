<?php
declare(strict_types=1);

namespace App\Model\Stat\Entity\Incomes;


use Doctrine\ORM\EntityManagerInterface;

class IncomesRepository
{
    private $em;

    private $repo;

    /**
     * IncomesRepository constructor.
     * @param $em
     */
    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
        $this->repo = $em->getRepository(Incomes::class);
    }

    /**
     * @param string $id
     * @return Incomes|object
     */
    public function get(string $id): Incomes
    {
        if(!$incomes = $this->repo->find($id)){
            throw new \DomainException('Incomes is not found.');
        }

        return $incomes;
    }

    public function add(Incomes $incomes): void
    {
        $this->em->persist($incomes);
    }

    public function remove(Incomes $incomes): void
    {
        $this->em->remove($incomes);
    }


}