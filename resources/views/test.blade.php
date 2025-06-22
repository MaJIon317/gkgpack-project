<div>
   
<label class="mb-2.5 block font-medium text-black">Выберите камеру</label>
  <select id="videoSource" class="w-full rounded-lg border border-stroke bg-white py-3 pl-3 pr-8 outline-none focus:border-primary focus-visible:shadow-none dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary"></select>
<br><br>
 
  <video id="video" autoplay muted playsinline style="height: 300px; width: 100%;
  max-width: 800px;"></video>
  <audio id="beep" src="https://actions.google.com/sounds/v1/cartoon/wood_plank_flicks.ogg" preload="auto"></audio>

  <div id="result" class="select-text"></div>

 
</div>

@assets
 

<script type="module">
    import { BarcodeFormat, DecodeHintType, BrowserMultiFormatReader } from 
    "https://cdn.jsdelivr.net/npm/@zxing/library@0.21.3/+esm";

    const videoElement = document.getElementById('video');
    const videoSelect = document.getElementById('videoSource');
    const resultElement = document.getElementById('result');

    const hints = new Map();
    hints.set(DecodeHintType.POSSIBLE_FORMATS, [BarcodeFormat.EAN_8, BarcodeFormat.EAN_13, BarcodeFormat.CODE_128]);

    const codeReader = new BrowserMultiFormatReader(hints);

   
    async function getCameras() {
      try {
        const devices = await navigator.mediaDevices.enumerateDevices();
        const videoDevices = devices.filter(device => device.kind === 'videoinput');
        videoSelect.innerHTML = '';
        videoDevices.forEach(device => {
          const option = document.createElement('option');
          option.value = device.deviceId;
          option.text = device.label || `Камера ${videoSelect.length + 1}`;
          videoSelect.appendChild(option);
        });
      } catch (err) {
        console.error(err);
      }
    }

    async function startScanner() {
      if (codeReader) {
        codeReader.reset();
      }

      const selectedDeviceId = videoSelect.value;

      try {
        resultElement.textContent = 'Поиск штрихкода...';
        await codeReader.decodeFromVideoDevice(selectedDeviceId, videoElement, (result, err) => {
      
            if (result) {
             const beep = document.getElementById('beep');
    beep.currentTime = 0;
    beep.play();
              
            resultElement.textContent = `Найден штрихкод: ${result.text}`;
            // Можно здесь остановить сканирование:
            // codeReader.reset();
          }
       
        }, {
  video: {
    deviceId: selectedDeviceId ? { exact: selectedDeviceId } : undefined,
    width: { ideal: 1280 },
    height: { ideal: 720 },
    facingMode: "environment"
  }
});
      } catch (err) {
        console.error(err);
        resultElement.textContent = 'Ошибка запуска камеры: ' + err.message;
      }
    }

    videoSelect.onchange = () => {
      startScanner();
    };

    // Инициализация
    (async () => {
      await getCameras();
      if (videoSelect.options.length > 0) {
        startScanner();
      } else {
        resultElement.textContent = 'Камеры не найдены';
      }
    })();
  </script>

@endassets
 