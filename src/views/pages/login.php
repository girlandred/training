<div class="container min-h100">
    <div class="row">
        <div class="content col-12">
            <form method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" name="username" id="username" required="required" class="text-input form-control">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" id="password" required="required" class="text-input form-control">
                </div>
                <div class="d-grid gap-2 col-3 mx-auto">
                    <button type="submit" name="login" class="btn btn-primary">Login</button>
                    <span class=" m-auto">Or</span>
                    <a href="/register" class="btn btn-primary" type="button">Sign Up</a>
                </div>
            </form>

        </div>
    </div>

</div>