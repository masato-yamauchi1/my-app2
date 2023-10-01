<x-meta>
    <x-slot name="title">bootstrat5 テストサイト お問合せ</x-slot>
</x-meta>
<body>
<x-header>
        <x-slot name="active">contact</x-slot>
        <x-slot name="header_title">お問合せ</x-slot>
        <x-slot name="target_title">お問合せ</x-slot>
    </x-header>


    <!-- Contact Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">お問合せ</h5>
                <h1 class="mb-0">ご質問がございましたら、お気軽にお問合せください</h1>
            </div>
            <div class="row g-5 mb-5">
                <div class="col-lg-4">
                    <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.1s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">お電話はこちら</h5>
                            <h4 class="text-primary mb-0">+123-4567-8900</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.4s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-envelope-open text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">メールで無料見積を入手</h5>
                            <h4 class="text-primary mb-0">info@example.com</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.8s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-map-marker-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">オフィスはこちら
                            </h5>
                            <h4 class="text-primary mb-0">埼玉県 xxx市</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-5" id="app">
                <div class="col-lg-6 wow slideInUp ms-auto me-auto" data-wow-delay="0.3s" style="width:80%;">
                    <form @submit.prevent="submitForm" action="/contact" method="post">
                    @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <input type="text" 
                                    class="form-control border-0 bg-light px-4" 
                                    placeholder="お名前" 
                                    name="name" 
                                    v-model="name" 
                                    @blur="$v.name.$touch()" 
                                    style="height: 55px;">
                                <p v-if="!$v.name.required" class="form_error_str">必須項目です</p>
                                <p v-if="!$v.name.maxLength" class="form_error_str">20文字以下で入力してください</p>
                            </div>
                            <div class="col-md-6">
                                <input 
                                    type="email" 
                                    class="form-control border-0 bg-light px-4" 
                                    placeholder="メールアドレス" 
                                    name="mail" 
                                    v-model="mail" 
                                    @blur="$v.email.$touch()" 
                                    style="height: 55px;">
                                <p v-if="!$v.mail.required" class="form_error_str">必須項目です</p>
                                <p v-if="!$v.mail.email" class="form_error_str">メールアドレスの形式が正しくありません</p>
                                <p v-if="!$v.mail.maxLength" class="form_error_str">200文字以下で入力してください</p>
                            </div>
                            
                            <div class="col-12">
                                <input type="text" 
                                class="form-control border-0 bg-light px-4" 
                                placeholder="タイトル" 
                                name="title" 
                                v-model="title" 
                                @blur="$v.title.$touch()" 
                                style="height: 55px;">
                                <p v-if="!$v.title.required" class="form_error_str">必須項目です</p>
                                <p v-if="!$v.title.maxLength" class="form_error_str">100文字以下で入力してください</p>
                            </div>
                            <div class="col-12">
                                <textarea 
                                    class="form-control border-0 bg-light px-4 py-3" 
                                    rows="8" 
                                    placeholder="本文" 
                                    name="body" 
                                    @blur="$v.body.$touch()" 
                                    v-model="body"></textarea>
                                <p v-if="!$v.body.maxLength" class="form_error_str">1000文字以下で入力してください</p>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">メッセージを送信</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
    <script src="/js/contact.js"></script>

    <!-- Vendor Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5 mb-5">
            <div class="bg-white">
                <div class="owl-carousel vendor-carousel">
                    <img src="img/vendor-1.jpg" alt="">
                    <img src="img/vendor-2.jpg" alt="">
                    <img src="img/vendor-3.jpg" alt="">
                    <img src="img/vendor-4.jpg" alt="">
                    <img src="img/vendor-5.jpg" alt="">
                    <img src="img/vendor-6.jpg" alt="">
                    <img src="img/vendor-7.jpg" alt="">
                    <img src="img/vendor-8.jpg" alt="">
                    <img src="img/vendor-9.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Vendor End -->
    <x-footer></x-footer>
</body>

</html>