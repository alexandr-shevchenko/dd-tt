<?php

declare(strict_types=1);

namespace App\Http\Processor;

use App\Order;

class SuccessOrderProcessor implements OrderProcessorInterface
{

    /**
     * @inheritDoc
     */
    public function process(Order $order): void
    {
        $order->save();
    }

    /**
     * @todo make status ENUM type
     * @param Order $order
     * @return bool
     */
    public function isSupportsOrder(Order $order): bool
    {
        return $order->status === 'success';
    }
}
