@extends('layouts.base')

@section('main-content')
<div>
    <section class="main-content" >
        <div class="container centralized-item card-propeties-wrapper">
            <button class="current-series">
                <span>current series</span>
            </button>
            @foreach ($comics as $index => $product )
            <div class="main-card">
                <img src="{{$product['thumb']}}" alt="{{$product['title']}}">
                <p>
                    <a href="{{route("home-product", ['id' => $index])}}">
                        {{$product['title']}}
                    </a>
                </p>
            </div>
            @endforeach
        </div>
    </section>


    <section id="card-section">
        <div class="container centralized-item card-container">
            <div class="centralized-item card-wrapper" v-for="(card, index) in mainMerch" :key="index">
                <img src="{{asset('images/buy-comics-digital-comics.png')}}" alt="digital comics card`">
                <p>digital comics</p>
            </div>
            <div class="centralized-item card-wrapper" v-for="(card, index) in mainMerch" :key="index">
                <img src="{{asset('images/buy-comics-merchandise.png')}}" alt="digital comics card`">
                <p>dc merchandise</p>
            </div>
            <div class="centralized-item card-wrapper" v-for="(card, index) in mainMerch" :key="index">
                <img src="{{asset('images/buy-comics-subscriptions.png')}}" alt="digital comics card`">
                <p>subscritpion</p>
            </div>
            <div class="centralized-item card-wrapper" v-for="(card, index) in mainMerch" :key="index">
                <img src="{{asset('images/buy-comics-shop-locator.png')}}" alt="digital comics card`">
                <p>comic shop locator</p>
            </div>
            <div class="centralized-item card-wrapper" v-for="(card, index) in mainMerch" :key="index">
                <img src="{{asset('images/buy-dc-power-visa.svg')}}" alt="digital comics card`">
                <p>dc power visa</p>
            </div>
        </div>
    </section>
</div>
@endsection
