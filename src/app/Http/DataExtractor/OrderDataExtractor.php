<?php

declare(strict_types=1);

namespace App\Http\DataExtractor;

use App\Http\Model\OrderData;

class OrderDataExtractor
{
    /**
     * @param string $data
     * @return OrderData
     */
    public function extract(string $data): OrderData
    {
        $callbackData = \json_decode($data, true, 512, \JSON_THROW_ON_ERROR);

        return new OrderData(
            $callbackData['order']['order_id'],
            (string) $callbackData['order']['amount'],
            $callbackData['transaction']['status'],
            $callbackData['error']['recommended_message_for_user'] ?? ''
        );
    }
}
