<?php $this->load->view('widgets/page-title'); ?>
<section class="pt-60px pb-60px contain-background background-no-repeat background-position-right" style="background-image: url(assets/images/bg/officer-details-bg.png);background-size:200px">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 justify-content-center align-content-center">
                <table class="w-100 border-radius-20px overflow-hidden">
                    <thead>
                        <tr>
                            <th><strong>Male</strong></th>
                            <th><strong>Female</strong></th>
                            <th><strong>Others</strong></th>
                            <th><strong>Total Voters</strong></th>
                            <th><strong>Ward No</strong></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($voters as $count):?>
                        <tr>
                            <td><i class="fa-solid fa-mars text-base-color me-5px"></i><?= $count['male'];?></td>
                            <td><i class="fa-solid fa-venus text-base-color me-5px"></i><?= $count['female'];?></td>
                            <td><i class="fa-regular fa-user text-base-color me-5px"></i><?= $count['others'];?></td>
                            <td><?= $count['total'];?></td>
                            <td>Ward - <?= $count['ward_no'];?></td>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>