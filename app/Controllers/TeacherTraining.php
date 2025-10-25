<?php

namespace App\Controllers;

class TeacherTraining extends BaseController
{
    public function PgDiploma()
    {
        return view('fronts/templates/layout') .
            view('fronts/templates/header') .
            view('fronts/pages/PgDiploma') .
            view('fronts/templates/footer') .
            view('fronts/templates/jsmain');
    }

    public function Diploma()
    {
        return view('fronts/templates/layout') .
            view('fronts/templates/header') .
            view('fronts/pages/Diploma') .
            view('fronts/templates/footer') .
            view('fronts/templates/jsmain');
    }

    public function CertificateCourse()
    {
        return view('fronts/templates/layout') .
            view('fronts/templates/header') .
            view('fronts/pages/CertificateCourse') .
            view('fronts/templates/footer') .
            view('fronts/templates/jsmain');
    }
    public function Enroll()
    {
        return view('fronts/templates/layout') .
            view('fronts/templates/header') .
            view('fronts/pages/enroll') .
            view('fronts/templates/footer') .
            view('fronts/templates/jsmain');
    }
    public function Testimonials()
    {
        $data['testimonials'] = $this->testimonialsData();
        return view('fronts/templates/layout', $data) .
            view('fronts/templates/header') .
            view('fronts/pages/teachertrainingtestimonials') .
            view('fronts/templates/footer') .
            view('fronts/templates/tespopup') .
            view('fronts/templates/jsmain') .
            view('fronts/templates/jsTestimonial');
    }
    function testimonialsData()
    {
        $testimonials = [
            [
                "id" => 1,
                "fstletter" => "N",
                "image" => "naziya_nazer.jpg",
                "name" => "Nazia Nazar",
                "time" => "5 months ago",
                "star" => 5,
                "text" => "Really worth attending the course for its comprehensive curriculum, experienced faculty, and practical approach. Best place for those seeking a career in teaching field. Ramla Ma'am s guidance helped me in achieving high self confidence. They also provide assistance in placement"
            ],
            [
                "id" => 2,
                "fstletter" => "S",
                "image" => "",
                "name" => "Saritha Satheesh",
                "time" => "4 months ago",
                "star" => 4,
                "text" => "I'am so grateful,i got an opportunity to do Montessori Training. Ramla ma'am is really a professional in training her trainese. 1 feel so proud and happy to say that i was once her student."
            ],
            [
                "id" => 3,
                "fstletter" => "S",
                "image" => "Dr_Sameer_sainulabdeen.jpg",
                "name" => "Dr sameer sainulabdeen Nephrologist",
                "time" => "4 months ago",
                "star" => 5,
                "text" => "MTTC is d most job secured course. Friendly and thrilling classes of maam helped me to achieve d qualities of a good teacher that fulfilled my carrier. FARZANA"
            ],
            [
                "id" => 4,
                "fstletter" => "D",
                "image" => "Dhanya_amal.jpg",
                "name" => "Dhanya Amal",
                "time" => "4 months ago",
                "star" => 4,
                "text" => "It's a great institution The dedication of the teachers and staff is commendable I am a previous student of it and recommend it to all"
            ],
            [
                "id" => 5,
                "fstletter" => "S",
                "image" => "syama_sreeji.jpg",
                "name" => "Syama sreeji",
                "time" => "4 months ago",
                "star" => 5,
                "text" => "Montessori is my success...| grew a lot ,| got several opportunities in schools all these wonders happened because of Montessori"
            ],
            [
                "id" => 6,
                "fstletter" => "R",
                "image" => "Rubiya.jpg",
                "name" => "Rubiya",
                "time" => "4 months ago",
                "star" => 4,
                "text" => "If you are searching for a place to learn a Montessori course one of the best places in Trivandrum"
            ],
            [
                "id" => 7,
                "fstletter" => "P",
                "image" => "",
                "name" => "Dr Princy Sebastian",
                "time" => "4 months ago",
                "star" => 5,
                "text" => "Amazing staffs with lovely mindset. Study methods are excellent... Very happy and satisfied."
            ],
            [
                "id" => 8,
                "fstletter" => "R",
                "image" => "",
                "name" => "Rea Shiny",
                "time" => "4 months ago",
                "star" => 5,
                "text" => "I am impressed with your curriculum and teaching methods which is different from other schools."
            ]
        ];
        return $testimonials;
    }


    public function showFull($ids)
    {
        $id = (int) $ids;
        $testimonials = $this->testimonialsData();
        $result = array_filter($testimonials, function ($testimonial) use ($id) {
            return $testimonial['id'] === $id;
        });

        // Reset the array keys (optional)
        $result = array_values($result);
        $testimonial = !empty($result) ? $result[0] : null;

?>
        <div class="modal-body">
            <div class="testimonial-card tes_card_mob">
                <div class="row justify-content-start align-items-start mb-3">
                    <div class="col-3">
                        <?php if (!empty($testimonial['image'])): ?>
                            <img src="<?= base_url('assets/images/testimonial/' . $testimonial['image']) ?>"
                                alt="<?= $testimonial['fstletter'] ?>"
                                class="testimonial-img">
                        <?php else: ?>
                            <div class="testimonial_empty_img">
                                <?= strtoupper($testimonial['fstletter']) ?>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="col-7 p-0 justify-content-start">
                        <div class="tes_card_title"><?= $testimonial['name'] ?></div>
                        <div class="d-flex align-items-center">
                            <div class="tes_card_time pr-2"><?= $testimonial['time'] ?></div>
                            <div>
                                <?php for ($i = 1; $i <= $testimonial['star']; $i++): ?>
                                    <i class="fa fa-star tes_card_stars" aria-hidden="true"></i>
                                <?php endfor ?>
                                <?php for ($i = 1; $i <= (5 - $testimonial['star']); $i++): ?>
                                    <i class="fa fa-star-o tes_card_stars" aria-hidden="true"></i>
                                <?php endfor ?>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="tes_card_para">
                    <?php if (strlen($testimonial['text']) > 100): ?>
                        <span class="short-text"><?= $testimonial['text']; ?>...</span>
                        <span class="full-text d-none"><?= $testimonial['text'] ?></span>

                    <?php else: ?>
                        <?= $testimonial['text'] ?>
                    <?php endif; ?>
                </p>
            </div>
        </div>
<?php
    }
}
