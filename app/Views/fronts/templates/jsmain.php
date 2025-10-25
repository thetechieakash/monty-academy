<script src="<?= base_url('assets/js/jquery.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/owl.carousel.min.js'); ?>"></script>
<script src="<?= base_url(); ?>assets/js/main.js"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="<?= base_url(); ?>assets/js/intlTelInput.js"></script>
<script>
    AOS.init();
    $(document).ready(function() {
        // loader 
        $("#global-loader").fadeOut("slow");
        //Hide the loader when the page is fully loaded



        // Show the form modal when the page loads
        $('#popupForm').modal('show');

        // Prevent scrolling when the modal is open
        $('#popupForm').on('show.bs.modal', function() {
            $('body').addClass('modal-open');
        });

        // Allow scrolling when the modal is closed
        $('#popupForm').on('hidden.bs.modal', function() {
            $('body').removeClass('modal-open');
        });

        // Handle form submission
        $('#form').on('submit', function(e) {
            e.preventDefault();

            // Form validation
            const firstName = $('#firstNamepopup').val().trim();
            const email = $('#emailpopup').val().trim();
            const program = $('input[name="startTime"]:checked').val();

            if (!firstName || !email || !program) {
                // alert("Please fill all required fields.");
                $('#emptyError').removeClass('d-none');
                return;
            }

            // Hide the form modal
            $('#popupForm').modal('hide');

            // Display the success modal
            $('#outputName').text(firstName); // Set the first name in the success modal
            $('#popupSucess').modal('show');
        });

        // Success modal behavior
        $('#popupSucess').on('show.bs.modal', function() {
            $('body').addClass('modal-open');
        });

        $('#popupSucess').on('hidden.bs.modal', function() {
            $('body').removeClass('modal-open');
        });

        // button redirects
        $('#redirectCurriculumPage').click(function() {
            window.location.href = "<?= base_url(); ?>early-learning-programs/our-curriculum";
        });
        $('#redirectWhyEnrollPage').click(function() {
            window.location.href = "<?= base_url(); ?>teacher-traning-programs/why-should-i-enroll";
        });
        $('#redirectContactlPage').click(function() {
            window.location.href = "<?= base_url(); ?>contact";
        });
        $('#redirectPGCoursePage').click(function() {
            window.location.href = "<?= base_url(); ?>teacher-traning-programs/pg-diploma-in-montessori";
        });
    });
    var input = document.querySelector("#phone");
    var itix = intlTelInput(input, {
        utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@17.0.3/build/js/utils.js",
    });

    function checkPh() {
        var num = itix.getNumber();
        var isval = itix.isValidNumber();
        var contr = itix.getSelectedCountryData();
        //alert(contr.name);
        if (isval == false) {
            $("#msgErr").html("Invalid Mobile Number For " + contr.name);
            $("#msgErr").css("display", "inline-block");
            $("#succIcon").html("");
            $("#btnSub").attr("disabled", true);
            return false;
        } else {
            $("#succIcon").html('<i class="fa fa-check text-success"></i>');
            $("#btnSub").attr("disabled", false);
        }
    }

    function rm_err() {
        $("#msgErr").html("");
        $("#msgErr").css("display", "none");
    }
</script>