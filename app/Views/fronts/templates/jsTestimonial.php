<script>
    function showTeacherTesModal(id) {
        $.get("<?= base_url('TeacherTraining/showFull/'); ?>" + id, function(resp) {
            // alert(resp);
            $("#testiContent").html(resp);
            $("#testiPopup").modal('show');
        })
    }

    function showEarlyTesModal(id) {
        $.get("<?= base_url('EarlyLearning/showFull/'); ?>" + id, function(resp) {
            //alert(resp);
            $("#testiContent").html(resp);
            $("#testiPopup").modal('show');
        })
    }
</script>