<?php


namespace App\Services\CourierDeliveryService\CourierDeliveryServiceClasses;


use App\Services\CourierDeliveryService\Interfaces\CourierDeliveryServiceInterface;
use GuzzleHttp\Client;

class NovaPoshtaService implements CourierDeliveryServiceInterface
{

    public function sendPackageData($packageData)
    {
        $client = new Client();
        $response = $client->post('novaposhta.test/api/delivery', ['json' => $packageData ]);

        $statusCode = $response->getStatusCode();

        if ($statusCode >= 200 && $statusCode < 300) {
            return  json_decode($response->getBody(), true);
        } else {
            throw new \Exception('Не получилось отправить данные о доставке сервису: ' . self::class);
        }
    }
}
