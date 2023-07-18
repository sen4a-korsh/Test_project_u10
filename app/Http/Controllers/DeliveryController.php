<?php

namespace App\Http\Controllers;

use App\Http\Requests\Delivery\StoreRequest;
use App\Services\CourierDeliveryService\CourierDeliveryServiceFactory;
use App\Services\DeliveryService;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DeliveryController extends Controller
{

    public DeliveryService $deliveryService;

    public function __construct(DeliveryService $deliveryService)
    {
        $this->deliveryService = $deliveryService; // добавляем сервис, в который будем помещать код, чтобы контроллер оставался чистым (не был перенагружен кодом)
    }

    public function index()
    {
        return view('delivery.nova-poshta.index');
    }

    public function create()
    {
        return view('delivery.nova-poshta.create');
    }

    public function store(StoreRequest $request)
    {
        $storeData = $request->validated();

        $this->deliveryService->store($storeData);

        return redirect()->route('delivery.index');

    }

}
