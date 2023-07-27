<?php

namespace App\Enums;

enum WaveType: string
{
    case Natural = 'natural';
    case HalfNatural = 'half_natural';
    case Artificial = 'artificial';

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
