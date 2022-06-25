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

$repeatPassword = [
    'name' => 'repeatPassword',
    'id' => 'repeatPassword'
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
                    <span>Register</span>
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
                <div class="register-form">
                    <h2>Register</h2>
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
                    <?= form_open('register') ?>
                    <div class="group-input">
                        <label for="username">Username *</label>
                        <?= form_input($username) ?>
                    </div>
                    <div class="group-input">
                        <label for="pass">Password *</label>
                        <?= form_password($password) ?>
                    </div>
                    <div class="group-input">
                        <label for="con-pass">Confirm Password *</label>
                        <?= form_password($repeatPassword) ?>
                    </div>
                    <?= form_submit('submit', 'Register', ['class' => 'site-btn register-btn']) ?>
                    <?= form_close() ?>
                    <div class="switch-login">
                        <a href="<?= site_url('login'); ?>" class="or-login">Or Login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Register Form Section End -->

<?= $this->endSection() ?>