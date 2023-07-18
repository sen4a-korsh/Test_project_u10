<?php


namespace App\Services;


use App\Services\CourierDeliveryService\CourierDeliveryServiceFactory;
use Illuminate\Support\Facades\DB;

class DeliveryService
{
    public $sender_address =  'Отделение №1 ул.Защитников Украины 12';

    public $data_package = [
        'wight' => 20,
        'height' => 15,
        'length ' => 10,
        'weight ' => 4.3,
    ];

    public function store($storeData)
    {
//        try {                                          //  Можем так же сделать Отлавливания Ошибки, при которой все изменения в бд откатятся
//            DB::beginTransaction();

            $CourierDeliveryService = $storeData['delivery_service'];
            unset($storeData['delivery_service']);
            $storeData['data_package'] = $this->data_package;
            $storeData['sender_address'] = $this->sender_address;
            //Order::create($storeData);                            добавлять заказ в бд магазина
            $service = CourierDeliveryServiceFactory::create($CourierDeliveryService); // при добавлении курьерок нужно будет добавить класс отнаследованный от интерфейса CourierDeliveryServiceInterface и добавить новый сервис в фабрику
            $service->sendPackageData($storeData);
//            DB::commit();
//        }catch (\Exception $exception){
//            DB::rollBack();
//            abort(500);
//        }
    }

}
