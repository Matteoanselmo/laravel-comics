<div>
    <section id="first-footer-section">
    <div class="container centralized-item">
        <div class="lists-wrapper centralized-item">
        <div>
        <h2 class="my-text-white">DC COMICS</h2>
        <nav>
            <ul class="footer-list">
            <li v-for="(link, index) in dcComics" :key="index">
                <a href="#">{{ link.link }}</a>
            </li>
            </ul>
        </nav>
        <!-- SHOP DC -->
        <h2 class="my-text-white">SHOP</h2>
        <nav>
            <ul class="footer-list">
            <li v-for="(link, index) in dcShop" :key="index">
                <a href="#">{{ link.link }} </a>
            </li>
            </ul>
        </nav>
        </div>
        <div>
        <h2 class="my-text-white">DC</h2>
        <nav>
            <ul class="footer-list">
            <li v-for="(link, index) in dcTerms" :key="index">
                <a href="#">{{ link.link }}</a>
            </li>
            </ul>
        </nav>
        </div>
        <div>
        <h2 class="my-text-white">SITES</h2>
        <nav>
            <ul class="footer-list">
            <li v-for="(link, index) in dcSites" :key="index">
                <a href="#">{{ link.link }}</a>
            </li>
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
                <img src="../assets/img/footer-facebook.png" alt="facebook logo">
                </a>
            </li>
            <li>
                <a href="#">
                <img src="../assets/img/footer-twitter.png" alt="twitterlogo">
                </a>
            </li>
            <li>
                <a href="#">
                <img src="../assets/img/footer-youtube.png" alt="youtube logo">
                </a>
            </li>
            <li>
                <a href="#">
                <img src="../assets/img/footer-pinterest.png" alt="pintarest logo">
                </a>
            </li>
            <li>
                <a href="#">
                <img src="../assets/img/footer-periscope.png" alt="periscope logo">
                </a>
            </li>
            </ul>
        </nav>
        </div>
    </div>
    </section>
</div>
