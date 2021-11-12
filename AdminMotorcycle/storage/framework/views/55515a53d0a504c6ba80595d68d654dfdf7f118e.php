<?php $__env->startSection('content'); ?>
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Product Category</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>">Home</a></li>
                    <li class="breadcrumb-item">Category</li>

                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">

                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Category</h5>
                            <!-- Table with stripped rows -->
                            <table class="table datatable">
                                <div class="dataTable-top" style="margin-top: 10px; margin-bottom: 10px">
                                    <a href="#" class="btn btn-success float-right">Add</a>
                                </div>
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Position</th>
                                    <th scope="col">Age</th>
                                    <th scope="col">Start Date</th>
                                    <th scope="col">More</th>

                                </tr>
                                </thead>
                                <tbody>

                                <tr>
                                    <th scope="row">5</th>
                                    <td>Raheem Lehner</td>
                                    <td>Dynamic Division Officer</td>
                                    <td>47</td>
                                    <td>2011-04-19</td>
                                    <td>
                                        <form action="#" method="post">
                                            <a href="#" class="btn btn-primary">Edit</a>
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('delete'); ?>
                                            <button type="submit"  class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>

                                </tr>
                                </tbody>
                            </table>
                            <!-- End Table with stripped rows -->

                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main><!-- End #main -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\epc\xampp\htdocs\AdminMotorcycle\resources\views/category/index.blade.php ENDPATH**/ ?>