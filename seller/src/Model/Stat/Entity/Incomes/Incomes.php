<?php
declare(strict_types=1);

namespace App\Model\Stat\Entity\Incomes;


use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table(name="wb_stat_incomes")
 *
 */
class Incomes
{
    public const STATUS_NEW ='new';
    public const STATUS_CONFIRM = 'confirm';
    /**
     * @var string
     * @ORM\Column(type="guid")
     * @ORM\Id
     */
    private ORM\Id $id;
    /**
     * @var TransactionKey
     * @ORM\Column(type="wb_stat_incomes_transaction_key", name="transaction_key")
     */
    private TransactionKey $transactionKey;
    /**
     * @var string
     * @ORM\Column(type="guid", name="supplier_id")
     */
    private $supplierId;
    /**
     * @var integer
     * @ORM\Column(type="integer", name="income_id")
     */
    private $incomeId;
    /**
     * @var int
     * @ORM\Column(type="integer", )
     */
    private $number;
    /**
     * @var \DateTimeImmutable
     * @ORM\Column(type="datetime_immutable")
     */
    private $date;
    /**
     * @var \DateTimeImmutable
     * @ORM\Column(type="datetime_immutable", name="last_change_date")
     */
    private $lastChangeDate;
    /**
     * @var string
     * @ORM\Column(type="string", name="supplier_article")
     */
    private $supplierArticle;
    /**
     * @var string
     * @ORM\Column(type="string", name="tech_size")
     */
    private $techSize;
    /**
     * @var string
     * @ORM\Column(type="string", name="barcode")
     */
    private $barcode;
    /**
     * @var int
     * @ORM\Column(type="integer", name="quantity")
     */
    private $quantity;
    /**
     * @var int
     * @ORM\Column(type="integer",name="total_price" )
     */
    private $totalPrice;
    /**
     * @var \DateTimeImmutable
     * @ORM\Column(type="datetime_immutable", name="date_close")
     */
    private $dateClose;
    /**
     * @var string
     * @ORM\Column(type="string", name="ware_house_name")
     */
    private $wareHouseName;
    /**
     * @var int
     * @ORM\Column(type="integer",name="nm_id" )
     */
    private $nmId;
    /**
     * @var string
     * @ORM\Column(type="string", name="status")
     */
    private $status;
    /**
     * @var \DateTimeImmutable
     * @ORM\Column(type="datetime_immutable", name="create_at")
     */
    private $createAt;
    /**
     * @var string
     * @ORM\Column(type="string", name="status_in_system")
     */
    private $statusInSystem;


    public function getId(): string
    {
        return $this->id;
    }


}