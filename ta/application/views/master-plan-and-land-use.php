<?php $this->load->view('widgets/page-title'); ?>

<section class="pt-40px pb-40px">
    <div class="container">
        <div class="row">
            <table id="example" class="mt-30px w-100">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Place</th>
                        <th>Download</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($reports as $report): ?>
                        <tr>
                            <td><?= $report['id']; ?></td>
                            <td><?= $report['place']; ?></td>
                            <td>
                                <a href="<?= base_url($report['link']); ?>" target="_blank" class="btn btn-extra-large">
                                    <img src="assets/images/icons/document.png"
                                        class="w-30px me-10px" /><?= $report['place']; ?>
                                    <img src="assets/images/icons/arrow-up-right.png" class="text-base-color ms-10px">
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</section>