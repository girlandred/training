$(document).ready(function($) {
    $('body').on('click', '.edit', function() {
        var id = $(this).data('id');

        $.ajax({
            type: "POST",
            url: "edit.php",
            data: { id: id, type: 'edit' },
            dataType: 'json',
            success: function(res) {
                $('#id').html(res.id);
                $('#title').html(res.title);
                $('#vendor').html(res.vendor);
                $('#country').html(res.country);
                $('#quantity').html(res.quantity);
            }
        });
    });
});