@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Выберите тип заказа:</div>

                    <div class="container-fluid">
                        <div class="row justify-content-center pt-3 pb-3">
                            <div class="col-xs-6 px-2 mb-2">
                                <a href="{{ route('order.client') }}">
                                    <div class="card" style="width: 18rem;">
                                        <img class="card-img-top" src="{{ asset('img/order/gun.jpg') }}"
                                             alt="Card image cap">
                                        <div class="card-body">
                                            <p class="card-text text-center">Клиент</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-xs-6 px-2 mb-2">
                                <a href="{{ route('order.certificate') }}">
                                    <div class="card" style="width: 18rem;">
                                        <img class="card-img-top" src="{{ asset('img/order/certificate.jpg') }}"
                                             alt="Card image cap">
                                        <div class="card-body">
                                            <p class="card-text text-center">Сертификат</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
