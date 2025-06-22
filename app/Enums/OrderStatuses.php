<?php

namespace App\Enums;

enum OrderStatuses: string
{
    case PENDING = 'pending'; // Новый заказ

    case PROCESSING = 'processing'; // Взят в работу

    case COMPLETED = 'completed'; // Собран
}