function delete_row(id) {
    $.ajax({
        type: 'post',
        url: 'delete.php',
        data: {
            delete_row: 'delete_row',
            prod_id: id,
        },
        success: function(response) {
            if (response == "success") {
                var product = document.getElementById("product" + id);
                product.parentNode.removeChild(product);
            }
        }
    });
}