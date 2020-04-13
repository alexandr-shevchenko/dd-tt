<?php

declare(strict_types=1);

namespace App;

use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\UuidInterface;

class Order extends Model
{
    protected $fillable = ['id', 'created_at', 'updated_at', 'status', 'amount'];

    /**
     * @var UuidInterface
     */
    private $id;

    /**
     * @var string
     */
    private $status;

    /**
     * @var string
     */
    private $amount;

    /**
     * Order constructor.
     * @param string $amount
     * @param string $status
     * @param UuidInterface $id
     * @param array $attributes
     */
    public function __construct(string $amount, string $status, UuidInterface $id, array $attributes = [])
    {
        parent::__construct($attributes);

        $this->setId($id);
        $this->setStatus($status);
        $this->setAmount($amount);
    }

    /**
     * @return UuidInterface
     */
    public function getId(): UuidInterface
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @return string
     */
    public function getAmount(): string
    {
        return $this->amount;
    }

    /**
     * @param UuidInterface $id
     * @return Order
     */
    public function setId(UuidInterface $id): Order
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @param string $status
     * @return Order
     */
    public function setStatus(string $status): Order
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @param string $amount
     * @return Order
     */
    public function setAmount(string $amount): Order
    {
        $this->amount = $amount;

        return $this;
    }
}
