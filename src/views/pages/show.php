<?php include('handlers/show.php'); ?>

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
                    <?php if ($result->num_rows > 0) : ?>
                        <?php while ($product = mysqli_fetch_row($result)) : ?>

                            <tr>
                                <th scope="row"><?php echo $product[0]; ?></th>
                                <td><?php echo $product[1] ?></td>
                                <td><?php echo $product[2] ?></td>
                                <td><?php echo $product[2] ?></td>
                                <td><?php echo $product[4] ?></td>
                                <td>
                                    <a href="javascript:void(0)" class="delete" data-id="<?php echo $product[0]; ?>">Delete</a>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>