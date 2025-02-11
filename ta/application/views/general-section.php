<?php $this->load->view('widgets/page-title'); ?>

<section class="pt-60px pb-60px contain-background background-no-repeat background-position-right" style="background-image: url(assets/images/bg/officer-details-bg.png);background-size:200px">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 text-center justify-content-center align-content-center text-lg-start">
                <p class="fs-16 fw-400 text-black mb-5px">
                    ஆணையர் தாம்பரம் மாநகராட்சியின் நிர்வாகத் தலைவர் மற்றும் தலைமைச் செயலாளராக உள்ளார். நகர பொறியியலாளர், நகர சுகாதார அதிகாரி, வார்டு அலுவலகங்களின் உதவி ஆணையர்கள், நிர்வாகப் பொறியியலாளர் (திட்டமிடல்), உதவி ஆணையர் (தொழிலாளர் நியமனம்), உதவி ஆணையர் (வருவாய்) மற்றும் உதவி ஆணையர் (கணக்குகள்) ஆகியோர் ஆணையருக்கு உதவுகின்றனர்.
                </p>
                <p class="fs-16 fw-400 text-black mb-5px">
                    தொழில்நுட்பப் பிரிவு மாநகராட்சியின் பொது நிர்வாகத்தை கவனித்து, பணியாளர்களின் நியமனம், இடமாற்றம், சம்பளம் மற்றும் கொடுப்பனவுகள், வீடமைப்பு, ஊழியர் நலத்திட்டங்கள் உள்ளிட்டவைகளை நிர்வகிக்கிறது. மேலும், அரசாங்கத்துடனான தொடர்புகள், பிற துறைகளுடன் ஒத்துழைப்புகள், பொதுமக்கள் குறைகளுக்கான தீர்வுகள், சட்ட விவகாரங்கள் மற்றும் வழக்குகள், அலுவலக நிர்வாகம் உள்ளிட்ட அனைத்து செயல்பாடுகளையும் மேற்கொள்கிறது.
                </p>
                <p class="fs-16 fw-400 text-black mb-5px">
                    நிர்வாக வசதிக்காக, மாநகராட்சி ஐந்து மண்டலங்களாக பிரிக்கப்பட்டுள்ளது.ஒவ்வொரு மண்டலமும் ஒரு உதவி ஆணையர் தலைமையில் நிர்வகிக்கப்படுகிறது.
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