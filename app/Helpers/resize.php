<?php
use Illuminate\Support\Str;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

// Установим основные параметры
define('FILESYSTEM_DISK', config('filesystems.default', 'local'));
define('RESIZE_PATH', config('filesystems.default_path_images', 'images'));
define('RESIZE_CACHE', config('filesystems.default_path_cache', 'cache'));
define('RESIZE_NO_IMAGE', config('filesystems.default_path_no_image', 'no-image.png'));

if (!function_exists('resize')) {
    function resize($src = false, int $width = 0, int $height = 0, $watermark = false, $webp = true, $compression = 100): string|null 
    {
		$src = Str::replaceStart('images/', '', $src);

		$storage = Storage::disk(FILESYSTEM_DISK);

		$storage_cache = Storage::disk('local');

		// Все пути у нас будут начинаться с {$path}
		$image_path = RESIZE_PATH . "/$src";
		
		$pathinfo = @pathinfo($src);
		
		$extension = $pathinfo['extension'] ?? null;

		$cache_image_name = [];

		if ($width > 0) { $cache_image_name[] = $width; }
		if ($height > 0) { $cache_image_name[] = $height; }
		if ($compression != 0) { $cache_image_name[] = $compression; }

		$cache_image_path = RESIZE_PATH . "/" . RESIZE_CACHE . "/" . str_replace(".$extension", ($cache_image_name ? ("-size-" . implode('-', $cache_image_name)) : "") . ".$extension", $src);

		// Если у нас есть поддержка Webp
		if ($webp) {
			$cache_image_path = preg_replace("/\\.$extension\$/", '.webp', $cache_image_path);
		}
		 
		// Все картинки храним всегда локально по пути {$path/cache/}
		// - Проверяем наличие картинки в {cache}

		if (trim($extension) && is_file(storage_path(path: "app/$cache_image_path"))) {
			return asset($cache_image_path);
		}
	
		// - Иначе начинаем ресайзить
		// 1. Ищем картинку на сервере
		if ($storage->exists($image_path) && trim($extension)) {
			$image = $storage->get($image_path);

			// Обрабатываем
			$imageManager = new ImageManager(new Driver());

			// Читаем
			$imageRead = $imageManager->read($image);
 
			// Ресайзим
			if ($width != 0 && $height !== 0) {
				$imageRead->contain($width, $height);
			}

			// Маркируем
			if ($watermark) {
				//$image->place($watermark);
			}

			// Преобразуем в Webp
			if ($webp && session()->get('webp') && $extension != 'webp') {
				$encoded = $imageRead->toWebp();
			} elseif ($extension == 'png') {
				$encoded = $imageRead->toPng();
			} else {
				$encoded = $imageRead->toJpeg();
			}
		
			$storage_cache->makeDirectory(Str::of($cache_image_path)->dirname()->value());
				
			$storage_cache->put($cache_image_path, (string) $encoded);

			return asset($cache_image_path);
		} else {
			$image_path = RESIZE_PATH . "/" . RESIZE_NO_IMAGE;

			$pathinfo = @pathinfo($cache_image_path);
		
			$extension = $pathinfo['extension'] ?? null;

			$cache_image_name = [];

			if ($width > 0) { $cache_image_name[] = $width; }
			if ($height > 0) { $cache_image_name[] = $height; }
			if ($compression != 0) { $cache_image_name[] = $compression; }

			$cache_image_path = RESIZE_PATH . "/" . RESIZE_CACHE . "/" . RESIZE_NO_IMAGE . "/" . str_replace(".$extension", ($cache_image_name ? ("-size-" . implode('-', $cache_image_name)) : "") . ".$extension", $src);

			// Если у нас есть поддержка Webp
			if ($webp) {
				$cache_image_path = preg_replace("/\\.$extension\$/", '.webp', $cache_image_path);
			}

			// Если NO-image в cache не находит, тогда мы будем начинаем обработку
		 
			if (!is_file(storage_path(path: "app/$cache_image_path"))) {
				 
				if ($storage->missing($image_path)) {
					$new_image = new ImageManager(new Driver());

					$new_image = $new_image->create($width, $height)->fill('eee');

					$storage->makeDirectory(Str::of($image_path)->dirname()->value());

					$storage->put($image_path, (string) $new_image->toPng());
				}

				$parameters = [];

				$ref = new ReflectionFunction(__FUNCTION__);

				foreach($ref->getParameters() as $parameter) {
					$name = $parameter->getName();
					$parameters[$name] = ${$name};
				}
				
				$parameters['src'] = RESIZE_NO_IMAGE;
				//$parameters['width'] = 0;
				//$parameters['height'] = 0;
				//$parameters['compression'] = 0;
				 
				return resize(...$parameters);
			}
		 
			return asset($cache_image_path);
		}
    }
}