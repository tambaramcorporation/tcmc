<?php $this->load->view('widgets/page-title'); ?>

<section class="pt-60px pb-60px contain-background background-no-repeat background-position-right" style="background-image: url(assets/images/bg/officer-details-bg.png);background-size:200px">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 text-center justify-content-center align-content-center text-lg-start">
                <p class="fs-16 fw-400 text-black mb-5px">
                    The Commissioner is the executive authority and the head of administration of Tambaram City Corporation. The Commissioner is assisted by the City Engineer, City Health Officer, Assistant Commissioners of ward offices, Executive Engineer (Planning), Assistant Commissioner (Personnel), Assistant Commissioner (Revenue) and Assistant Commissioner (Accounts).
                </p>
                <p class="fs-16 fw-400 text-black mb-5px">
                    The personnel department looks after general administration of the Corporation including establishment matters such as appointments, transfers, pay and allowances, housing employee welfare schemes etc., correspondence with Government and other departments, public relations, redressal of public grievances, legal matters and lawsuits and all matters related to office administration. For administrative convenience, the Corporation has been divided into Five zones, namely
                </p>
                <p class="fs-16 fw-400 text-black mb-5px">
                    Each zone is headed by an Assistant Commissioners
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
                        <?php foreach ($general as $contact): ?>
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