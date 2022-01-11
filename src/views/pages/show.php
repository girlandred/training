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
                    <th>Action</th>
                </thead>
                <tbody>
                    <?php if ($result->num_rows > 0) : ?>
                        <?php foreach ($result as $key => $product) : ?>
                            <tr>
                                <td><?php echo $key + 1 ?></td>
                                <td><?php echo $product['title'] ?></td>
                                <td><?php echo $product['vendor'] ?></td>
                                <td><?php echo $product['country'] ?></td>
                                <td><?php echo $product['quantity'] ?></td>
                                <td>
                                    <a href="create/<?php echo $product['id']; ?>" class="edit">Edit</a>
                                </td>
                                <td>
                                    <a href="javascript:void(0)" class="delete" data-id="<?php echo $product['id']; ?>">Delete</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>