<div id="index-header">
    <div class="container centralized-item">
    <img src="{{asset('images/dc-logo.png')}}" alt="dc logo">
    <nav>
        <ul>
            <li  class="{{Route::currentRouteName() == 'home-page' ? 'active' : '' }}" >
                <a href="{{route("home-page")}}">CHARACTER</a>
            </li>
            <li class="{{Route::currentRouteName() == 'home-product' ? 'active' : '' }}">
                <a href="#">COMICS</a>
            </li>
            <li>
                <a href="#">MOVIES</a>
            </li>
            <li>
                <a href="#">TV</a>
            </li>
            <li>
                <a href="#">GAMES</a>
            </li>
            <li>
                <a href="#">COLLECTIBLES</a>
            </li>
            <li>
                <a href="#">VIDEO</a>
            </li>
            <li>
                <a href="#">FANS</a>
            </li>
            <li>
                <a href="#">NEWS</a>
            </li>
            <li>
                <a href="#">SHOP</a>
            </li>
        </ul>
    </nav>
    </div>
</div>
