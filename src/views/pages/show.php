<?php include('handlers/show.php');
$limit = 4;
$sql = "SELECT COUNT(id) FROM products WHERE user_id = '$user_id'";
$rs_result = mysqli_query($conn, $sql);
$row = mysqli_fetch_row($rs_result);
$total_records = $row[0];
$total_pages = ceil($total_records / $limit);
?>

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
            <ul class="pagination">
                <?php
                if (!empty($total_pages)) {
                    for ($i = 1; $i <= $total_pages; $i++) {
                        if ($i == 1) {
                ?>
                            <li class="pageitem active" id="<?php echo $i;?>"><a href="javascript:void(0)" data-id="<?php echo $i;?>" class="page-link" ><?php echo $i;?></a></li>

                        <?php
                        } else {
                        ?>
                            <li class="pageitem" id="<?php echo $i; ?>"><a href="javascript:void(0)" data-id="<?php echo $i; ?>" class="page-link" data-id="<?php echo $i; ?>"><?php echo $i; ?></a></li>
                <?php
                        }
                    }
                }
                ?>
            </ul>
        </div>
    </div>
</div>