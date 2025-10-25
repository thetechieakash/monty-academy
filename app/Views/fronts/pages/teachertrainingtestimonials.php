<section class="page-header-enroll">
    <div class="lines">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </div>
    <div class="container">
        <div class="page-header-info text-left">
            <h4>Teacher Training Program Testimonials</h4>
            <h2 class="wow_text">Hear inspiring stories and experiences from <br><span class="wow border-animation animated"
                    data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms;">our graduates!</span>
            </h2>
        </div>
    </div>
    <div class="animated-dots">
        <span class="dot lf-left-right"></span>
        <span class="dot lf-up-down"></span>
        <span class="dot lf-up-down"></span>
        <span class="dot lf-rotate-center"></span>
        <span class="dot lf-left-right"></span>
        <span class="dot lf-rotate-center"></span>
    </div>
</section>

<section class="pd_50 light_grad">
    <div class="container py-5">
        <div class="row">
            <!-- Testimonials -->
            <?php foreach ($testimonials as $id => $testimonial): ?>
                <div class="col-md-4 mb-4" data-aos="fade-up">
                    <div class="testimonial-card">
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
                                <span class="short-text"><?= substr($testimonial['text'], 0, 100) ?>...</span>
                                <span class="full-text d-none"><?= $testimonial['text'] ?></span>
                                <a href="javascript:void(0)" class="see-more" onclick="showTeacherTesModal('<?= $testimonial['id']; ?>')">See more</a>
                            <?php else: ?>
                                <?= $testimonial['text'] ?>
                            <?php endif; ?>
                        </p>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</section>