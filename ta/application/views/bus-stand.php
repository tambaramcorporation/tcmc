<?php $this->load->view('widgets/page-title'); ?>
<section class="pt-60px pb-60px position-relative contain-background background-no-repeat background-position-right" style="background-image: url(assets/images/bg/about-bg.png);">
    <div class="container">
        <div class="row g-0 mb-5 sm-mb-30px">
            <div class="col event-style-03 bg-white box-shadow-quadruple-large">
                <ul
                    class="nav nav-tabs flex-wrap flex-md-nowrap fs-17 md-fs-15 fw-500 alt-font text-center bg-base-color border-color-white">
                    <li class="nav-item">
                        <a class="nav-link active d-flex flex-column align-items-center text-center" data-bs-toggle="tab" href="#reform-1">
                            <!-- <img src="assets/images/icons/27.png" class="w-60px mb-2"> -->
                            <!-- <img src="assets/images/icons/22.png" class="w-60px mb-2"> -->
                            <span>பேருந்து நிலையம்</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex flex-column align-items-center text-center" data-bs-toggle="tab" href="#reform-2">
                            <!-- <img src="assets/images/icons/28.png" class="w-60px mb-2"> -->
                            <!-- <img src="assets/images/icons/23.png" class="w-60px mb-2"> -->
                            பேருந்து நிறுத்துமிடங்கள்
                        </a>
                    </li>
                    <!-- <style>
                        .nav-link img {
                            display: none;
                        }

                        .nav-link.active {
                            background-color: var(--base-color);
                            color: white;
                        }

                        .nav-link:not(.active) {
                            background-color: white;
                            color: #000;
                        }

                        .nav-link.active img:first-of-type {
                            display: block;
                        }

                        .nav-link:not(.active) img:last-of-type {
                            display: block;
                        }
                    </style> -->

                </ul>
                <div class="tab-content ps-65px pe-65px pt-45px pb-45px sm-p-30px xs-p-20px">
                    <div class="tab-pane fade in active show" id="reform-1">
                        <div
                            class="row row-cols-1 row-cols-xl-2 row-cols-lg-2 row-cols-md-2 justify-content-center">
                            <div class="col">
                                <table class="w-100">
                                    <tr>
                                        <th>வ.எண்</th>
                                        <th>பேருந்து நிலையம்</th>
                                    </tr>
                                    <?php $counter = 1;
                                    ?>
                                    <?php foreach ($busstand as $bus): ?>
                                        <?php if ($bus['filter'] === 'bus-stand'): ?>
                                            <tr>
                                                <td><?= $counter++;
                                                    ?></td>
                                                <td><?= $bus['name']; ?></td>
                                            </tr>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade in" id="reform-2">
                        <div
                            class="row row-cols-1 row-cols-xl-2 row-cols-lg-2 row-cols-md-2 justify-content-center">
                            <div class="col">
                                <table class="w-100">
                                    <tr>
                                        <th>வ.எண்</th>
                                        <th>பேருந்து நிறுத்துமிடங்கள்</th>
                                    </tr>
                                    <?php $counter = 1;
                                    ?>
                                    <?php foreach ($busstand as $bus): ?>
                                        <?php if ($bus['filter'] === 'bus-shelters'): ?>
                                            <tr>
                                                <td><?= $counter++;
                                                    ?></td>
                                                <td><?= $bus['name']; ?></td>
                                            </tr>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>