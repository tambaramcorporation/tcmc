<?php $this->load->view('widgets/page-title'); ?>
<section class="pt-60px pb-60px position-relative">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 justify-content-center align-content-center">
                <table class="w-100 border-radius-20px overflow-hidden">
                    <thead>
                        <tr>
                            <th><strong>Drains</strong></th>
                            <th><strong>Length</strong></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($swd as $count):?>
                        <tr>
                            <td><?= $count['drains'];?></td>
                            <td><?= $count['length'];?></td>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>