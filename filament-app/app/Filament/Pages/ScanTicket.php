<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class ScanTicket extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-qr-code';
    protected static string $view = 'filament.pages.scan-ticket';
    protected static ?string $navigationGroup = 'QR TIKCET SCAN';
    protected static ?int $navigationSort = 2;
    protected static ?string $title = 'Scan Tiket';
}