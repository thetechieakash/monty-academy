<div class="modal fade modal_nopd" id="popupForm" tabindex="-1" role="dialog" aria-labelledby="popupFormLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="popupFormLabel">Enroll Now</h5>
                <i class="fa fa-times close" type="button close-btn" data-dismiss="modal" aria-label="Close"
                    aria-hidden="true"></i>
            </div>
            <div class="modal-body">
                <form id="form">
                    <div class="form-group">
                        <label for="firstName">First Name <span class="popover_star">*</span></label>
                        <input type="text" class="form-control popup_bg_tra" id="firstNamepopup"
                            placeholder="First Name">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone <span class="popover_star">*</span></label>
                            <input type="tel" class="form-control popup_bg_tra" id="phone" placeholder="Phone" aria-label="Phone Number">
                    </div>
                    <div class="form-group">
                        <label for="email">Email <span class="popover_star">*</span></label>
                        <input type="email" class="form-control popup_bg_tra" id="emailpopup" placeholder="Email">
                    </div>
                    <div class="warning d-none" id="emptyError">
                        <div class="warning__icon">
                            <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                        </div>
                        <div class="warning__title">Please fill all required fields.</div>
                    </div>
                    <div class="form-group">
                        <label>Choose Program <span class="popover_star">*</span></label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="startTime" id="option1"
                                value="Teacher Training Programs">
                            <label class="form-check-label" for="option1">
                                Teacher Training Programs
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="startTime" id="option2"
                                value="Teacher Training Programs">
                            <label class="form-check-label" for="option2">
                                Early Learning Programs
                            </label>
                        </div>
                    </div>
                    <button type="submit" class="white_btn m-0">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>