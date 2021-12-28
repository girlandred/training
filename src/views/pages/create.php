<div class="container min-h100">
    <div class="row">

        <div class="content col-12">
            <form action="create" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" name="title" id="title" required="required" class="text-input form-control">
                </div>
                <div class="mb-3">
                    <label for="vendor" class="form-label">Vendor</label>
                    <input type="text" name="vendor" id="vendor" required="required" class="text-input form-control">
                </div>
                <div class="mb-3">
                    <label for="country" class="form-label">Country</label>
                    <input type="text" name="country" id="country" required="required" class="text-input form-control">
                </div>
                <div class="mb-3">
                    <label for="quantity" class="form-label">Quantity</label>
                    <input type="text" name="quantity" id="quantity" required="required" class="text-input form-control">
                </div>
                <div class="mb-3">
                    <button type="submit" name="create" class="btn btn-primary">Create</button>
                </div>
            </form>

        </div>

    </div>
</div>