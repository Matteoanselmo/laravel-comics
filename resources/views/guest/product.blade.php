@extends('layouts.base')

@section('main-content')
<div>
    <div id="divisore"></div>
    <section class="main-single-content main-content">
        <div class="container centralized-item card-propeties-wrapper">
            <button class="current-series">
                <img src="{{$comics['thumb']}}" alt="{{$comics['title']}}">
            </button>
            <div class="info-card">
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
            <div class="adv-container">
                <h4>ADVERTISEMENT</h4>
                <img src="{{asset('images/adv.jpg')}}" alt="adv image">
            </div>
        </div>
    </section>

    <section class="main-single-content main-content" id="section-talent-specs">
        <div class="container">
            <div class="talent-specs-wrapper">
                <h1>
                    Talent
                </h1>
                <div class="talent-specs-info">
                    <p>
                        Art by:
                    </p>
                    @foreach ($comics['artists'] as $artist )
                        <p class="my-brand-color">
                            {{$artist}}
                        </p>
                    @endforeach
                </div>
                <div class="talent-specs-info">
                    <p>
                        Written by:
                    </p>
                    @foreach ($comics['writers'] as $writer)
                        <p class="my-brand-color">
                            {{$writer}}
                        </p>
                    @endforeach
                </div>
            </div>
            <div class="talent-specs-wrapper">
                <h1>
                    Specs
                </h1>
                <div class="talent-specs-info">
                    <p>
                        Series:
                    </p>
                    <p class="my-brand-color">
                        {{$comics['series']}}
                    </p>
                </div>
                <div class="talent-specs-info">
                    <p>
                        U.S Price:
                    </p>
                    <p>
                        {{$comics['price']}}
                    </p>
                </div>
                <div class="talent-specs-info">
                    <p>
                        On sale date:
                    </p>
                    <p>
                        {{$comics['sale_date']}}
                    </p>
                </div>
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
