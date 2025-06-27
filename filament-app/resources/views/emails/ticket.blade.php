<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Tiket Taman Edelweis Bali</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 20px; background-color: #f4f4f4; color: #333; }
        .container { background-color: #ffffff; max-width: 600px; margin: auto; padding: 20px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); }
        .header { text-align: center; padding-bottom: 20px; border-bottom: 1px solid #eeeeee; }
        .header h1 { margin: 0; color: #2C3930; }
        .content { padding: 20px 0; }
        .content h2 { color: #2C3930; }
        .ticket-details { width: 100%; border-collapse: collapse; margin-bottom: 20px; }
        .ticket-details th, .ticket-details td { text-align: left; padding: 8px; border-bottom: 1px solid #dddddd; }
        .ticket-details th { width: 40%; }
        .qr-code { text-align: center; margin-top: 20px; }
        .footer { text-align: center; font-size: 12px; color: #888; margin-top: 20px; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Taman Edelweis Bali</h1>
            <p>E-Tiket Anda</p>
        </div>
        <div class="content">
            <h2>Halo, {{ $userName }}!</h2>
            <p>Terima kasih telah melakukan pembelian tiket. Berikut adalah detail tiket Anda:</p>

            <table class="ticket-details">
                <tr>
                    <th>Order ID</th>
                    <td>{{ $orderId }}</td>
                </tr>
                <tr>
                    <th>Tanggal Kunjungan</th>
                    <td>{{ \Carbon\Carbon::parse($purchaseDate)->translatedFormat('d F Y') }}</td>
                </tr>
                <tr>
                    <th>Kategori</th>
                    <td>Tiket {{ $category }}</td>
                </tr>
                @if($totalDewasa > 0)
                <tr>
                    <th>Tiket Dewasa</th>
                    <td>{{ $totalDewasa }} x Rp {{ number_format($category === 'WNA' ? 50000 : 30000, 0, ',', '.') }}</td>
                </tr>
                @endif
                @if($totalAnak > 0)
                <tr>
                    <th>Tiket Anak-anak</th>
                    <td>{{ $totalAnak }} x Rp {{ number_format($category === 'WNA' ? 30000 : 20000, 0, ',', '.') }}</td>
                </tr>
                @endif
                <tr>
                    <th>Total Pembayaran</th>
                    <td><strong>Rp {{ number_format($totalPurchase, 0, ',', '.') }}</strong></td>
                </tr>
            </table>

            <p>Tunjukkan QR Code di bawah ini kepada petugas di pintu masuk untuk divalidasi. Satu QR Code berlaku untuk semua tiket dalam pesanan ini.</p>

            <div class="qr-code">
                <h3>Kode QR Anda</h3>
                {!! $qrCode !!}
                <p style="font-family: monospace; font-size: 14px; margin-top: 10px;">{{ $orderId }}</p>
            </div>
        </div>
        <div class="footer">
            <p>&copy; {{ date('Y') }} Taman Edelweis Bali. Semua hak dilindungi.</p>
            <p>Ini adalah email yang dibuat secara otomatis, mohon untuk tidak membalas.</p>
        </div>
    </div>
</body>
</html>
