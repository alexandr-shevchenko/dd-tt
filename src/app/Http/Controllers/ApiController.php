<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\DataExtractor\OrderDataExtractor;
use App\Http\Processor\OrderProcessorChain;
use App\Http\ResourceBuilder\OrderBuilder;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    /**
     * @var OrderDataExtractor
     */
    private $orderDataExtractor;

    /**
     * @var OrderBuilder
     */
    private $orderBuilder;

    /**
     * @var OrderProcessorChain
     */
    private $orderProcessorChain;

    /**
     * ApiController constructor.
     * @param OrderDataExtractor $orderDataExtractor
     * @param OrderBuilder $orderBuilder
     * @param OrderProcessorChain $orderProcessorChain
     */
    public function __construct(
        OrderDataExtractor $orderDataExtractor,
        OrderBuilder $orderBuilder,
        OrderProcessorChain $orderProcessorChain
    ) {
        $this->orderDataExtractor = $orderDataExtractor;
        $this->orderBuilder = $orderBuilder;
        $this->orderProcessorChain = $orderProcessorChain;
    }

    /**
     * @param Request $request
     */
    public function callback(Request $request): void
    {
        $orderData = $this->orderDataExtractor->extract($request->getContent());

        $order = $this->orderBuilder->build($orderData);

        $this->orderProcessorChain->process($order);
    }
}
