<?php

declare(strict_types=1);

namespace App\Http\ResourceBuilder;

use App\Http\Model\OrderData;
use App\Order;

class OrderBuilder
{
    /**
     * @param OrderData $orderData
     * @return Order
     */
    public function build(OrderData $orderData): Order
    {
        //TODO: implement OrderRepository, OrderQueryHandler

        $order = Order::find($orderData->getOrderId());
        $order->status = $orderData->getStatus();
        $order->amount = $orderData->getAmount();

        return $order;
    }
}
