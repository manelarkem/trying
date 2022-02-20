<?php $__env->startSection('content'); ?>
    <section class="featured" id="featured">
    <div class="box-container">
    <div class="box">
            <div class="image-container">
               <img src="/img/home.jpg" alt="">
            </div>
            <div class="content">
                <div class="price">
                    <h3>2000DA/day</h3>
                </div>
                <div class="location">
                    <h3>Modern Appartments</h3>
                    <p>Address</p>
                    <p>Description</p>
                </div>
                <div class="details">
                    <h3> <i class="fas fa-expand"></i> 3500 sqft </h3>
                    <h3> <i class="fas fa-bed"></i> 3 beds </h3>
                    <h3> <i class="fas fa-bath"></i> 2 baths </h3>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>