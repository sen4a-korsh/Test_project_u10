<?php


namespace App\Services\CourierDeliveryService;


use App\Services\CourierDeliveryService\CourierDeliveryServiceClasses\NovaPoshtaService;

class CourierDeliveryServiceFactory
{
    /**
     * @throws \Exception
     */
    public static function create($service)
    {
        switch ($service){
            case 'nova_poshta':
                return new NovaPoshtaService();
//            case 'ukr_poshta':
//                return new UkrPoshtaService();
            default:
                throw new \Exception('Неподдерживаемый сервис' . $service);
        }
    }
}
