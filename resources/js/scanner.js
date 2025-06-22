let scanner = new WebcamBarcodeScanner({
        preview: {
            size: 200,
            position: 'top-right',
            padding: {
                top: 20,
                left: 20,
                right: 20,
                bottom: 20
            },
            radius: 5,
        },
    }),
    scannerId = null,
    scannerDevice = null;
    //scannerDevice = localStorage.getItem('scannerDevice') ? JSON.parse(localStorage.getItem('scannerDevice')) : null;

scanner.addEventListener('connected', device => scannerConnected(device));
scanner.addEventListener('change', device => scannerChange(device));
scanner.addEventListener('disconnected', device => scannerDisconnected(device));
scanner.addEventListener('barcode', data => scannerBarcode(data));

window.scannerInitialization = function(scanner_id)
{
    if (scannerId) {
        scannerDisconnected()
    }

    scannerId = scanner_id;

    if (scannerDevice) {
        console.log('reconnect')
        scanner.reconnect(scannerDevice);
    } else {
        console.log('connect')
        scanner.connect();
    }
}

window.scannerConnected = function(device)
{
    console.log('scannerConnected')
    scannerDevice = device;
}

window.scannerChange = function(device)
{
    console.log('scannerChange')
    if (device.deviceId) {
        scannerDevice = device

        localStorage.setItem('scannerDevice', JSON.stringify(scannerDevice))
    }
}

window.scannerDisconnect = function()
{
    console.log('scannerDisconnect')
    scanner.disconnect();
}

window.scannerDisconnected = function(event)
{
    console.log('scannerDisconnected')

    let elements = document.querySelectorAll('.webcam-barcode-scanner-preview')

    elements.forEach(element => {
        element.remove()
    });
}

window.scannerBarcode = function(event)
{
    console.log('scannerBarcode')

    scanner.result = event.value

    Livewire.dispatch('barcodeResult' + scannerId, scanner)
}
