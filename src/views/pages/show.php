<?php include('handlers/show.php'); ?>
<?php include('handlers/delete.php'); ?>

<div class="container min-h100">
    <div class="row">
        <div class="content col-12">
            <table class="table">
                <thead>
                    <th>#</th>
                    <th>Title</th>
                    <th>Vendor</th>
                    <th>Country</th>
                    <th>Quantity</th>
                </thead>
                <tbody>
                    <?php foreach ($result as $key => $product) : ?>
                        <tr>
                            <td><?php echo $key + 1; ?></td>
                            <td><?php echo $product['title'] ?></td>
                            <td><?php echo $product['vendor'] ?></td>
                            <td><?php echo $product['country'] ?></td>
                            <td><?php echo $product['quantity'] ?></td>
                            <td><button type="submit" name="delete" class="btn btn-primary">Delete</button></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>