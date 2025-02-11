<?php $this->load->view('widgets/page-title'); ?>

<section class="pt-60px pb-60px contain-background background-no-repeat background-position-right" style="background-image: url(assets/images/bg/officer-details-bg.png);background-size:200px">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 text-center justify-content-center align-content-center text-lg-start">
                <p class="fs-16 fw-400 text-black mb-5px">
                    The City Planner (Town Planning Officer) is the over all in-charge of the section. He looks after the work of preparation of Master Plan, maintaining the land use areas as per the approved zoning uses, Licensing of plan approval, issues of insulation license for machineries of factories matters relating to land accusation and land alienation, action against the building constructed in deviation to the approved plan, issue of licenses under Places of Public Resort Act, booking of unauthorized construction, approval of lay out in the town limit, controlling and removing the encroachment in the town. Town planning Inspector,Draughtsman and Chainman are associating the City planner( Town Planning Officer) in the planning of future development of the town and allied works and all above activities.
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
                        <?php foreach ($townplanning as $contact): ?>
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