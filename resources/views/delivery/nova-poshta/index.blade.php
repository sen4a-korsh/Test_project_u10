@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="position-absolute top-50 start-50 translate-middle">
            <h2>
                <a class="btn btn-warning" href="{{ route('delivery.create') }}">Сделать заказ</a>
            </h2>
        </div>
    </div>

@endsection
