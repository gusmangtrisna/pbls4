<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TicketTransactionResource\Pages;

use App\Models\Ticket;
use App\Models\TicketTransactions;
use App\Models\User;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Illuminate\Support\Facades\Auth;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Grid;
class TicketTransactionResource extends Resource
{
    protected static ?string $model = TicketTransactions::class;
    protected static ?string $navigationIcon = 'heroicon-o-credit-card';
    protected static ?string $navigationGroup = 'URUSAN PENGUNJUNG';
    public static function form(Form $form): Form
{
    return $form
    ->schema([
        Hidden::make('user_id')
            ->default(Auth::id()),

        Hidden::make('Category')
            ->required(),

        Select::make('CategoryPengunjung')
            ->label('Kategori Pengunjung')
            ->options(
                Ticket::query()->pluck('CategoryPengunjung', 'CategoryPengunjung')->unique()
            )
            ->reactive()
            ->afterStateUpdated(function ($state, callable $set, callable $get) {
                $set('Category', $state);
                $dewasa = Ticket::where('CategoryPengunjung', $state)
                    ->whereRaw('LOWER(ticket_name) = ?', ['dewasa'])
                    ->first();
                $anak = Ticket::where('CategoryPengunjung', $state)
                    ->whereRaw('LOWER(ticket_name) = ?', ['anak-anak'])
                    ->first();
                $set('dewasa_price', $dewasa ? $dewasa->price : 0);
                $set('anak_price', $anak ? $anak->price : 0);
            }),
    Grid::make(2)
    ->schema([
        TextInput::make('total_dewasa')
            ->label('Jumlah Dewasa')
            ->numeric()
            ->default(0)
            ->required()
            ->reactive()
            ->afterStateUpdated(function ($state, callable $set, callable $get) {
                $dewasaPrice = $get('dewasa_price');
                $anakPrice = $get('anak_price');
                $totalAnak = $get('total_anak');
                $total = ($state * $dewasaPrice) + ($totalAnak * $anakPrice);
                $set('total_purchase', $total);
        }),

        TextInput::make('total_anak')
            ->label('Jumlah Anak-anak')
            ->numeric()
            ->default(0)
            ->required()
            ->reactive()
            ->afterStateUpdated(function ($state, callable $set, callable $get) {
                $dewasaPrice = $get('dewasa_price');
                $dewasaCount = $get('total_dewasa');
                $anakPrice = $get('anak_price');
                $total = ($dewasaCount * $dewasaPrice) + ($state * $anakPrice);
                $set('total_purchase', $total);
            }),
    ]),

        TextInput::make('phone_number')
            ->label('Nomor Telepon')
            ->required(),

        DatePicker::make('purchase_date')
            ->label('Tanggal Kunjungan')
            ->required(),

        TextInput::make('total_purchase')
            ->label('Total Pembayaran')
            ->readOnly()
            ->numeric(),
    ]);
}


    //ini agak bener
//     public static function form(Form $form): Form
// {
//     return $form
//         ->schema([
//             Hidden::make('user_id')
//             ->default(Auth::id()),

//         // TextInput::make('user_name')
//         //     ->label('User')
//         //     ->default(Auth::user()?->name)
//         //     ->disabled()
//         //     ->dehydrated(false),

//             Select::make('description')
//                 ->label('Option Ticket')
//                 ->options(
//                     Ticket::query()->pluck('description', 'description')->unique()
//                 )
//                 ->searchable()
//                 ->reactive()
//                 ->required(),

//             Select::make('ticket_id')
//                 ->label('Ticket Name')
//                 ->options(function (callable $get) {
//                     $desc = $get('description');
//                     if (!$desc) return [];
//                     return Ticket::where('description', $desc)
//                         ->pluck('ticket_name', 'id');
//                 })
//                 ->searchable()
//                 ->reactive()
//                 ->required()
//                 ->afterStateUpdated(function ($state, callable $set) {
//                     $ticket = Ticket::find($state);
//                     if ($ticket) {
//                         $set('ticket_name', $ticket->ticket_name);
//                         $set('price', $ticket->price);
//                         $set('description_detail', $ticket->description);
//                         $set('total_purchase', $ticket->price);
//                     }
//                 }),

//             TextInput::make('price')
//                 ->label('Ticket Price')
//                 ->readOnly(),

//             TextInput::make('total_ticket')
//                 ->label('Total Tickets')
//                 ->required()
//                 ->numeric()
//                 ->reactive()
//                 ->afterStateUpdated(function ($state, callable $set, callable $get) {
//                     $price = $get('price');
//                     if ($price && $state) {
//                         $set('total_purchase', $price * $state);
//                     }
//                 }),

//             TextInput::make('total_purchase')
//                 ->label('Total Purchase')
//                 ->readOnly(),

//             TextInput::make('phone_number')
//                 ->label('Phone Number')
//                 ->required(),

//             DatePicker::make('purchase_date')
//                 ->label('Purchase Date')
//                 ->required()
//                 ->displayFormat('Y-m-d')
//                 ->reactive(),
//         ]);
// }

public static function table(Table $table): Table
{
    return $table
        ->columns([
            Tables\Columns\TextColumn::make('user.name')
                ->label('Pengguna')
                ->searchable(),

            Tables\Columns\TextColumn::make('total_purchase')
                ->label('Total Pembelian')
                ->sortable(),

            Tables\Columns\TextColumn::make('purchase_date')
                ->label('Tanggal Pembelian')
                ->date()
                ->sortable()
                ->searchable(),

            Tables\Columns\TextColumn::make('total_dewasa')
                ->label('Jumlah Dewasa'),

            Tables\Columns\TextColumn::make('total_anak')
                ->label('Jumlah Anak-anak'),

            Tables\Columns\TextColumn::make('Category')
                ->label('Kategori Pengunjung')
                ->searchable(),
        ])
        ->defaultSort('purchase_date', 'desc')
        ->filters([
            Tables\Filters\Filter::make('Tanggal Pembelian')
                ->form([
                    DatePicker::make('from')->label('Dari Tanggal'),
                    DatePicker::make('until')->label('Sampai Tanggal'),
                ])
                ->query(function ($query, array $data) {
                    return $query
                        ->when($data['from'], fn($q) => $q->whereDate('purchase_date', '>=', $data['from']))
                        ->when($data['until'], fn($q) => $q->whereDate('purchase_date', '<=', $data['until']));
                }),
        ])
        ->actions([
            Tables\Actions\EditAction::make(),
            Tables\Actions\DeleteAction::make(),
        ])
        ->bulkActions([
            Tables\Actions\BulkActionGroup::make([
                Tables\Actions\DeleteBulkAction::make(),
            ]),
        ]);
}


    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTicketTransactions::route('/'),
            'create' => Pages\CreateTicketTransaction::route('/create'),
            'edit' => Pages\EditTicketTransaction::route('/{record}/edit'),
        ];
    }
}