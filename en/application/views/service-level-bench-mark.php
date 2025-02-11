<?php $this->load->view('widgets/page-title'); ?>

<section class="pt-60px pb-60px">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 text-center justify-content-center align-content-center text-lg-start">
                <table class="mt-30px w-100">
                    <thead>
                        <tr>
                            <th><strong>S.No</strong></th>
                            <th><strong>Name</strong></th>
                            <th><strong>Downloads</strong></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($slbm as $pdf): ?>
                            <tr>
                                <td><?= $pdf['id']; ?></td>
                                <td><?= $pdf['name']; ?></td>
                                <td><a href="assets/pdf/audited-financial-statement/<?= $pdf['link']; ?>"
                                        target="_blank"><img src="assets/images/icons/document.png" class="w-40px ms-10px">
                                    </a></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>


