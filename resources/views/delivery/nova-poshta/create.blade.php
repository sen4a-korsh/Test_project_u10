@extends('layouts.app')

@section('content')

    <div class="container p-5" style="background-color: #efefef; border-radius: 10px">
        <div class="mb-5">
            <h1>Заказ</h1>
        </div>
        <form action="{{ route('delivery.store') }}" method="post">
            @csrf
            <div class="form-group mb-3">
                <label class="form-label">Введите ФИО:</label>
                <input type="text" name="customer_name" class="form-control" placeholder="ФИО" value="{{ old('customer_name') }}">
                @error('customer_name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label class="form-label">Введите мобильный номер:</label>
                <input type="text" name="phone_number" class="form-control" placeholder="Мобильный номер" value="{{ old('phone_number') }}">
                @error('phone_number')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label class="form-label">Введите Email:</label>
                <input type="text" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}">
                @error('email')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-4">
                <label class="form-label">Введите адрес доставки:</label>
                <input type="text" name="delivery_address" class="form-control" placeholder="Адрес доставки" value="{{ old('delivery_address') }}">
                @error('delivery_address')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <input  name="delivery_service" type="hidden" value="nova_poshta">
            <div class="form-group text-center">
                <button type="submit" class="btn btn-primary">Сделать заказ</button>
            </div>
        </form>
    </div>

@endsection
