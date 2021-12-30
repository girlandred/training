$(document).ready(function($) {
    $('body').on('click', '.delete', function() {
        if (confirm("Delete Record?") == true) {
            var id = $(this).data('id');
            $.ajax({
                type: "POST",
                url: "/show",
                data: { id: id, type: 'delete' },
                dataType: 'json',
                success: function(res) {
                    $('#title').html(res.title);
                    $('#vendor').html(res.vendor);
                    $('#country').html(res.country);
                    $('#quantity').html(res.quantity);
                    window.location.reload();
                }
            });
        }
    });
});