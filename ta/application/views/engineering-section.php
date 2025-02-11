<?php $this->load->view('widgets/page-title'); ?>

<section class="pt-60px pb-60px contain-background background-no-repeat background-position-right" style="background-image: url(assets/images/bg/officer-details-bg.png);background-size:200px">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 text-center justify-content-center align-content-center text-lg-start">
                <p class="fs-16 fw-400 text-black mb-5px">
                    நகரப் பொறியியலாளர் பொறியியல் பிரிவின் ஒட்டுமொத்த பொறுப்பாளராக உள்ளார். நகரப் பொறியியலாளர், செயல் பொறியியலாளர், உதவி செயல் பொறியியலாளர், உதவி பொறியியலாளர், இளநிலை பொறியியலாளர், தொழில்நுட்ப உதவியாளர், மின்சார சூப்பரின்டெண்ட், வயர்மேன், உதவி பணியாளர் மற்றும் ஃபிட்டர் ஆகியோரின் செயல்பாடுகளை கட்டுப்படுத்துகிறார். நகரப் பொறியியலாளர், சாலை விளக்குகள், சாலைகள் அமைத்தல், கட்டிடங்களும் குளம் அமைப்பும், பூங்காக்களின் பராமரிப்பு, தலைப்பணி மற்றும் நகராட்சியின் வாகனங்களின் பராமரிப்பு போன்றவற்றை கவனித்துக் கொண்டிருக்கிறார். மேலே குறிப்பிடப்பட்டுள்ள பணிகளை கவனிக்க அதிகாரிகள் நகரப் பொறியியலாளருக்கு உதவுகிறார்கள்.
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