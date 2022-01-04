$(document).ready(function() {
    $(document).on('click', '.edit', function() {
        var id = $(this).data('id');
        var title = $('#title').val();
        var vendor = $('#vendor').val();
        var country = $('#country').val();
        var quantity = $('#quantity').val();
        $.ajax({
            type: 'POST',
            url: '/create',
            data: {
                'update': 1,
                'id': id,
                'title': title,
                'vendor': vendor,
                'country': country,
                'quantity': quantity,
                type: update
            },
            success: function(res) {
                $('#title').val('');
                $('#vendor').val('');
                $('#country').val('');
                $('#quantity').val('');
                $('.create').show();
                $('.edit').hide();
            }
        });
    });
});