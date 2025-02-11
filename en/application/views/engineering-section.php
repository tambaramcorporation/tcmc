<?php $this->load->view('widgets/page-title'); ?>

<section class="pt-60px pb-60px contain-background background-no-repeat background-position-right" style="background-image: url(assets/images/bg/officer-details-bg.png);background-size:200px">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 text-center justify-content-center align-content-center text-lg-start">
                <p class="fs-16 fw-400 text-black mb-5px">
                    The City Engineer is the over-all in-charge of Engineering Section. City Engineer is controlling the Executive Engineer,Assistant Executive Engineer , Assistant Engineer, Junior Engineer, Technical Assistant, Electrical Superintendent, Wireman, Helper and Fitter working in the section. The City Engineer looks after the maintenance, Street lights, Road laying, construction of building and drainage, Maintenance of parks, head works and municipal vehicles. The other subordinate officers are assisting the City Engineer to look after the above work.
                </p>
                <table id="example" class="mt-30px w-100 border-radius-20px overflow-hidden">
                    <thead>
                        <tr>
                            <th><strong>S.No</strong></th>
                            <th><strong>Name</strong></th>
                            <th><strong>Designation</strong></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($engineering as $contact): ?>
                            <tr>
                                <td><?= $contact['id']; ?></td>
                                <td><?= $contact['name']; ?></td>
                                <td><?= $contact['designation']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>