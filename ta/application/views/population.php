<?php $this->load->view('widgets/page-title'); ?>

<section class="pt-60px pb-60px position-relative">
    <div class="container">
        <div class="row">
            <div class="col tab-style-01">
                <ul class="nav nav-tabs border-0 text-center fs-18 alt-font fw-600 mb-3 justify-content-center">
                    <li class="nav-item me-20px">
                        <a class="nav-link active" data-bs-toggle="tab" href="#tab_sec2">
                            மொத்த மக்கள் தொகை
                        </a>
                    </li>
                    <li class="nav-item me-20px">
                        <a class="nav-link" data-bs-toggle="tab" href="#tab_sec3">
                            எஸ்சி மக்கள் தொகை
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#tab_sec4">
                            பழங்குடி மக்கள் தொகை
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade in active show" id="tab_sec2">
                        <div class="row row-cols-1 row-cols-lg-4 row-cols-md-2 justify-content-center">
                            <table class="w-100 border-radius-20px overflow-hidden" style="table-layout: fixed">
                                <thead>
                                    <tr>
                                        <th><strong>வார்டு</strong></th>
                                        <th><strong>ஆண்</strong></th>
                                        <th><strong>பெண்</strong></th>
                                        <th><strong>மொத்த மக்கள் தொகை</strong></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($population as $count): ?>
                                        <tr>
                                            <td>Ward - <?= $count['ward_no']; ?></td>
                                            <td><i class="fa-solid fa-mars text-base-color me-5px"></i><?= $count['total_male']; ?></td>
                                            <td><i class="fa-solid fa-venus text-base-color me-5px"></i><?= $count['total_female']; ?></td>
                                            <td><i class="fa-regular fa-user text-base-color me-5px"></i><?= $count['total_population']; ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade in" id="tab_sec3">
                        <div class="row row-cols-1 row-cols-lg-4 row-cols-md-2 justify-content-center">
                            <table class="w-100 border-radius-20px overflow-hidden" style="table-layout: fixed">
                                <thead>
                                    <tr>
                                        <th><strong>வார்டு</strong></th>
                                        <th><strong>ஆண்</strong></th>
                                        <th><strong>பெண்</strong></th>
                                        <th><strong>மொத்த எஸ்சி மக்கள் தொகை</strong></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($population as $count): ?>
                                        <tr>
                                            <td>Ward - <?= $count['ward_no']; ?></td>
                                            <td><i class="fa-solid fa-mars text-base-color me-5px"></i><?= $count['sc_male']; ?></td>
                                            <td><i class="fa-solid fa-venus text-base-color me-5px"></i><?= $count['sc_female']; ?></td>
                                            <td><i class="fa-regular fa-user text-base-color me-5px"></i><?= $count['sc_population']; ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade in" id="tab_sec4">
                        <div class="row row-cols-1 row-cols-lg-4 row-cols-md-2 justify-content-center">
                            <table class="w-100 border-radius-20px overflow-hidden" style="table-layout: fixed">
                                <thead>
                                    <tr>
                                        <th><strong>வார்டு</strong></th>
                                        <th><strong>ஆண்</strong></th>
                                        <th><strong>பெண்</strong></th>
                                        <th><strong>மொத்த பழங்குடி மக்கள் தொகை</strong></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($population as $count): ?>
                                        <tr>
                                            <td>Ward - <?= $count['ward_no']; ?></td>
                                            <td><i class="fa-solid fa-mars text-base-color me-5px"></i><?= $count['st_male']; ?></td>
                                            <td><i class="fa-solid fa-venus text-base-color me-5px"></i><?= $count['st_female']; ?></td>
                                            <td><i class="fa-regular fa-user text-base-color me-5px"></i><?= $count['st_population']; ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>