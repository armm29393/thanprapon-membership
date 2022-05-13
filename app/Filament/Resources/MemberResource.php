<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MemberResource\Pages;
use App\Filament\Resources\MemberResource\RelationManagers;
use App\Models\Member;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class MemberResource extends Resource
{
    protected static ?string $model = Member::class;

    protected static ?string $navigationIcon = 'heroicon-s-user-group';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('title')
                    ->label('คำนำหน้า')
                    ->options([
                        'mr' => 'นาย',
                        'mrs' => 'นาง',
                        'miss' => 'นางสาว',
                        'boy' => 'เด็กชาย',
                        'girl' => 'เด็กหญิง',
                    ])
                    ->required(),
                Forms\Components\TextInput::make('first_name')
                    ->label('ชื่อ')
                    ->required(),
                Forms\Components\TextInput::make('last_name')
                    ->label('นามสกุล')
                    ->required(),
                Forms\Components\TextInput::make('nickname')
                    ->label('ชื่อเล่น')
                    ->required(),
                Forms\Components\DatePicker::make('birth_date')
                    ->required(),
                Forms\Components\Textarea::make('address')
                    ->required(),
                Forms\Components\TextInput::make('tel')
                    ->label('เบอร์โทร')
                    ->tel(),
                Forms\Components\TextInput::make('email')
                    ->label('อีเมล')
                    ->email(),
                Forms\Components\TextInput::make('line_id')
                    ->label('Line ID'),
                Forms\Components\DatePicker::make('wedding_date')
                    ->label('วันแต่งงาน'),
                Forms\Components\TextInput::make('baptism_place')
                    ->label('รับบัพติศมาที่'),
                Forms\Components\DatePicker::make('baptism_date')
                    ->label('วันที่รับบัพติศมา'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('first_name'),
                Tables\Columns\TextColumn::make('last_name'),
                Tables\Columns\TextColumn::make('nickname'),
                Tables\Columns\TextColumn::make('email'),
            ])
            ->filters([
                //
            ]);
    }
    
    public static function getRelations(): array
    {
        return [
            // RelationManagers\VaccinationsRelationManager::class,
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMembers::route('/'),
            'create' => Pages\CreateMember::route('/create'),
            'edit' => Pages\EditMember::route('/{record}/edit'),
        ];
    }
}
