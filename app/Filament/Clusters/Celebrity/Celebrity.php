<?php

namespace App\Filament\Clusters\Celebrity;

use BackedEnum;
use Filament\Clusters\Cluster;
use Filament\Support\Icons\Heroicon;

class Celebrity extends Cluster
{
    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedStar;

    protected static ?string $navigationLabel = 'Celebrity';

    protected static ?int $navigationSort = 9;
}
