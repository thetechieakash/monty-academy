<?php

namespace App\Controllers;

class EarlyLearning extends BaseController
{
    public function Curriculam()
    {
        return view('fronts/templates/layout') .
            view('fronts/templates/header') .
            view('fronts/pages/Curriculam') .
            view('fronts/templates/footer') .
            view('fronts/templates/jsmain');
    }
    public function CoreValues()
    {
        return view('fronts/templates/layout') .
            view('fronts/templates/header') .
            view('fronts/pages/CoreValues') .
            view('fronts/templates/footer') .
            view('fronts/templates/jsmain');
    }
    public function Testimonials()
    {
        $data['testimonials'] = $this->testimonialsData();
        return view('fronts/templates/layout', $data) .
            view('fronts/templates/header') .
            view('fronts/pages/earlylearningtestimonials') .
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
                "fstletter" => "S",
                "image" => "Sheetal_sanjeev.jpg",
                "name" => "Sheetal Sanjeev",
                "time" => "4 months ago",
                "star" => 5,
                "text" => "It has been 6 months since my daughter started going to this school...she really loves to go and each day she is taught different things and activities... personally recommend every one Kids Planet Montessori as it is really reliable and good place for kids to be... Really appreciate the entire team..."
            ],
            [
                "id" => 2,
                "fstletter" => "R",
                "image" => "",
                "name" => "Reena Dcosta",
                "time" => "4 months ago",
                "star" => 4,
                "text" => "Best nursery... All staffs r very good & polite. Within one month only | can see discipline & changes in my Kids behavior. Highly recommend this school for anyone..."
            ],
            [
                "id" => 3,
                "fstletter" => "D",
                "image" => "",
                "name" => "Deepa venkatachalam",
                "time" => "4 months ago",
                "star" => 5,
                "text" => "My daughter was joined this school to may month, this is third month, she is like and very interesting to going to school. Very friendly staffs Good keep it up."
            ],
            [
                "id" => 4,
                "fstletter" => "V",
                "image" => "valli_priya.jpg",
                "name" => "Valli Priya",
                "time" => "4 months ago",
                "star" => 5,
                "text" => "My baby is safe and happy learning which is good but small expectation like update on the food which was provided on time in WhatsApp group thats it"
            ],
            [
                "id" => 5,
                "fstletter" => "V",
                "image" => "vishwanadhan _s.jpg",
                "name" => "Viswanathan S",
                "time" => "4 months ago",
                "star" => 4,
                "text" => "Our daughter is going to this school for almost 6 months now. Very nice set of staffs, very supportive and I will definitely recommend this school"
            ],
            [
                "id" => 6,
                "fstletter" => "A",
                "image" => "ancy_gevarghees.jpg",
                "name" => "Ancy Geevarghese",
                "time" => "4 months ago",
                "star" => 5,
                "text" => "Very good nursery for kids with supporting and lovely teachers. My daughter has been going to kids planet from past 1year and very much happy and satisfied with all staff over there"
            ],
            [
                "id" => 7,
                "fstletter" => "J",
                "image" => "jinto_poulose.jpg",
                "name" => "Jinto Poulose",
                "time" => "4 months ago",
                "star" => 5,
                "text" => "Really I have an excellent experience with kids planet they are taking care of my son very well and he like to go always staffs are really friendly and polite really they are doing wonderful"
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
