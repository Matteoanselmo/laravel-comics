<div>
    <section id="first-footer-section">
    <div class="container centralized-item">
        <div class="lists-wrapper centralized-item">
            <div>
                <h2 class="my-text-white">DC COMICS</h2>
                <nav>
                    <ul class="footer-list">
                        @foreach ($links['dcComics'] as $link)
                            <li>
                                <a href="#">{{ $link }}</a>
                            </li>
                        @endforeach
                    </ul>
                </nav>
            <!-- SHOP DC -->
                <h2 class="my-text-white">SHOP</h2>
                <nav>
                    <ul class="footer-list">
                        @foreach ($links['shop'] as $link)
                            <li>
                                <a href="#">{{ $link }}</a>
                            </li>
                        @endforeach
                    </ul>
                </nav>
            </div>
            <div>
                <h2 class="my-text-white">DC</h2>
                <nav>
                    <ul class="footer-list">
                        @foreach ($links['DC'] as $link)
                            <li>
                                <a href="#">{{ $link }}</a>
                            </li>
                        @endforeach
                    </ul>
                </nav>
            </div>
            <div>
                <h2 class="my-text-white">SITES</h2>
                <nav>
                    <ul class="footer-list">
                        @foreach ($links['sites'] as $link)
                            <li>
                                <a href="#">{{ $link }}</a>
                            </li>
                        @endforeach
                    </ul>
                </nav>
            </div>
        </div>
        <div id="logo-bg">
        </div>
    </div>

    </section>
    <section id="last-footer-section">
        <div class="container centralized-item">
            <div>
                <button>SIGN-UP NOW!</button>
            </div>
            <div class="social-wrapper centralized-item">
                <h2>FOLLOW US</h2>
                <nav>
                    <ul class="footer-list centralized-item">
                        <li>
                            <a href="#">
                            <img src="{{asset('images/footer-facebook.png')}}" alt="facebook logo">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                            <img src="{{asset('images/footer-twitter.png')}}" alt="twitterlogo">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                            <img src="{{asset('images/footer-youtube.png')}}" alt="youtube logo">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                            <img src="{{asset('images/footer-pinterest.png')}}" alt="pintarest logo">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                            <img src="{{asset('images/footer-periscope.png')}}" alt="periscope logo">
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>
</div>
