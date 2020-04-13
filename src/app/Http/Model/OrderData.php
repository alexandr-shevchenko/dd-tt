<?php

declare(strict_types=1);

namespace App\Http\Model;

class OrderData
{
    /**
     * @var string
     */
    private $orderId;

    /**
     * @var string
     */
    private $amount;

    /**
     * @var string
     */
    private $status;

    /**
     * @var string
     */
    private $message;

    /**
     * OrderData constructor.
     * @param string $orderId
     * @param string $amount
     * @param string $status
     * @param string $message
     */
    public function __construct(
        string $orderId,
        string $amount,
        string $status,
        string $message
    )
    {
        $this->orderId = $orderId;
        $this->amount = $amount;
        $this->status = $status;
        $this->message = $message;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
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
     * @return string
     */
    public function getOrderId(): string
    {
        return $this->orderId;
    }
}
