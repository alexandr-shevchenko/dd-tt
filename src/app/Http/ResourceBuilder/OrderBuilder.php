<?php

declare(strict_types=1);

namespace App\Http\ResourceBuilder;

use App\Http\Model\OrderData;
use App\Order;
use Ramsey\Uuid\Uuid;

class OrderBuilder
{
    /**
     * @param OrderData $orderData
     * @return Order
     */
    public function build(OrderData $orderData): Order
    {
        return new Order(
            $orderData->getAmount(),
            $orderData->getStatus(),
            Uuid::fromString($orderData->getOrderId())
        );
    }
}
