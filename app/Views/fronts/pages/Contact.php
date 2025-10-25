<section class="page-header-contact">
    <div class="lines">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </div>
    <div class="container">
        <div class="page-header-info text-left">
            <h4>Contact Us </h4>
            <h2>Contact Our Team.<br> We Are <span class="wow border-animation animated"
                    data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms;">Ready To Support You!</span></h2>

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
<section class="pd_50">
    <div class="efbg">
        <div class="container py_padding">
            <div class="contact_bg">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="cbox">
                            <div class="cbox_mask d-flex align-items-center justify-content-center">
                                <div class="row justify-content-center mt-2">
                                    <div class="col-6">
                                        <div class="text-center info">
                                            <h4 class="con-sm">For General Enquiries</h4>
                                            <p class="con-p">Monte Academy</p>
                                            <p class="con-p">Kazhakkoottam, Trivandrum</p>
                                            <a href="tel:+919400094037" class="con-p-tel">+919400094037</a>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="text-center info">
                                            <h4 class="con-sm">Corporate office</h4>
                                            <p class="con-p">Monte Academy </p>
                                            <p class="con-p">Office 403, Sajaya 2 Building, Dubai</p>
                                            <a href="tel:+971545658959" class="con-p-tel">+971545658959</a>
                                        </div>
                                    </div>
                                    <div class="col-8 extras">
                                        <div class="text-center info">
                                            <a href="mailto:info@monteacdemy.com" class="con-p-tel">info@monteacdemy.com</a>
                                            <p class="con-p">www.monteacademy.com</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 p_0">
                        <form class="form_pl">
                            <div class="form-row">
                                <div class="form-group col">
                                    <label for="firstName" class="fs-lb">Full Name </label>
                                    <input type="text" class="form-control input_bg_tra" id="firstName" placeholder="Full name">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="email" class="fs-lb">Your Email </label>
                                    <input type="email" class="form-control input_bg_tra" id="email" placeholder="Email">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="phone">Phone * <span id="succIcon"></span></label>
                                    <input class="form-control input_bg_tra" id="phone" name="phone" type="tel" autocomplete="off" data-intl-tel-input-id="0" onblur="checkPh()" onkeyup="rm_err()">
                                </div>

                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <span id="msgErr" class="bx_err"></span>
                                </div>
                                <!--div class="form-group col">
                                    <label for="phone">Phone *</label>
                                    <div class="input-group select-container">
                                        <select id="inputMobCode" class="custom-dropdown">
                                            <?php foreach ($mobPrefix as $prefixes): ?>
                                                    <option class="inputMobCode_options"><?= $prefixes ?></option>
                                                <?php endforeach; ?>
                                        </select>
                                        <input type="tel" class="form-control input_bg_tra" id="phone" placeholder="Phone" maxlength="15">
                                    </div>
                                </div-->
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputCountry" class="fs-lb">Where are you located? Country</label>
                                    <select id="inputCountry" class="form-control input_bg_tra">
                                        <option class="fs-ob" disabled selected>Please Select</option>
                                        <?php foreach ($countries as $country): ?>
                                            <option class="fs-ob"><?= $country ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="state" class="fs-lb">State/Province</label>
                                    <input type="text" class="form-control input_bg_tra" id="state" placeholder="Your State">
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group">
                                    <label class="fs-lb">Which programs/resources are you interested in? </label>
                                    <div class="form-check">
                                        <input class="form-check-input input_bg_tra" type="checkbox" value="" id="defaultCheck1">
                                        <label class="form-check-label fs-lb" for="defaultCheck1">
                                            PG Diploma in Montessori(12 Months)
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input input_bg_tra" type="checkbox" value="" id="defaultCheck2">
                                        <label class="form-check-label fs-lb" for="defaultCheck2">
                                            Diploma in Montessori(8 Months )
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input input_bg_tra" type="checkbox" value="" id="defaultCheck3">
                                        <label class="form-check-label fs-lb" for="defaultCheck3">
                                            Certificate course in Montessori(6 month )
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input input_bg_tra" type="checkbox" value="" id="defaultCheck4">
                                        <label class="form-check-label fs-lb" for="defaultCheck4">
                                            Early Learning Programs ( Age 2 to 6 )
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="luk" class="fs-lb">Let Us Know How You Heard About Us</label>
                                    <select id="luk" class="form-control input_bg_tra">
                                        <option class="fs-ob" disabled selected>Please Select</option>
                                        <option class="fs-ob">Web Search</option>
                                        <option class="fs-ob">Social Media</option>
                                        <option class="fs-ob">Magazine</option>
                                        <option class="fs-ob">School</option>
                                        <option class="fs-ob">Individual</option>
                                        <option class="fs-ob">Other</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="shortnote" class="fs-lb">Please write a short note</label>
                                    <br>
                                    <textarea class="input_bg_tra responsive-textarea" name="shortnote" rows="3" maxlength="200" id="shortnote"></textarea>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="tcheck">
                                    <label class="form-check-label fs-lb" for="tcheck">
                                        I have read and agree to Monteacademy's <a href="#" class="simple_link">Terms</a> and <a href="#" class="simple_link">Privacy Policy</a>
                                    </label>
                                </div>
                            </div>
                            <div class="form-row f-btn">
                                <button type="submit" id="btnSub" class="btn-custom">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-4">

            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
</section>
<section>
    <div class="map_view">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3058.190424530639!2d55.371313774522896!3d25.2766695284788!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f5d277719c887%3A0x57c19097c9ecb22e!2sSajaya%202%20Building!5e1!3m2!1sen!2sin!4v1734362289670!5m2!1sen!2sin" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="responsive-map"></iframe>
    </div>
</section>