<?php $this->load->view('widgets/page-title'); ?>

<section class="pt-150 pb-150"
    style="background-image: url(assets/images/bg/about-bg.png);background-repeat: no-repeat;background-size: contain;background-position: right;">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 text-start"
                data-anime='{ "opacity": [0,1], "duration": 600, "delay": 100, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <h2 class="fs-20 fw-700 text-base-color mb-5px">தாம்பரம் பற்றி</h2>
                <p class="fs-16 text-grey fw-400">
                    தாம்பரம் நகரம் தலைநகர் சென்னைக்கு தெற்கே 24 கிமீ தொலைவில் அமைந்துள்ளது. சென்னை எழும்பூரில் இருந்து
                    கன்னியாகுமரி வரை புகழ்பெற்ற கிராண்ட் சதர்ன் டிரங்க் சாலை மற்றும் ரயில் பாதை ஆகியவை நகரத்தை கிழக்கு
                    மற்றும் மேற்கு என பிரிக்கிறது. முனிசிபல் டவுன், தாம்பரம் சென்னையின் அழகிய பெருநகரத்தின் நுழைவாயில்
                    என்று வர்ணிக்கப்படுகிறது.
                </p>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 position-relative">
                <div class="w-75" data-animation-delay="200" data-shadow-animation="true"
                    data-bottom-top="transform: translateY(50px)" data-top-bottom="transform: translateY(-50px)">
                    <img src="<?= base_url(); ?>assets/images/about-1.png" alt="" class="border-radius-20px w-100">
                </div>
                <div class="w-55 overflow-hidden position-absolute right-minus-70px bottom-minus-40px"
                    data-shadow-animation="true" data-animation-delay="100"
                    data-bottom-top="transform: translateY(-20px)" data-top-bottom="transform: translateY(20px)">
                    <img src="<?= base_url(); ?>assets/images/about-2.png" alt="" class="border-radius-20px w-100" />
                </div>
            </div>
        </div>
    </div>
</section>


