<?php

namespace App\Enums;

enum TableStatus: string
{
    case NaČekanju = 'pending';
    case Slobodan = 'available';
    case Zauzet = 'unavailable';
}
