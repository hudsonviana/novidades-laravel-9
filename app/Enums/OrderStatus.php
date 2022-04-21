<?php

namespace App\Enums;

enum OrderStatus: string {
    case WAITING = 'waiting';
    case IN_COOKING = 'in_cooking';
    case IN_DELIVERY = 'in_delivery';
}
