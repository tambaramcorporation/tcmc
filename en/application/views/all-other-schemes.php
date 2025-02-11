<?php $this->load->view('widgets/page-title'); ?>


<section class="pt-60px pb-60px position-relative">
    <div class="container">
        <div class="row justify-content-center">
            <?php foreach ($schemes as $all): ?>
                <div class="col-md-6">
                    <div class="m-30px">
                        <div class="d-flex h-100 services-box border">
                            <div class="services-box-content p-40px">
                                <style>
                                    tbody,
                                    tr,
                                    td {
                                        font-size: 16px;
                                        width: 300px;
                                    }

                                    table,
                                    tbody {
                                        box-shadow: none;
                                        background-color: white !important;
                                    }

                                    table,
                                    tbody tr {
                                        text-align: center !important;
                                    }
                                </style>
                                <table class="border-radius-20px p-30px overflow-hidden">
                                    <thead>
                                        <tr>
                                            <th colspan="2" class="text-center fs-20 fw-700"><?= $all['scheme']; ?></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>No of Project</td>
                                            <td><?= $all['no_of_projects']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Project Cost (in Cr) </td>
                                            <td><?= $all['project_cost']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Completed </td>
                                            <td><?= $all['completed']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>On Going </td>
                                            <td><?= $all['on_going']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Not Started </td>
                                            <td><?= $all['not_started']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Cancelled </td>
                                            <td><?= $all['cancelled']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Amount Received (in Cr)</td>
                                            <td><?= $all['amount_received']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Expenditure Made (in Cr)</td>
                                            <td><?= $all['expenditure_made']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>% of Expenditure w.r.t. Amount Recieved</td>
                                            <td><?= $all['percentage_of_expenditure_wrt_amount_received']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>% of Expenditure w.r.t. AS Amount (in Cr) </td>
                                            <td><?= $all['percentage_of_expenditure_wrt_as_amount']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Road Length in Kms</td>
                                            <td><?= $all['road_length_km']; ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>