<!-- Loader -->
<div id="global-loader" class="light-loader">
    <img src="<?= base_url('assets/images/loader/loader.svg'); ?>" class="loader-img" alt="Loader">
</div>
<!-- Loader -->

<!-- start::navbar  -->
<!-- whatsapp floating button -->
<a href="https://wa.me/+919400094037" class="float" target="_blank">
    <i class="fa fa-whatsapp my-float"></i>
</a>
<div class="container">
    <nav class="navbar navbar-expand-lg ">
        <a href="<?= base_url(); ?>" class="navbar-brand">
            <img src="<?= base_url(); ?>assets/images/logos/logo.png" alt="" class="img-fluid nav-brand nav_img" loading="lazy">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span><i class="fa fa-bars"></i></span>
        </button>
        <div class="collapse navbar-collapse mx-auto justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <p class="nav-link nav-hover-effect nav-link-ltr" role="button" aria-expanded="true">
                        Teacher Training Programs
                    </p>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item nav-hover-effect nav-link-ltr" href="<?= base_url('teacher-traning-programs/pg-diploma-in-montessori'); ?>">PG Diploma in Montessori</a>
                        </li>
                        <li><a class="dropdown-item nav-hover-effect nav-link-ltr" href="<?= base_url('teacher-traning-programs/diploma-in-montessori'); ?>">Diploma in Montessori </a></li>
                        <li><a class="dropdown-item nav-hover-effect nav-link-ltr" href="<?= base_url('teacher-traning-programs/certified-course-in-montessori'); ?>">Certified course in Montessori</a></li>
                        <li><a class="dropdown-item nav-hover-effect nav-link-ltr" href="<?= base_url('teacher-traning-programs/why-should-i-enroll'); ?>">Why should I Enroll ?</a>
                        </li>
                        <li><a class="dropdown-item nav-hover-effect nav-link-ltr" href="<?= base_url('teacher-traning-programs/testimonials'); ?>">Testimonials</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <p class="nav-link nav-hover-effect nav-link-ltr" role="button" aria-expanded="false">
                        Early Learning Programs
                    </p>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item nav-hover-effect nav-link-ltr" href="<?= base_url('early-learning-programs/our-curriculum'); ?>">Our Curriculum (Age 2 to 6)</a>
                        </li>
                        <li><a class="dropdown-item nav-hover-effect nav-link-ltr" href="<?= base_url('early-learning-programs/core-values'); ?>">Core Values</a></li>
                        <li><a class="dropdown-item nav-hover-effect nav-link-ltr" href="<?= base_url('early-learning-programs/testimonials'); ?>">Testimonials</a></li>
                    </ul>
                </li>
                <li class="nav-item ">
                    <a class="nav-link nav-hover-effect nav-link-ltr" href="<?= base_url('franchise'); ?>">Franchise</a>
                </li>

                <li class="nav-item dropdown">
                    <p class="nav-link nav-hover-effect nav-link-ltr" role="button" aria-expanded="false">
                        About
                    </p>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item nav-hover-effect nav-link-ltr" href="<?= base_url('about'); ?>">About Monte Academy</a></li>
                        <li><a class="dropdown-item nav-hover-effect nav-link-ltr" href="<?= base_url('about/faq'); ?>">Common Questions</a>
                        </li>
                        <li><a class="dropdown-item nav-hover-effect nav-link-ltr" href="<?= base_url('about/what-is-montessori'); ?>">What is Montessori?</a></li>
                    </ul>
                </li>
                <li class="nav-item ">
                    <a class="nav-link nav-hover-effect nav-link-ltr" href="<?= base_url('contact'); ?>">Contact</a>
                </li>
            </ul>
        </div>
    </nav>
</div>
<!-- end::navbar  -->