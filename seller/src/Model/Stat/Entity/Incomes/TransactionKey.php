<?php
declare(strict_types=1);

namespace App\Model\Stat\Entity\Incomes;

use Ramsey\Uuid\Uuid;
use Webmozart\Assert\Assert;

class TransactionKey
{
    public const NAME = 'wb-incomes-';

    public function __construct(string $value)
    {
        Assert::notEmpty($value);
        $this->value = $value;
    }

    public static function next(): self
    {
        $id = Uuid::uuid4()->toString();
        return new self(self::NAME.$id);
    }

    public function isEqual(self $other): bool
    {
        return $this->getValue() === $other->getValue();
    }

    public function getValue(): string
    {
        return $this->value;
    }

    public function __toString(): string
    {
        return $this->value;
    }

}