<section class="h-500px align-content-center cover-background background-position-center-bottom position-relative"
    style="background-image: url('assets/images/galnce.jpg')" data-parallax-background-ratio="0.5">
    <div class="opacity-full-dark bg-gradient-dark-transparent"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-xl-12 col-lg-12 col-md-10 text-center">
                <div class="cd-headline slide">
                    <div class="fs-50 lg-fs-100 text-white fw-500 alt-font fancy-text-style-4"
                        data-anime='{ "el": "childs", "opacity": [0, 1], "translateX": [-100, 0], "staggervalue": 300, "duration": 1000, "easing": "easeOutCubic" }'>
                        <span class="d-inline-block" data-bottom-top="transform: translateX(70px)"
                            data-top-bottom="transform: translateX(-70px)">தாம்பரம் மாநகராட்சி</span><br>
                        <span class="d-inline-block" data-bottom-top="transform: translateX(70px)"
                            data-top-bottom="transform: translateX(-70px)">ஒரு பார்வையில்</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="pt-40px pb-40px">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 position-relative">
                <div class="w-100">
                    <img src="<?= base_url(); ?>assets/images/map.jpg" alt="" class="border-radius-6px w-100">
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 text-start"
                data-anime='{ "opacity": [0,1], "duration": 600, "delay": 100, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <h2 class="fs-20 fw-700 text-base-color mb-5px">சிறப்பம்சங்கள்</h2>
                <ul class="p-0 list-style-01 fw-400 fs-16 mb-40px">
                    <li class="border-none pt-10px pb-10px text-gray d-flex align-items-start">
                        <span class="m-3">
                            <i class="fas fa-university text-base-color fs-4"></i>
                        </span>
                        <div>
                            <strong>கல்விச் சிறப்பு:</strong> உலகப் புகழ்பெற்ற மெட்ராஸ் கிறிஸ்தவக் கல்லூரி மற்றும் பல
                            புகழ்பெற்ற நிறுவனங்களின் தாயகம்.
                        </div>
                    </li>
                    <li class="border-none pt-10px pb-10px text-gray d-flex align-items-start">
                        <span class="m-3">
                            <i class="fas fa-train text-base-color fs-4"></i>
                        </span>
                        <div>
                            <strong>போக்குவரத்து இணைப்பு:</strong> தென் தமிழகத்தை இணைக்கும் வகையில் தாம்பரத்தில் இருந்து
                            கடற்கரைக்கு புறநகர் ரயில்கள் இயக்கப்படுகின்றன.
                        </div>
                    </li>
                    <li class="border-none pt-10px pb-10px text-gray d-flex align-items-start">
                        <span class="m-3">
                            <i class="fas fa-industry text-base-color fs-4"></i>
                        </span>
                        <div>
                            <strong>தொழில்துறை வளர்ச்சி:</strong> இந்தியாவின் அந்நிய செலாவணிக்கு பங்களிக்கும் தொழில்துறை
                            அலகுகளை MEPZ வழங்குகிறது.
                        </div>
                    </li>
                    <li class="border-none pt-10px pb-10px text-gray d-flex align-items-start">
                        <span class="m-3">
                            <i class="fas fa-city text-base-color fs-4"></i>
                        </span>
                        <div>
                            <strong>நகராட்சி முன்னேற்றம்:</strong> 1964ல் நிறுவப்பட்ட தாம்பரம் 20.72 சதுர கி.மீ
                            பரப்பளவில் சிறப்பு தர நகராட்சியாக வளர்ந்துள்ளது.
                        </div>
                    </li>
                    <li class="border-none pt-10px pb-10px text-gray d-flex align-items-start">
                        <span class="m-3">
                            <i class="fas fa-users text-base-color fs-4"></i>
                        </span>
                        <div>
                            <strong>மக்கள்தொகை வளர்ச்சி:</strong> 2011 மக்கள் தொகை கணக்கெடுப்பின்படி 1,64,830 மக்கள்தொகை
                            மற்றும் தினசரி 1 லட்சத்துக்கும் அதிகமான மக்கள்தொகையுடன், தாம்பரம் ஒரு பரபரப்பான நகரமாக
                            வளர்கிறது.
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="pt-40px pb-40px">
    <div class="container">
        <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 justify-content-center mb-5 sm-mb-35px"
            data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 100, "staggervalue": 200, "easing": "easeOutQuad" }'>
            <div class="col md-mb-30px">
                <div
                    class="box-shadow-quadruple-large box-shadow-quadruple-large-hover services-box-style-03 last-paragraph-no-margin border-radius-4px overflow-hidden border-radius-20px">
                    <div class="position-relative">
                        <img src="assets/images/about/1.png" alt="" />
                    </div>
                    <div class="bg-white">
                        <div
                            class="ps-50px pe-50px pt-20px pb-30px xl-ps-20px xl-pe-20px text-center progress-bar-style-01">
                            <p
                                class="d-inline-block fs-18 fw-700 text-base-color mb-5px text-dark-gray-hover mb-5px ls-minus-05px">
                                தொழில் மையம் </p>
                            <p class="fs-16 fw-400 text-gray">அன்னியச் செலாவணி மூலம் இந்தியாவின் பொருளாதாரத்தை உயர்த்தி,
                                உலகளவில் பொருட்களை ஏற்றுமதி செய்யும் தொழில்கள் தாம்பரம் MEPZ இல் உள்ளது.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col md-mb-30px">
                <div
                    class="box-shadow-quadruple-large box-shadow-quadruple-large-hover services-box-style-03 last-paragraph-no-margin border-radius-4px overflow-hidden border-radius-20px">
                    <div class="position-relative">
                        <img src="assets/images/about/3.png" alt="" />
                    </div>
                    <div class="bg-white">
                        <div
                            class="ps-50px pe-50px pt-20px pb-30px xl-ps-20px xl-pe-20px text-center progress-bar-style-01">
                            <p
                                class="d-inline-block fs-18 fw-700 text-base-color mb-5px text-dark-gray-hover mb-5px ls-minus-05px">
                                போக்குவரத்து இணைப்பு </p>
                            <p class="fs-16 fw-400 text-gray">விரிவான போக்குவரத்து வசதிகளுக்கு பெயர் பெற்ற தாம்பரம்,
                                ரயில் மற்றும் சாலை வழியாக சென்னையை தென் தமிழகத்துடன் இணைக்கிறது.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col md-mb-30px">
                <div
                    class="box-shadow-quadruple-large box-shadow-quadruple-large-hover services-box-style-03 last-paragraph-no-margin border-radius-4px overflow-hidden border-radius-20px">
                    <div class="position-relative">
                        <img src="assets/images/about/2.png" alt="" />
                    </div>
                    <div class="bg-white">
                        <div
                            class="ps-50px pe-50px pt-20px pb-30px xl-ps-20px xl-pe-20px text-center progress-bar-style-01">
                            <p
                                class="d-inline-block fs-18 fw-700 text-base-color mb-5px text-dark-gray-hover mb-5px ls-minus-05px">
                                கல்வி மேன்மை</p>
                            <p class="fs-16 fw-400 text-gray">மெட்ராஸ் கிறிஸ்டியன் கல்லூரி போன்ற புகழ்பெற்ற
                                நிறுவனங்களுடன், தாம்பரம் கல்வி மற்றும் பயிற்சிக்கான முன்னணி மையமாக உள்ளது.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>