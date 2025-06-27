<div>
    <div id="qr-reader" class="w-full max-w-md mx-auto"></div>
    <div id="qr-reader-results" class="mt-4 text-center">
        @if ($scanResult)
            <p class="text-lg font-semibold @if($scanStatus == 'success') text-green-600 @elseif($scanStatus == 'error') text-red-600 @else text-blue-600 @endif">
                {{ $scanResult }}
            </p>
            <p class="text-sm text-gray-500">Scanned QR: {{ $scannedQrCode }}</p>
        @else
            <p class="text-gray-500">Arahkan kamera ke QR Code tiket.</p>
        @endif
    </div>

    @push('scripts')
    <script src="https://unpkg.com/html5-qrcode" type="text/javascript"></script>
    <script>
        function onScanSuccess(decodedText, decodedResult) {
            console.log(`Code matched = ${decodedText}`, decodedResult);
            @this.call('processQrCode', decodedText);
        }
        function onScanFailure(error) {
            console.warn(`Code scan error = ${error}`);
        }

        let html5QrcodeScanner = new Html5QrcodeScanner(
            "qr-reader", { fps: 10, qrbox: {width: 250, height: 250} });
        html5QrcodeScanner.render(onScanSuccess, onScanFailure);
        window.addEventListener('beforeunload', () => {
            if (html5QrcodeScanner) {
                html5QrcodeScanner.clear();
            }
        });
    </script>
    @endpush
</div>