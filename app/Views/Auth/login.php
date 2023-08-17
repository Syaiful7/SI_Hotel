<?= $this->extend($config->viewLayout) ?>
<?= $this->section('main') ?>

<div class="container">
    <div class="row">
        <div class="col-sm-6 offset-sm-3">

            <div class="login-box">
                <div class="login-logo">
                    <a href="/"><b>SI</b> Hotel</a>
                </div>
                <!-- /.login-logo -->
                <div class="card">
                    <div class="card-body login-card-body">
                        <p class="login-box-msg">Sign in to start your session</p>

                        <?= view('App\Views\Auth\_message_block') ?>

                        <form action="<?= url_to('login') ?>" method="post">
                            <?= csrf_field() ?>
                            <?php if ($config->validFields === ['email']): ?>
                            <div class="input-group mb-3">
                                <input type="email"
                                    class="form-control  <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>"
                                    name="login" placeholder="<?=lang('Auth.email')?>">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-envelope"></span>
                                    </div>
                                </div>
                                <div class="invalid-feedback">
                                    <?= session('errors.login') ?>
                                </div>
                            </div>
                            <?php else: ?>
                            <div class="form-group">
                                <label for="login"><?=lang('Auth.emailOrUsername')?></label>
                                <div class="input-group mb-3">
                                    <input type="text"
                                        class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>"
                                        name="login" placeholder="<?=lang('Auth.emailOrUsername')?>">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-envelope"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="invalid-feedback">
                                    <?= session('errors.login') ?>
                                </div>
                            </div>
                            <?php endif; ?>
                            <div class="input-group mb-3">
                                <input type="password" class="form-control" placeholder="Password">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-lock"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-8">
                                    <?php if ($config->allowRemembering): ?>
                                    <div class="icheck-primary">
                                        <input type="checkbox" id="remember">
                                        <label for="remember">
                                            Remember Me
                                        </label>
                                    </div>
                                    <?php endif; ?>
                                </div>
                                <!-- /.col -->
                                <div class="col-4">
                                    <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                                </div>
                                <!-- /.col -->
                            </div>
                        </form>


                        <?php if ($config->activeResetter): ?>
                        <p class="mb-1">
                            <a href="<?= url_to('forgot') ?>">I forgot my password</a>
                        </p>
                        <?php endif; ?>
                        <?php if ($config->allowRegistration) : ?>
                        <p class="mb-0">
                            <a href="<?= url_to('register') ?>" class="text-center">Register a new membership</a>
                        </p>
                        <?php endif; ?>
                    </div>
                    <!-- /.login-card-body -->
                </div>
            </div>
            <!-- /.login-box -->

        </div>
    </div>
</div>

<?= $this->endSection() ?>