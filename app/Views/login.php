<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<?php
$username = [
    'name' => 'username',
    'id' => 'username',
    'value' => null
];

$password = [
    'name' => 'password',
    'id' => 'password'
];

$session = session();
$errors = $session->getFlashdata('errors');
?>
<!-- Breadcrumb Section Begin -->
<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <a href="#"><i class="fa fa-home"></i> Home</a>
                    <span>Login</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Form Section Begin -->

<!-- Register Section Begin -->
<div class="register-login-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="login-form">
                    <h2>Login</h2>
                    <?php if ($errors != null) : ?>
                        <div class="alert alert-danger" role="alert">
                            <h4 class="alert-heading">Terjadi Kesalahan</h4>
                            <hr>
                            <p class="mb-0">
                                <?php
                                foreach ($errors as $err) {
                                    echo $err . '<br>';
                                }
                                ?>
                            </p>
                        </div>
                    <?php endif ?>
                    <?= form_open('login') ?>
                    <div class="group-input">
                        <label for="username">Username *</label>
                        <?= form_input($username) ?>
                    </div>
                    <div class="group-input">
                        <label for="pass">Password *</label>
                        <?= form_password($password) ?>
                    </div>
                    <?= form_submit('submit', 'Sign In', ['class' => 'site-btn login-btn']) ?>
                    </form>
                    <div class="switch-login">
                        <a href="<?= site_url('register'); ?>" class="or-login">Or Create An Account</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Register Form Section End -->

<?= $this->endSection() ?>