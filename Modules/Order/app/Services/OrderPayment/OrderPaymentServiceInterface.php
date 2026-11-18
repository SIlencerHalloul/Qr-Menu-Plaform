<?php

namespace Modules\Order\Services\OrderPayment;

use Throwable;

interface OrderPaymentServiceInterface
{
    /**
     * Get add payment meta
     */
    public function getPaymentMeta(int|string $id): array;

    /**
     * Add payment
     *
     * @throws Throwable
     */
    public function storePayment(string|int $id, array $data): void;
}
