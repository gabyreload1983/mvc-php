<?php $this->start('head') ?>
<?php $this->end() ?>

<?php $this->start('body') ?>
<div class="container">
    <div class="row">
        <div class="col-12 col-lg-6 col-md-4 bg-secondary mt-3 border rounded">
            <h3>Login</h3>
            <form action="<?=PROOT?>register/login">
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="email" class="form-control" id="username" name="username">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="email" class="form-control" id="password" name="password">
                </div>
                <div class="form-check mb-3">
                    <label class="form-check-label" for="remember_me">
                        Remember me
                    </label>
                    <input class="form-check-input" type="checkbox" value="" id="remember_me" name="remember_me">
                </div>
                <div class="mb-3">
                    <input class="btn btn-primary" type="submit" value="Login">
                </div>
                <div class="mb-3 text-end">
                    <a href="<?=PROOT?>register/register" class="text-dark">Register</a>
                </div>
            </form>
        </div>
    </div>
</div>
<?php $this->end() ?>