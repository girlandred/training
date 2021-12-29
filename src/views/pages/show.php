<?php include('handlers/show.php'); ?>

<div class="container min-h100">
    <div class="row">
        <div class="content col-12">
            <table class="table">
                <thead>
                    <th>Title</th>
                    <th>Vendor</th>
                    <th>Country</th>
                    <th>Quantity</th>
                </thead>
                <tbody>
                    <?php foreach ($result as $product) : ?>
                        <tr id="<?php echo $product['id']; ?>">
                            <td id="title_val<?php echo $product['id'];?>"><?php echo $product['title'] ?></td>
                            <td id="vendor_val<?php echo $product['id'];?>"><?php echo $product['vendor'] ?></td>
                            <td id="country_val<?php echo $product['id'];?>"><?php echo $product['country'] ?></td>
                            <td id="quantity_val<?php echo $product['id'];?>"><?php echo $product['quantity'] ?></td>
                            <td>
                                <input type='button' class="delete_button" id="delete_button<?php echo $product['id'];?>" value="delete" onclick="delete_row('<?php echo $product['id'];?>');">
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>