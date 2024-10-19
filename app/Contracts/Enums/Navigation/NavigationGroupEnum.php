<?php

namespace App\Contracts\Enums\Navigation;

use App\Contracts\Interfaces\Enum\Enumable;

enum NavigationGroupEnum : string implements Enumable
{
    case MANAGEMENT = 'Management';
    case INFORMATION = 'Information';

    public static function arrayable(): array
    {
        return array_map(fn ($case) => $case->value, self::cases());
    }
}
