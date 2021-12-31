// $(document).ready(function($) {
//     $('body').on('click', '.edit', function() {
//         var id = $(this).data('id');

//         $.ajax({
//             type: "POST",
//             url: "/show",
//             data: { id: id, type: 'edit' },
//             dataType: 'json',
//             success: function(res) {
//                 $('#id').html(res.id);
//                 $('#title').html(res.title);
//                 $('#vendor').html(res.vendor);
//                 $('#country').html(res.country);
//                 $('#quantity').html(res.quantity);
//             }
//         });
//     });
// });

$(document).on('click', '.update', function(e) {
    var id = $(this).attr("data-id");
    var title = $(this).attr("data-title");
    var vendor = $(this).attr("data-vendor");
    var country = $(this).attr("data-country");
    var quantity = $(this).attr("data-quantity");
    $('#id').val(id);
    $('#title').val(title);
    $('#vendor').val(vendor);
    $('#country').val(country);
    $('#quantity').val(quantity);
});

$(document).on('click', '#update', function(e) {
    var data = $("#update_form").serialize();
    $.ajax({
        data: data,
        type: "POST",
        url: "/show",
        success: function(dataResult) {
            var dataResult = JSON.parse(dataResult);
            if (dataResult.statusCode == 200) {
                $('#editEmployeeModal').modal('hide');
                alert('Data updated successfully !');
                location.reload();
            } else if (dataResult.statusCode == 201) {
                alert(dataResult);
            }
        }
    });
});