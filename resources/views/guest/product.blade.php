@extends('layouts.base')

@section('main-content')
<div>
    <div id="divisore"></div>
    <section class="main-single-content main-content">
        <div class="container centralized-item card-propeties-wrapper">
            <button class="current-series">
                <img src="{{$comics['thumb']}}" alt="{{$comics['title']}}">
            </button>
            <div>
                <h1>
                    {{$comics['title']}}
                </h1>
                <div class="check-container">
                    <div class="check-price-wrapper">
                        <p>
                            U.S Price:
                            <span>
                                {{$comics['price']}}
                            </span>
                        </p>
                        <p>
                            AVAIBLE
                        </p>
                    </div>
                    <button>
                        Check Availability
                    </button>
                </div>
                <p>
                    {{$comics['description']}}
                </p>
            </div>
        </div>
    </section>


    {{-- <section id="card-section">
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
    </section> --}}
    @dump($comics)
</div>
@endsection
