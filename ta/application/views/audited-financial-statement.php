<?php $this->load->view('widgets/page-title'); ?>

<!-- <section class="pt-40px pb-40px" style="background-color: #f5f5f7">
    <div class="container">
        <div class="row row-cols-1 row-cols-xl-3 row-cols-lg-2 row-cols-md-2 justify-content-center text-center" data-anime='{ "el": "childs", "translateY": [30, 0], "scale":[0.8,1], "opacity": [0,1], "duration": 500, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>
            <?php foreach ($administrative as $report): ?>
                <div class="col icon-with-text-style-05 transition-inner-all mb-30px">
                    <div class="feature-box text-center bg-white box-shadow border-radius-20px">
                        <div class="content-slide-up p-20px">
                            <div class="feature-box-icon">
                                <img src="assets/images/icons/financial-statement.png" class="w-80px mb-20px" />
                            </div>
                            <div class="feature-box-content">
                                <span class="d-inline-block alt-font text-black fw-500 fs-17 mb-5px">Year : <span class="text-base-color"><?= $report['year']; ?></span></span>
                                <p>
                                    <i class="fa-solid fa-file-pdf text-base-color me-5px fs-20"></i>
                                    <a href="<?= $report['revenue_fund']; ?>" target="_blank" class="text-black">Revenue Fund<img src="assets/images/icons/arrow-up-right.png" class="text-base-color ms-10px"></a>
                                </p>
                                <p>
                                    <i class="fa-solid fa-file-pdf text-base-color me-5px fs-20"></i>
                                    <a href="<?= $report['water_supply_fund']; ?>" target="_blank" class="text-black">Water Supply Fund<img src="assets/images/icons/arrow-up-right.png" class="text-base-color ms-10px"></a>
                                </p>
                                <p>
                                    <i class="fa-solid fa-file-pdf text-base-color me-5px fs-20"></i>
                                    <a href="<?= $report['elementary_education_fund']; ?>" target="_blank" class="text-black">Elementary Education Fund<img src="assets/images/icons/arrow-up-right.png" class="text-base-color ms-10px"></a>
                                </p>
                                <span class="text-visible d-inline-block alt-font text-black fw-500 fs-17 mb-5px">Updated on : <span class="text-base-color"><?= $report['updated_on']; ?></span></span>
                                <span class="text-visible d-inline-block alt-font text-black fw-500 fs-17 mb-5px">Published on : <span class="text-base-color"><?= $report['published_on']; ?></span></span>

                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</section> -->
<section class="pt-60px pb-60px contain-background background-no-repeat background-position-right" style="background-image: url(assets/images/bg/officer-details-bg.png);background-size:200px">
    <div class="container">
        <div class="row">
            <table class="w-100 overflow-hidden border-radius-20px">
                <thead>
                    <tr>
                        <th>ஆண்டு</th>
                        <th>வருவாய் நிதி</th>
                        <th>நீர் வழங்கல் நிதி</th>
                        <th>தொடக்கக் கல்வி நிதி</th>
                        <th>புதுப்பிக்கப்பட்ட தேதி</th>
                        <th>வெளியிடப்பட்ட தேதி</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($administrative as $report): ?>
                    <tr>
                        <td><?= $report['year']; ?></td>
                        <td><a href="assets/pdf/audited-financial-statement/<?= $report['revenue_fund']; ?>"
                                target="_blank"><img src="assets/images/icons/document.png" class="w-40px ms-10px">
                            </a></td>
                        <td><a href="assets/pdf/audited-financial-statement/<?= $report['water_supply_fund']; ?>"
                                target="_blank"><img src="assets/images/icons/document.png" class="w-40px ms-10px">
                            </a></td>
                        <td><a href="assets/pdf/audited-financial-statement/<?= $report['elementary_education_fund']; ?>"
                                target="_blank"><img src="assets/images/icons/document.png" class="w-40px ms-10px">
                            </a></td>
                        <td>
                            <?php if ($report['updated_on'] !== null): ?>
                            <?= $report['updated_on']; ?>
                            <?php else: ?> -
                            <?php endif; ?>
                        </td>
                        <td>
                            <?php if ($report['published_on'] !== null): ?>
                            <?= $report['published_on']; ?>
                            <?php else: ?> -
                            <?php endif; ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</section>