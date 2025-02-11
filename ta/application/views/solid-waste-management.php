<?php $this->load->view('widgets/page-title'); ?>
<section class="pt-60px pb-60px">
    <div class="container">
        <div class="row box-shadow p-50px" data-anime='{ "el": "childs", "translateY": [0, 0], "opacity": [0,1], "duration": 1200, "delay": 150, "staggervalue": 300, "easing": "easeOutQuad" }'>
            <div class="col-xl-3 col-lg-4 col-md-12 tab-style-05 md-mb-30px sm-mb-20px">
                <ul class="nav nav-tabs justify-content-center border-0 text-left fw-500 fs-18 alt-font">
                    <li class="nav-item"><a data-bs-toggle="tab" href="#tab_four1" class="border bg-light-gray nav-link active"><span> பொது சுகாதார பிரிவின் விவரம்</span></a></li>
                    <li class="nav-item"><a class="border bg-light-gray nav-link" data-bs-toggle="tab" href="#tab_four2"><span>மாநகராட்சியில் உள்ள மொத்த வாகனங்களின் விவரம்</span></a></li>
                    <li class="nav-item"><a class="border bg-light-gray nav-link" data-bs-toggle="tab" href="#tab_four3"><span>மாநகராட்சியில் உள்ள பணியாளர்கள் எண்ணிக்கை விவரம்</span></a></li>
                </ul>
            </div>
            <div class="col-xl-9 col-lg-8 col-md-12">
                <div class="tab-content">
                    <div class="tab-pane fade in active show" id="tab_four1">
                        <div class="row align-items-center">
                            <div class="col-xl-12 col-md-12">
                                <table class="w-100 p-30px" style="box-shadow: none !important;">
                                    <tbody class="d-block p-30px">
                                        <?php foreach ($swm as $waste): ?>
                                            <?php if ($waste['filter'] === 'பொது சுகாதார பிரிவின் விவரம்'): ?>
                                                <tr>
                                                    <td class="w-100px"><?= $waste['id']; ?></td>
                                                    <td><?= $waste['name']; ?></td>
                                                    <td><?= $waste['length']; ?></td>
                                                </tr>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade in" id="tab_four2">
                        <div class="row align-items-center">
                            <div class="col-xl-12 col-md-12">
                                <table class="w-100 p-30px" style="box-shadow: none !important;">
                                    <tbody class="d-block p-30px">
                                        <?php foreach ($swm as $waste): ?>
                                            <?php if ($waste['filter'] === 'மாநகராட்சியில் உள்ள மொத்த வாகனங்களின் விவரம்'): ?>
                                                <tr>
                                                    <td class="w-100px"><?= $waste['id']; ?></td>
                                                    <td><?= $waste['name']; ?></td>
                                                    <td><?= $waste['length']; ?></td>
                                                </tr>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade in" id="tab_four3">
                        <div class="row align-items-center">
                            <div class="col-xl-12 col-md-12">
                                <table class="w-100 p-30px" style="box-shadow: none !important;">
                                    <tbody class="d-block p-30px">
                                        <?php foreach ($swm as $waste): ?>
                                            <?php if ($waste['filter'] === 'மாநகராட்சியில் உள்ள பணியாளர்கள் எண்ணிக்கை  விவரம்'): ?>
                                                <tr>
                                                    <td class="w-100px"><?= $waste['id']; ?></td>
                                                    <td><?= $waste['name']; ?></td>
                                                    <td><?= $waste['length']; ?></td>
                                                </tr>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>