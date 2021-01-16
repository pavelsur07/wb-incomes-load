<?php
declare(strict_types=1);

namespace App\Model\Stat\Entity\Supplier;


use DateTimeImmutable;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="wb_stat_suppliers")
 */
class Supplier
{
    public const STATUS_NEW = 'new';
    public const ACTIVE ='active';
    public const ARCHIVED = 'archived';
    public const STATUS_BLOCKED = 'blocked';

    /**
     * @var string
     * @ORM\Column(type="wb_stat_supplier_id")
     * @ORM\Id
     */
    private $id;
    /**
     * @var string
     * @ORM\Column(type="string")
     */
    private $name;
    /**
     * @var string
     * @ORM\Column(type="string")
     */
    private $keyWildberries;
    /**
     * @var string
     * @ORM\Column(type="string")
     */
    private $createAt;
    /**
     * @var DateTimeImmutable
     * @ORM\Column(type="date_immutable")
     */
    private $updateAt;
    /**
     * @var string
     * @ORM\Column(type="string", length=16)
     */
    private $status;

    /**
     * Supplier constructor.
     * @param $id
     * @param $name
     * @param $createAt
     */
    public function __construct(Id $id,string $name,DateTimeImmutable $createAt)
    {
        $this->id = $id;
        $this->name = $name;
        $this->createAt = $createAt;
        $this->status =self::STATUS_NEW;
    }


}