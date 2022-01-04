<?php include('handlers/create.php'); ?>

<div class="container min-h100">
    <div class="row">
        <?php if ($result->num_rows > 0) : ?>

            <?php foreach ($result as $row) { ?>
                <div class="content col-12">
                    <form method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" name="title" id="title" required="required" class="text-input form-control" value="<?= $row['title'] ?? ''; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="vendor" class="form-label">Vendor</label>
                            <input type="text" name="vendor" id="vendor" required="required" class="text-input form-control" value="<?= $row['vendor'] ?? ''; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="country" class="form-label">Country</label>
                            <input type="text" name="country" id="country" required="required" class="text-input form-control" value="<?= $row['country'] ?? ''; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="quantity" class="form-label">Quantity</label>
                            <input type="text" name="quantity" id="quantity" required="required" class="text-input form-control" value="<?= $row['quantity'] ?? ''; ?>">
                        </div>
                        <div class="mb-3">
                            <button type="submit" name="<?= (empty($id)) ? 'create' : 'edit'; ?>" class="btn btn-primary" data-id="<?= $id ?? ''; ?>"><?= (empty($id)) ? 'Create' : 'Edit'; ?></button>
                        </div>
                    </form>

                </div>
            <?php } ?>
        <?php endif; ?>


    </div>

</div>