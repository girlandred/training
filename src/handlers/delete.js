// function delete_row(id) {
//     $.ajax({
//         type: 'POST',
//         url: 'delete.php',
//         data: {
//             delete_row: 'delete_row',
//             product_id: id,
//         },
//         success: function(response) {
//             if (response == "success") {
//                 var product = document.getElementById("product" + id);
//                 product.parentNode.removeChild(product);
//             }
//         }
//     });
// }