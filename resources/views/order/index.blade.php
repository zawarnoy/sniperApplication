@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Выберите тип заказа:</div>

                    <div class="row justify-content-center">
                        <div class="col-xs-6 px-2">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="{{ asset('img/order/gun.jpg') }}" alt="Card image cap">
                                <div class="card-body">
                                    <p class="card-text">Заказ</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-6 px-2">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="{{ asset('img/order/certificate.jpg') }}"
                                     alt="Card image cap">
                                <div class="card-body">
                                    <p class="card-text">Сертификат</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
