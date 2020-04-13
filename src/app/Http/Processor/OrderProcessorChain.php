<?php

declare(strict_types=1);

namespace App\Http\Processor;

use App\Order;

class OrderProcessorChain
{
    /**
     * @var OrderProcessorInterface[]
     */
    private $processors = [];

    public function __construct()
    {
        $this->processors = [
            new DeclinedOrderProcessor(),
            new SuccessOrderProcessor()
        ];
    }

    public function process(Order $order): void
    {
        foreach ($this->processors as $orderProcessor) {
            if ($orderProcessor->isSupportsOrder($order)) {
                $orderProcessor->process($order);
            }
        }
    }
}
