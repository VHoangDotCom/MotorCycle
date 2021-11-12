<?php $__env->startSection('content'); ?>

    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Blogs</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>">Home</a></li>
                    <li class="breadcrumb-item">Blogs</li>
                    <li class="breadcrumb-item active">Design Blogs</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <strong>Oops!</strong> There were some problems with your input.<br><br>
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
    <?php endif; ?>

        <!-- Create Blog -->
        <section class="section">

                    <form action="<?php echo e(route('news.store')); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <div class="row">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Blog Information</h5>

                                <!-- General Form Elements -->

                                    <div class="row mb-3">
                                        <label for="inputText" class="col-sm-2 col-form-label">Blog Code</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="newsCode" class="form-control" placeholder="Enter blog code here">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputNumber" class="col-sm-2 col-form-label">Admin ID</label>
                                        <div class="col-sm-10">
                                            <input name="adminID" type="number" placeholder="Enter Admin ID" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputText" class="col-sm-2 col-form-label">Title</label>
                                        <div class="col-sm-10">
                                            <input name="title" type="text" placeholder="Enter blog title" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputText" class="col-sm-2 col-form-label">Author</label>
                                        <div class="col-sm-10">
                                            <input name="createdBy" type="text" placeholder="Author name" class="form-control">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="inputNumber" class="col-sm-2 col-form-label">Image Upload</label>
                                        <div class="col-sm-10">
                                            <input name="image" placeholder="Upload image here" class="form-control" type="file" id="formImage">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputTime" class="col-sm-2 col-form-label">Time</label>
                                        <div class="col-sm-10">
                                            <input name="created_at" type="time" class="form-control">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="inputPassword" class="col-sm-2 col-form-label">Description</label>
                                        <div class="col-sm-10">
                                            <textarea name="description" placeholder="Enter description" class="form-control" style="height: 100px"></textarea>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label"> Blog Topic</label>
                                        <div class="col-sm-10">
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>Choose your topic</option>
                                                <option value="1">Motorcycle Lives</option>
                                                <option value="2">Our Products</option>
                                                <option value="3">Our Services</option>
                                                <option value="4">Other</option>
                                            </select>
                                        </div>
                                    </div>
                             <!-- End General Form Elements -->
                            </div>
                        </div>



                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">TinyMCE Editor</h5>

                            <!-- TinyMCE Editor -->
                            <textarea name="content" placeholder="Write Blog here..." class="tinymce-editor"></textarea><!-- End TinyMCE Editor -->

                        </div>
                    </div>


                <div class="row mb-3" >
                    <div class="col-sm-10">
                        <button  type="submit" class="btn btn-primary">Submit your blog</button>
                    </div>
                </div>
                </div>
            </form>
        </section>
    </main>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\epc\xampp\htdocs\AdminMotorcycle\resources\views/news/create.blade.php ENDPATH**/ ?>