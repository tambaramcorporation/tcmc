<?php $this->load->view('widgets/page-title'); ?>

<section class="pt-60px pb-60px contain-background background-no-repeat background-position-right" style="background-image: url(assets/images/bg/officer-details-bg.png);background-size:200px">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 text-center justify-content-center align-content-center text-lg-start">
                <p class="fs-16 fw-400 text-black mb-5px">
                    நகர திட்டமிடல் அதிகாரி (சிட்டி பிளானர்) இந்த பிரிவின் முழுப்பொறுப்பை வகிக்கிறார். நகரின் முதன்மை திட்டத்தை தயாரிக்கும் பணிகளை மேற்பார்வையிடுவதுடன், அங்கீகரிக்கப்பட்ட மண்டலப் பயன்பாடுகளுக்கு ஏற்ப நிலப் பயன்பாட்டு பகுதிகளை பராமரிக்கவும் பொறுப்பேற்கிறார்.
                </p>
                <p class="fs-16 fw-400 text-black mb-5px">
                    அத்துடன், கட்டிட திட்ட அங்கீகாரம் வழங்குதல், தொழிற்சாலைகளில் இயந்திரங்கள் பயன்பாட்டிற்கான ஒழுங்குமுறை அனுமதி வழங்குதல், நிலம் கைப்பற்றுதல் மற்றும் ஒதுக்கீடு தொடர்பான விடயங்களை மேலாண்மை செய்தல், அங்கீகரிக்கப்பட்ட திட்டத்திற்கு முரணாக கட்டிடங்கள் கட்டப்பட்டால் நடவடிக்கை எடுத்தல், பொது மக்களுக்கு பயன்படும் இடங்களுக்கான அனுமதி வழங்குதல், அனுமதியில்லாத கட்டிடங்களை பதிவுசெய்தல், நகர எல்லையில் நிலமைப் படி திட்டங்களை அங்கீகரித்தல், நகரத்தில் நடந்துகொண்டிருக்கும் மற்றும் புதிய அபிவிருத்தி பணிகளுக்குத் தேவையான திட்டமிடல் செயல்பாடுகளில் ஈடுபடுகிறார்.
                </p>
                <p class="fs-16 fw-400 text-black mb-5px">
                    நகர திட்டமிடும் அதிகாரிக்கு நகர திட்டமிடும் ஆய்வாளர், வரைதொழிலாளர்கள் (Draughtsman), மற்றும் செயின்மேன் (Chainman) ஆகியோர் துணை நிற்கிறார்கள்.
                </p>
                <p class="fs-16 fw-400 text-black mb-5px">
                    மேற்கண்ட அனைத்து நடவடிக்கைகளையும் சரியாகக் கண்காணித்து, நகர வளர்ச்சியை ஒருங்கிணைப்பது நகர திட்டமிடும் அதிகாரியின் முக்கிய பொறுப்பாகும்.
                </p>
                <table id="example" class="mt-30px w-100 border-radius-20px overflow-hidden">
                    <thead>
                        <tr>
                            <th><strong>வ.எண்</strong></th>
                            <th><strong>பெயர்</strong></th>
                            <th><strong>பதவி</strong></th>
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