@extends('layouts.asset')
@section('content')
    <div class="content">
        <h1 class="contentTitle">Панель администратора</h1>
        <div class="adminBlocksContainer">
            <div class="adminBlockContainer">
                <a href="{{ route('addProduct.index') }}">
                    <img src="{{ asset('images/ticket-sale-bold.svg') }}" alt="saleImage" class="adminBlockImage">
                    <div class="adminBlockControls">
                        <h3 class="adminBlockText">Раздел акций</h3>
                        <button class="adminBlockButton">
                            <span class="adminButtonText">Просмотр</span>
                        </button>
                    </div>
                </a>
            </div>
            <div class="adminBlockContainer">
                <a href="{{ route('addProduct.index') }}">
                    <img src="{{ asset('images/order-approve.svg') }}" alt="orderImage" class="adminBlockImage">
                    <div class="adminBlockControls">
                        <h3 class="adminBlockText">Заказы</h3>
                        <button class="adminBlockButton">
                            <span class="adminButtonText">Подробнее</span>
                        </button>
                    </div>
                </a>
            </div>
            <div class="adminBlockContainer">
                <a href="{{ route('addProduct.index') }}">
                    <img src="{{ asset('images/new-solid.svg') }}" alt="newProductImage" class="adminBlockImage">
                    <div class="adminBlockControls">
                        <h3 class="adminBlockText">Добавление товара</h3>
                        <button class="adminBlockButton">
                            <span class="adminButtonText">Добавить</span>
                        </button>
                    </div>
                </a>
            </div>
        </div> 
    </div>
@endsection