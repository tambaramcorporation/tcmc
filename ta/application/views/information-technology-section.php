<?php $this->load->view('widgets/page-title'); ?>

<section class="pt-60px pb-60px contain-background background-no-repeat background-position-right" style="background-image: url(assets/images/bg/officer-details-bg.png);background-size:200px">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 text-center justify-content-center align-content-center text-lg-start">
                <ul class="p-0 list-style-04 fs-16 fw-400 text-black mb-40px">
                    <li class="text-grey">
                        தகவல் தொழில்நுட்பத் துறை அனைத்துப் கணினி மற்றும் தகவல் தொழில்நுட்ப சம்பந்தமான விஷயங்களின் ஒருங்கிணைப்பு மற்றும் செயலாக்கத்திற்கு பொறுப்பானது.
                    </li>
                    <li class="text-grey">
                        பயனுள்ள முடிவுகளை அடைய உதவும் வகையில், நிறுவனத்தின் பிற பிரிவுகளுடன் கலந்தாலோசித்து பணிக் கொள்கை உருவாக்கப்படுகிறது.
                    </li>
                </ul>
                <table id="example" class="mt-30px w-100 overflow-hidden border-radius-20px">
                    <thead>
                        <tr>
                            <th><strong>வ.எண்</strong></th>
                            <th><strong>பெயர்</strong></th>
                            <th><strong>பதவி</strong></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($informationtechnology as $contact): ?>
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