<?php $__env->startSection('content'); ?>

    <main id="main" class="main">
    <div class="pagetitle">
        <h1>Blogs</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>">Home</a></li>
                <li class="breadcrumb-item">Blogs</li>
                <li class="breadcrumb-item active">List Blogs</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

        <div class="pagetitle">
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('news.create')); ?>">Add Blogs</a></li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <!-- Show Blogs here -->
        <?php if($message = Session::get('success')): ?>
            <div class="alert alert-success">
                <?php echo e($message); ?>

            </div>
        <?php endif; ?>

        <?php if(sizeof($news)>0): ?>

        <section class="section">
            <div class="row align-items-top">
                <div class="col-lg-6">

                    <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $new): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <!-- Default Card -->
                    <div class="card" >
                        <div class="card-header">Author : <?php echo e(createdBy); ?></div>
                        <div class="card-body">

                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="<?php echo e(image); ?>"  class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title"><a href="<?php echo e(route('news.show',$new->newsID)); ?>"><?php echo e(title); ?></a></h5>
                                        <p class="card-text"><?php echo e(description); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer" >
                            <form action="<?php echo e(route('news.destroy',$news->newsID)); ?>" method="post">
                            <p style="float: right; margin-left: 40px;" class="card-text"><a href="" class="btn btn-primary"><i class="bi bi-download"></i>  Download</a></p>
                                <p style="float: right" class="card-text"><a href="<?php echo e(route('news.edit',$new->newsID)); ?>" class="btn btn-primary"><i class="bi bi-file-earmark-font"></i>  Update</a></p>
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                            <p style="float: right; margin-left: 40px;" class="card-text" type="submit"><a class="btn btn-primary"><i class="bi bi-trash"></i>   Delete</a></p>

                            </form>
                        </div>
                    </div><!-- End Card with header and footer -->
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        <?php else: ?>
                            <div class="alert alert-alert">Start Adding to the Database.</div>
                        <?php endif; ?>

                        <?php echo $news->links(); ?>


                </div>
            </div>
        </section>
    </main><!-- End #main -->

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\epc\xampp\htdocs\AdminMotorcycle\resources\views/news/index.blade.php ENDPATH**/ ?>