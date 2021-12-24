<?php include('handlers/formErrors.php'); ?>
<div class="container">
    <div class="row">

        <div class="content col-12">
            <form action="create" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="name" class="form-label">name</label>
                    <input type="text" name="name" id="name" required="required" class="text-input form-control">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" id="password" required="required" class="text-input form-control">
                </div>
                <div class="mb-3">
                    <button type="submit" name="create" class="btn btn-primary">Create</button>
                </div>
            </form>

        </div>

    </div>
</div>