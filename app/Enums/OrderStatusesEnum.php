<?php

namespace App\Enums;

enum OrderStatusesEnum: string
{
    case Pending = 'pending';
    case Processing = 'processing';
    case Shipped = 'draft';
    case Delivered = 'delivered';
    case Canceled = 'canceled';
    case Refunded = 'refunded';
    case OnHold = 'on_hold';

    public static function getAllValues(): array
    {
        return array_column(OrderStatusesEnum::cases(), 'value');
    }
}
