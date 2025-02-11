<?php $this->load->view('widgets/page-title'); ?>
<section class="pt-60px pb-60px">
    <div class="container">
        <div class="row row-cols-1 row-cols-xl-4 row-cols-lg-2 row-cols-md-2 justify-content-center text-center" data-anime='{ "el": "childs", "translateY": [30, 0], "scale":[0.8,1], "opacity": [0,1], "duration": 500, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>
            <?php foreach ($by as $laws): ?>
                <div class="col icon-with-text-style-05 transition-inner-all d-flex justify-content-center align-items-center">
                    <div class="feature-box hover-box border-radius-10px border overflow-hidden d-flex flex-column justify-content-center align-items-center">
                        <div class="content-slide-up p-50px text-center">
                            <div class="feature-box-icon mb-20px">
                                <img src="assets/images/icons/<?= $laws['icons']; ?>" class="w-60px" />
                            </div>
                            <div class="feature-box-content">
                                <span class="d-inline-block alt-font text-black fw-500 fs-17 mb-20px"><?= $laws['title']; ?></span>
                                <a href="assets/downloads/by-laws/<?= $laws['pdf']; ?>" target="_blank" class="text-visible btn btn-small btn-rounded with-rounded btn-white m-auto border">Download<span class="bg-dark-gray text-white"><i class="fa-solid fa-download"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>