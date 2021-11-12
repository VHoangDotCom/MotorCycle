

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Motorcycle Admin</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?php echo e(asset('niceadmin/assets/img/logo.png')); ?>" rel="icon">
    <link href="<?php echo e(asset('niceadmin/assets/img/apple-touch-icon.png')); ?>" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="<?php echo e(asset('https://fonts.gstatic.com')); ?>" rel="preconnect">
    <link href="<?php echo e(asset('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i')); ?>" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?php echo e(asset('niceadmin/assets/vendor/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('niceadmin/assets/vendor/bootstrap-icons/bootstrap-icons.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('niceadmin/assets/vendor/remixicon/remixicon.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('niceadmin/assets/vendor/boxicons/css/boxicons.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('niceadmin/assets/vendor/quill/quill.snow.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('niceadmin/assets/vendor/quill/quill.bubble.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('niceadmin/assets/vendor/simple-datatables/style.css')); ?>" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?php echo e(asset('niceadmin/assets/css/style.css')); ?>" rel="stylesheet">


    <!-- =======================================================
    * Template Name: NiceAdmin - v2.1.0
    * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>

<!-- ======= Header ======= -->
<?php echo $__env->make('layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- ======= Sidebar ======= -->
<?php echo $__env->make('layout.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->yieldContent('content'); ?>

<!-- ======= Footer ======= -->
<?php echo $__env->make('layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="<?php echo e(asset('niceadmin/assets/vendor/bootstrap/js/bootstrap.bundle.js')); ?>"></script>
<script src="<?php echo e(asset('niceadmin/assets/vendor/php-email-form/validate.js')); ?>"></script>
<script src="<?php echo e(asset('niceadmin/assets/vendor/quill/quill.min.js')); ?>"></script>
<script src="<?php echo e(asset('niceadmin/assets/vendor/tinymce/tinymce.min.js')); ?>"></script>
<script src="<?php echo e(asset('niceadmin/assets/vendor/simple-datatables/simple-datatables.js')); ?>"></script>
<script src="<?php echo e(asset('niceadmin/assets/vendor/chart.js/chart.min.js')); ?>"></script>
<script src="<?php echo e(asset('niceadmin/assets/vendor/apexcharts/apexcharts.min.js')); ?>"></script>
<script src="<?php echo e(asset('niceadmin/assets/vendor/echarts/echarts.min.js')); ?>"></script>


<!-- Template Main JS File -->
<script src="<?php echo e(asset('niceadmin/assets/js/main.js')); ?>"></script>

</body>

</html>
<?php /**PATH D:\epc\xampp\htdocs\AdminMotorcycle\resources\views/layout/index.blade.php ENDPATH**/ ?>