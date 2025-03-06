<?php

namespace App\Livewire;

use App\Models\Candidate;
use Filament\Widgets\ChartWidget;

class VoteBarChart extends ChartWidget
{
    protected static ?string $heading = 'Live Vote Tally';
    protected static ?string $pollingInterval = '3s';

    protected function getData(): array
    {
        $candidates = Candidate::withCount('ledgers')->get();
        return [
            'datasets' => [
                [
                    'label' => 'Votes Accumulated',
                    'data' => $candidates->pluck('ledgers_count')->toArray(),
                    'backgroundColor' => $candidates->pluck('color')->toArray(),
                    'borderColor' => $candidates->pluck('color')->toArray(),
                ],
            ],
            'labels' => $candidates->pluck('name')->toArray(),
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
