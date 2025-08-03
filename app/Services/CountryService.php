<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;

class CountryService
{
	public function getCountries(): mixed
	{


		$key = 'cache.key.here';
		$ttl = 60;

		$cachedCountries = Cache::remember($key, $ttl, function () {
			$response =  Http::get('https://www.apicountries.com/countries');

			if (!$response->successful()) {
				Log::warning('Failed to fetch countries. Status: ' . $response->status());
				return [];
			}
			return collect($response->json())
				->pluck(
					'name',
					'numericCode'
				)
				->toArray();
		});

		return $cachedCountries;
	}
}
