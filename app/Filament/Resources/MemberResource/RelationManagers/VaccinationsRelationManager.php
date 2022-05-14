<?php

namespace App\Filament\Resources\MemberResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\DatePicker;
use Filament\Resources\Form;
use Filament\Resources\RelationManagers\HasManyRelationManager;
use Filament\Resources\Table;
use Filament\Tables;

class VaccinationsRelationManager extends HasManyRelationManager
{
    protected static string $relationship = 'vaccinations';

    protected static ?string $recordTitleAttribute = 'member_id';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('dose')
                    ->label('เข็มที่')
                    ->options([1 => 1, 2 => 2, 3 => 3, 4 => 4]),
                Select::make('vaccine_name')
                    ->label('วัคซีนที่ได้รับ')
                    ->options([
                        'SV' => 'Sinovac',
                        'SP' => 'Sinopharm',
                        'AZ' => 'AstraZeneca',
                        'JJ' => 'Johnson & Johnson',
                        'PZ' => 'Pfizer',
                        'MD' => 'Moderna',
                    ]),
                DatePicker::make('vaccinated_date')
                    ->label('วันที่รับวัคซีน'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('dose')->sortable(),
                Tables\Columns\TextColumn::make('vaccine_name')
                    ->enum([
                        'SV' => 'Sinovac',
                        'SP' => 'Sinopharm',
                        'AZ' => 'AstraZeneca',
                        'JJ' => 'Johnson & Johnson',
                        'PZ' => 'Pfizer',
                        'MD' => 'Moderna',
                    ]),
                Tables\Columns\TextColumn::make('vaccinated_date')->dateTime('d/m/Y'),
            ])
            ->defaultSort('dose', 'asc')
            ->filters([
                //
            ]);
    }
}
