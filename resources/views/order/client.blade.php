@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <form action="">
                    <div id="accordion">
                        <div class="card mb-2">
                            <div class="card-header" id="heading0">
                                <h5 class="mb-0">
                                    <a class="btn btn-link" data-toggle="collapse" data-target="#collapse0"
                                       aria-expanded="true" aria-controls="collapse0">
                                        Выберите оружие
                                    </a>
                                    <a class="btn btn-danger float-right delete-element">Del</a>
                                </h5>
                            </div>

                            <div id="collapse0" class="collapse show" aria-labelledby="heading0"
                                 data-parent="#accordion">
                                <div class="card-body">

                                    <select class="custom-select custom-select-lg mb-3">
                                        <option selected>Выберите оружие</option>
                                        <option value="1">0</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>

                                    <form class="form-horizontal" role="form">
                                        <div class="form-group">
                                            <label for="" class="">Количество выстрелов
                                            </label>
                                            <div class="input-group amount-spin">
                                                <span class="input-group-btn">
                                                    <button
                                                            class="btn btn-default down-amount-spin"
                                                            type="button">-
                                                    </button>
                                                </span>
                                                <input id="" type="text" value="0" name="demo2"
                                                       class="col-md-8 form-control" style="display: block;">
                                                <span class="input-group-btn">
                                                    <button class="btn btn-default up-amount-spin"
                                                            type="button">+
                                                    </button>
                                                </span>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary add-element-to-order mt-2 btn-block">
                        Добавить оружие
                    </button>

                    <div class="form-group mt-3 border-dark">
                        <label for="orderComment">Комментарий к заказу</label>
                        <textarea class="form-control" id="orderComment" rows="5"></textarea>
                    </div>

                    <button class="btn btn-success btn-lg mt-5 btn-block">
                        Добавить заказ
                    </button>
                </form>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/order.js') }}" defer></script>

@endsection