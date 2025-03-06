<?php

namespace App\Livewire;

use App\Models\Ledger;
use Filament\Forms\Components\KeyValue;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Table;
use Livewire\Component;

class ListVotes extends Component implements HasForms, HasTable
{
    use InteractsWithTable;
    use InteractsWithForms;


    public function table(Table $table): Table
    {
        return $table
            ->query(Ledger::query()->whereNotNull(['candidate_id', 'voter_id', 'hash'])->with(['candidate', 'voter'])->latest())
            ->columns([
                TextColumn::make('candidate.party')->searchable()->label('Party'),
                TextColumn::make('candidate.name')->searchable()->label('Candidate'),
                TextColumn::make('voter.id')->searchable()->sortable(),
            ])
            ->actions([
                ViewAction::make()
                    ->label('View Vote')
                    ->modalHeading('View Vote')
                    ->form([
                        TextInput::make('id')
                            ->maxLength(255),
                        TextInput::make('previous_hash')
                            ->maxLength(255),
                        TextInput::make('nonce')
                            ->maxLength(255),
                        TextInput::make('hash')
                            ->maxLength(255),
                        KeyValue::make('data')
                        // ...
                    ]),

            ])
            ->heading('Latest Votes')->poll('3s');

    }

    public function render()
    {
        return view('livewire.list-votes');
    }
}
