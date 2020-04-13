<?php

declare(strict_types=1);

namespace App\Http\Processor;

use App\Order;

interface OrderProcessorInterface
{
    /**
     * @param Order $order
     */
    public function process(Order $order): void;

    /**
     * @param Order $order
     *
     * @return bool
     */
    public function isSupportsOrder(Order $order): bool;
}
