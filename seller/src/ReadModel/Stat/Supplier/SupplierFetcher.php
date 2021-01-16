<?php
declare(strict_types=1);

namespace App\ReadModel\Stat\Supplier;


use App\Model\Stat\Entity\Supplier\Supplier;
use App\ReadModel\Stat\Supplier\Filter\Filter;
use Doctrine\DBAL\Connection;
use Doctrine\DBAL\FetchMode;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\Pagination\PaginationInterface;
use Knp\Component\Pager\PaginatorInterface;

class SupplierFetcher
{
    private $connection;
    private $paginator;
    private $repository;

    public function __construct(Connection $connection, EntityManagerInterface $em, PaginatorInterface $paginator)
    {
        $this->connection = $connection;
        $this->repository = $em->getRepository(Supplier::class);
        $this->paginator = $paginator;
    }

    /**
     * @param string $id
     * @return Supplier|object|null
     */
    public function find(string $id)
    {
        return $this->repository->find($id);
    }

    /**
     * @param string $id
     * @return Supplier|object
     */
    public function get(string $id)
    {
        if (!$supplier = $this->repository->find($id)){
            throw new \DomainException('Supplier in not found.');
        }
        return $supplier;
    }

    public function exists(string $id): bool
    {
        return $this->connection->createQueryBuilder()
                ->select('COUNT (id)')
                ->from('wb_stat_suppliers')
                ->where('id = :id')
                ->setParameter(':id', $id)
                ->execute()->fetchOne() > 0;
    }

    public function all(Filter $filter, int $page, int $size, string $sort, string $direction): PaginationInterface
    {
        $qb = $this->connection->createQueryBuilder()
            ->select(
                's.id',
                's.name',
                's.create_at',
                's.status')
            ->from('wb_stat_suppliers', 's');

        if ($filter->name) {
            $qb->andWhere($qb->expr()->like('LOWER(s.name)', ':name'));
            $qb->setParameter(':name', '%' . mb_strtolower($filter->name) . '%');
        }

        if ($filter->status) {
            $qb->andWhere('s.status = :status');
            $qb->setParameter(':status', $filter->status);
        }

        if (!\in_array($sort, ['name', 'create_at', 'status'], true)) {
            throw new \UnexpectedValueException('Cannot sort by ' . $sort);
        }

        $qb->orderBy($sort, $direction === 'desc' ? 'desc' : 'asc');

        return $this->paginator->paginate($qb, $page, $size);
    }

    public function activeSupplierList(): array
    {
        $qb = $this->connection->createQueryBuilder()
            ->select('s.id','s.key_wildberries')
            ->from('wb_stat_suppliers', 's')
            ->andWhere('s.status = :status')
            ->setParameter(':status', Supplier::ACTIVE)
            ->execute();

        return $qb->fetchAllAssociative();
        //fetchAll(FetchMode::ASSOCIATIVE);
    }

}