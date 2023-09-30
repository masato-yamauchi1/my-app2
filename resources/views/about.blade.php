
<x-meta>
    <x-slot name="title">bootstrat5 テストサイト このサイトについて</x-slot>
</x-meta>
<body>
    
    <!-- Service Start -->
    <x-header>
        <x-slot name="active">about</x-slot>
        <x-slot name="header_title">このサイトについて</x-slot>
        <x-slot name="target_title">このサイトについて</x-slot>
    </x-header>

    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">このサイトについて</h5>
                <h1 class="mb-0" style="font-size:200%;">Lravel10とBootstrap5、Vue.jsの<span class="br">テストサイトです</span></h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-shield-alt text-white"></i>
                        </div>
                        <h4 class="mb-3">開発環境</h4>
                        <p class="m-0">windows10 wsl2 ubuntu VScode git docker</p>
                        <a class="btn btn-lg btn-primary rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-chart-pie text-white"></i>
                        </div>
                        <h4 class="mb-3">データーベース</h4>
                        <p class="m-0">mysql</p>
                        <a class="btn btn-lg btn-primary rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-code text-white"></i>
                        </div>
                        <h4 class="mb-3">言語 フレームワーク</h4>
                        <p class="m-0">PHP8 Lravel10 Vue.js</p>
                        <a class="btn btn-lg btn-primary rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <x-footer></x-footer>
</body>

</html>