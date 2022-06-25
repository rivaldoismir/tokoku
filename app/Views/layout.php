<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fashi | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="<?= base_url('fashi-master/css/bootstrap.min.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('fashi-master/css/font-awesome.min.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('fashi-master/css/themify-icons.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('fashi-master/css/elegant-icons.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('fashi-master/css/owl.carousel.min.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('fashi-master/css/nice-select.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('fashi-master/css/jquery-ui.min.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('fashi-master/css/slicknav.min.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('fashi-master/css/style.css') ?>" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <?= $this->include('components/header') ?>
    <!-- Header End -->

    <!-- Main Content -->
    <?= $this->renderSection('content') ?>
    <!-- Main Content End -->

    <!-- Footer Section Begin -->
    <?= $this->include('components/footer') ?>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="<?= base_url('fashi-master/js/jquery-3.3.1.min.js') ?>"></script>
    <script src="<?= base_url('fashi-master/js/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('fashi-master/js/jquery-ui.min.js') ?>"></script>
    <script src="<?= base_url('fashi-master/js/jquery.countdown.min.js') ?>"></script>
    <script src="<?= base_url('fashi-master/js/jquery.nice-select.min.js') ?>"></script>
    <script src="<?= base_url('fashi-master/js/jquery.zoom.min.js') ?>"></script>
    <script src="<?= base_url('fashi-master/js/jquery.dd.min.js') ?>"></script>
    <script src="<?= base_url('fashi-master/js/jquery.slicknav.js') ?>"></script>
    <script src="<?= base_url('fashi-master/js/owl.carousel.min.js') ?>"></script>
    <script src="<?= base_url('fashi-master/js/main.js') ?>"></script>
    <?= $this->renderSection('script') ?>
</body>

</html>