<?php


namespace App\Model\Stat\Entity\Incomes;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use Doctrine\DBAL\Types\GuidType;

class TransactionKeyType extends GuidType
{
    public const NAME = 'wb_stat_incomes_transaction_key';

    public function convertToDatabaseValue($value, AbstractPlatform $platform)
    {
        return $value instanceof TransactionKey ? $value->getValue() : $value;
    }

    public function convertToPHPValue($value, AbstractPlatform $platform)
    {
        return !empty($value) ? new TransactionKey($value) : null;
    }

    public function getName(): string
    {
        return self::NAME;
    }

    public function requiresSQLCommentHint(AbstractPlatform $platform) : bool
    {
        return true;
    }

}