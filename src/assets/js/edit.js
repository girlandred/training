$(document).ready(function($) {
    $('body').on('click', '.edit', function() {
        var id = $(this).data('id');

        $.ajax({
            type: "POST",
            url: "edit.php",
            data: { id: id },
            dataType: 'json',
            success: function(res) {
                $('#custCrudModal').html("Edit");
                $('#ajax-modal').modal('show');
                $('#custId').val(res.custId);
                $('#fname').val(res.fname);
                $('#lname').val(res.lname);
                $('#email').val(res.email);
            }
        });
    });
});