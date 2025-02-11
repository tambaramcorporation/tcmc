<?php $this->load->view('widgets/page-title'); ?>

<section class="pt-60px pb-60px position-relative">
    <div class="container">
        <div class="row">
            <div class="col tab-style-01">
                <ul class="nav nav-tabs border-0 text-center fs-18 alt-font fw-600 mb-3 justify-content-center">
                    <li class="nav-item me-20px">
                        <a class="nav-link active" data-bs-toggle="tab" href="#tab_sec2">
                            Total Population
                        </a>
                    </li>
                    <li class="nav-item me-20px">
                        <a class="nav-link" data-bs-toggle="tab" href="#tab_sec3">
                            SC Population
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#tab_sec4">
                            ST Population
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade in active show" id="tab_sec2">
                        <?php
                        $totalMale = 0;
                        $totalFemale = 0;
                        $totalPopulation = 0;
                        foreach ($population as $count) {
                            $totalMale += (int) str_replace(',', '', $count['total_male']);
                            $totalFemale += (int) str_replace(',', '', $count['total_female']);
                            $totalPopulation += (int) str_replace(',', '', $count['total_population']);
                        }
                        ?>
                        <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 justify-content-center mb-5 md-mb-7">
                            <div class="col icon-with-text-style-10 md-mb-30px" data-bottom-top="transform: translateY(20px)" data-top-bottom="transform: translateY(-20px)">
                                <div class="feature-box bg-white h-100 justify-content-start box-shadow-quadruple-large box-shadow-quadruple-large-hover p-20px xl-p-30px border-radius-8px">
                                    <div class="feature-box-icon feature-box-icon-rounded w-100px h-100px rounded-circle mb-20px">
                                        <i class="fa-solid fa-mars icon-extra-large text-dark-gray"></i>
                                    </div>
                                    <div class="feature-box-content last-paragraph-no-margin">
                                        <span class="d-inline-block fw-600 text-dark-gray mb-5px fs-22">Total Male: <?= number_format($totalMale); ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col icon-with-text-style-10 md-mb-30px" data-bottom-top="transform: translateY(20px)" data-top-bottom="transform: translateY(-20px)">
                                <div class="feature-box bg-white h-100 justify-content-start box-shadow-quadruple-large box-shadow-quadruple-large-hover p-20px xl-p-30px border-radius-8px">
                                    <div class="feature-box-icon feature-box-icon-rounded w-100px h-100px rounded-circle mb-20px">
                                        <i class="fa-solid fa-venus icon-extra-large text-dark-gray"></i>
                                    </div>
                                    <div class="feature-box-content last-paragraph-no-margin">
                                        <span class="d-inline-block fw-600 text-dark-gray mb-5px fs-22">Total Female: <?= number_format($totalFemale); ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col icon-with-text-style-10 md-mb-30px" data-bottom-top="transform: translateY(20px)" data-top-bottom="transform: translateY(-20px)">
                                <div class="feature-box bg-white h-100 justify-content-start box-shadow-quadruple-large box-shadow-quadruple-large-hover p-20px xl-p-30px border-radius-8px">
                                    <div class="feature-box-icon feature-box-icon-rounded w-100px h-100px rounded-circle mb-20px">
                                        <i class="fa-regular fa-user icon-extra-large text-dark-gray"></i>
                                    </div>
                                    <div class="feature-box-content last-paragraph-no-margin">
                                        <span class="d-inline-block fw-600 text-dark-gray mb-5px fs-22">Total Population: <?= number_format($totalPopulation); ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <table class="w-100 border-radius-20px overflow-hidden" style="table-layout: fixed">
                            <thead>
                                <tr>
                                    <th><strong>Ward</strong></th>
                                    <th><strong>Male</strong></th>
                                    <th><strong>Female</strong></th>
                                    <th><strong>Total Population</strong></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($population as $count): ?>
                                    <tr>
                                        <td>Ward - <?= htmlspecialchars($count['ward_no']); ?></td>
                                        <td><i class="fa-solid fa-mars text-base-color me-5px"></i><?= number_format((int) str_replace(',', '', $count['total_male'])); ?></td>
                                        <td><i class="fa-solid fa-venus text-base-color me-5px"></i><?= number_format((int) str_replace(',', '', $count['total_female'])); ?></td>
                                        <td><i class="fa-regular fa-user text-base-color me-5px"></i><?= number_format((int) str_replace(',', '', $count['total_population'])); ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade in" id="tab_sec3">
                        <?php
                        $totalScMale = 0;
                        $totalScFemale = 0;
                        $totalScPopulation = 0;
                        foreach ($population as $count) {
                            $totalScMale += (int) str_replace(',', '', $count['sc_male']);
                            $totalScFemale += (int) str_replace(',', '', $count['sc_female']);
                            $totalScPopulation += (int) str_replace(',', '', $count['sc_population']);
                        }
                        ?>

                        <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 justify-content-center mb-5 md-mb-7">
                            <div class="col icon-with-text-style-10 md-mb-30px" data-bottom-top="transform: translateY(20px)" data-top-bottom="transform: translateY(-20px)">
                                <div class="feature-box bg-white h-100 justify-content-start box-shadow-quadruple-large box-shadow-quadruple-large-hover p-20px xl-p-30px border-radius-8px">
                                    <div class="feature-box-icon feature-box-icon-rounded w-100px h-100px rounded-circle mb-20px">
                                        <i class="fa-solid fa-mars icon-extra-large text-dark-gray"></i>
                                    </div>
                                    <div class="feature-box-content last-paragraph-no-margin">
                                        <span class="d-inline-block fw-600 text-dark-gray mb-5px fs-22">Total Male: <?= number_format($totalScMale); ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col icon-with-text-style-10 md-mb-30px" data-bottom-top="transform: translateY(20px)" data-top-bottom="transform: translateY(-20px)">
                                <div class="feature-box bg-white h-100 justify-content-start box-shadow-quadruple-large box-shadow-quadruple-large-hover p-20px xl-p-30px border-radius-8px">
                                    <div class="feature-box-icon feature-box-icon-rounded w-100px h-100px rounded-circle mb-20px">
                                        <i class="fa-solid fa-venus icon-extra-large text-dark-gray"></i>
                                    </div>
                                    <div class="feature-box-content last-paragraph-no-margin">
                                        <span class="d-inline-block fw-600 text-dark-gray mb-5px fs-22">Total Female: <?= number_format($totalScFemale); ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col icon-with-text-style-10 md-mb-30px" data-bottom-top="transform: translateY(20px)" data-top-bottom="transform: translateY(-20px)">
                                <div class="feature-box bg-white h-100 justify-content-start box-shadow-quadruple-large box-shadow-quadruple-large-hover p-20px xl-p-30px border-radius-8px">
                                    <div class="feature-box-icon feature-box-icon-rounded w-100px h-100px rounded-circle mb-20px">
                                        <i class="fa-regular fa-user icon-extra-large text-dark-gray"></i>
                                    </div>
                                    <div class="feature-box-content last-paragraph-no-margin">
                                        <span class="d-inline-block fw-600 text-dark-gray mb-5px fs-22">Total Population: <?= number_format($totalScPopulation); ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <table class="w-100 border-radius-20px overflow-hidden" style="table-layout: fixed">
                            <thead>
                                <tr>
                                    <th><strong>Ward</strong></th>
                                    <th><strong>Male</strong></th>
                                    <th><strong>Female</strong></th>
                                    <th><strong>Total SC Population</strong></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($population as $count): ?>
                                    <tr>
                                        <td>Ward - <?= htmlspecialchars($count['ward_no']); ?></td>
                                        <td><i class="fa-solid fa-mars text-base-color me-5px"></i><?= number_format((int) str_replace(',', '', $count['sc_male'])); ?></td>
                                        <td><i class="fa-solid fa-venus text-base-color me-5px"></i><?= number_format((int) str_replace(',', '', $count['sc_female'])); ?></td>
                                        <td><i class="fa-regular fa-user text-base-color me-5px"></i><?= number_format((int) str_replace(',', '', $count['sc_population'])); ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade in" id="tab_sec4">

                        <?php
                        $totalStMale = 0;
                        $totalStFemale = 0;
                        $totalStPopulation = 0;

                        foreach ($population as $count) {
                            $totalStMale += (int) str_replace(',', '', $count['st_male']);
                            $totalStFemale += (int) str_replace(',', '', $count['st_female']);
                            $totalStPopulation += (int) str_replace(',', '', $count['st_population']);
                        }
                        ?>
                        <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 justify-content-center mb-5 md-mb-7">
                            <div class="col icon-with-text-style-10 md-mb-30px" data-bottom-top="transform: translateY(20px)" data-top-bottom="transform: translateY(-20px)">
                                <div class="feature-box bg-white h-100 justify-content-start box-shadow-quadruple-large box-shadow-quadruple-large-hover p-20px xl-p-30px border-radius-8px">
                                    <div class="feature-box-icon feature-box-icon-rounded w-100px h-100px rounded-circle mb-20px">
                                        <i class="fa-solid fa-mars icon-extra-large text-dark-gray"></i>
                                    </div>
                                    <div class="feature-box-content last-paragraph-no-margin">
                                        <span class="d-inline-block fw-600 text-dark-gray mb-5px fs-22">Total Male: <?= number_format($totalStMale); ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col icon-with-text-style-10 md-mb-30px" data-bottom-top="transform: translateY(20px)" data-top-bottom="transform: translateY(-20px)">
                                <div class="feature-box bg-white h-100 justify-content-start box-shadow-quadruple-large box-shadow-quadruple-large-hover p-20px xl-p-30px border-radius-8px">
                                    <div class="feature-box-icon feature-box-icon-rounded w-100px h-100px rounded-circle mb-20px">
                                        <i class="fa-solid fa-venus icon-extra-large text-dark-gray"></i>
                                    </div>
                                    <div class="feature-box-content last-paragraph-no-margin">
                                        <span class="d-inline-block fw-600 text-dark-gray mb-5px fs-22">Total Female: <?= number_format($totalStFemale); ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col icon-with-text-style-10 md-mb-30px" data-bottom-top="transform: translateY(20px)" data-top-bottom="transform: translateY(-20px)">
                                <div class="feature-box bg-white h-100 justify-content-start box-shadow-quadruple-large box-shadow-quadruple-large-hover p-20px xl-p-30px border-radius-8px">
                                    <div class="feature-box-icon feature-box-icon-rounded w-100px h-100px rounded-circle mb-20px">
                                        <i class="fa-regular fa-user icon-extra-large text-dark-gray"></i>
                                    </div>
                                    <div class="feature-box-content last-paragraph-no-margin">
                                        <span class="d-inline-block fw-600 text-dark-gray mb-5px fs-22">Total Population: <?= number_format($totalStPopulation); ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <table class="w-100 border-radius-20px overflow-hidden" style="table-layout: fixed">
                            <thead>
                                <tr>
                                    <th><strong>Ward</strong></th>
                                    <th><strong>Male</strong></th>
                                    <th><strong>Female</strong></th>
                                    <th><strong>Total ST Population</strong></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($population as $count): ?>
                                    <tr>
                                        <td>Ward - <?= htmlspecialchars($count['ward_no']); ?></td>
                                        <td><i class="fa-solid fa-mars text-base-color me-5px"></i><?= number_format((int) str_replace(',', '', $count['st_male'])); ?></td>
                                        <td><i class="fa-solid fa-venus text-base-color me-5px"></i><?= number_format((int) str_replace(',', '', $count['st_female'])); ?></td>
                                        <td><i class="fa-regular fa-user text-base-color me-5px"></i><?= number_format((int) str_replace(',', '', $count['st_population'])); ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>