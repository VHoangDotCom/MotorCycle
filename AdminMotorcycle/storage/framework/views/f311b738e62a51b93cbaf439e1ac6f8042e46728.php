<?php $__env->startSection('content'); ?>

    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Blogs</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>">Home</a></li>
                    <li class="breadcrumb-item">Blogs</li>
                    <li class="breadcrumb-item active">Blog detail</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Title : </strong>
                    <?php echo e($news->title); ?>

                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Description : </strong>
                    <?php echo e($news->description); ?>

                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Author : </strong>
                    <?php echo e($news->createdBy); ?>

                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Image : </strong>
                    <?php echo e($news->image); ?>

                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Date : </strong>
                    <?php echo e($news->created_at); ?>

                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Last update : </strong>
                    <?php echo e($news->updated_at); ?>

                </div>
            </div>

            <br><br>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Content : </strong>
                    <?php echo e($news->content); ?>

                </div>
            </div>

        </div>

    </main>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\epc\xampp\htdocs\AdminMotorcycle\resources\views/news/show.blade.php ENDPATH**/ ?>