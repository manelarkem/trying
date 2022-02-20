<?php $__env->startSection('content'); ?>
<section class="featured" id="featured">
        <h1 class="heading"> <span>My Offers</span></h1>
        <a href="#divOne" class="button">Add an offer</a>
	    <div class="overlay" id="divOne">
		<div class="wrapper">
			<h2>Add an offer</h2><a class="close" href="#">&times;</a>
			<div class="content">
				<div class="container">
					<form>
						<label>Appartment name</label>
						<input placeholder="name" type="text">
                        <label>Price</label>
						<input placeholder="price" type="text">
						<label>Address</label>
						<input placeholder="road, city, country" type="text">
						<label>Description</label> 
						<textarea placeholder="description"></textarea>
						<input type="submit" value="Add">
					</form>
				</div>
			  </div>
	    	</div>
    	</div>



        <div class="box-container">
        <div class="box">
            <div class="image-container">
                <img src="/img/home.jpg" alt="">
            </div>
            <div class="content">
                <div class="price">
                    <h3> 2000DA/day</h3>
                </div>
                <div class="location">
                    <h3> Modern Appartment</h3>
                    <p> Address</p>
                </div>
                <div class="details">
                    <h3> <i class="fas fa-expand"></i> 3500 sqft </h3>
                    <h3> <i class="fas fa-bed"></i> 3 beds </h3>
                    <h3> <i class="fas fa-bath"></i> 2 baths </h3>
                </div>
                <div class="buttons">
                    <a href="#" class="btn">delete offer</a>
                    <a href="<?php echo e(url('/details')); ?>" class="btn">view details</a>
                </div>
            </div>
        </div>
        <div class="box">
            <div class="image-container">
                <img src="/img/home.jpg" alt="">
            </div>
            <div class="content">
                <div class="price">
                    <h3> 2000DA/day</h3>
                </div>
                <div class="location">
                    <h3> Modern Appartment</h3>
                    <p> Address</p>
                </div>
                <div class="details">
                    <h3> <i class="fas fa-expand"></i> 3500 sqft </h3>
                    <h3> <i class="fas fa-bed"></i> 3 beds </h3>
                    <h3> <i class="fas fa-bath"></i> 2 baths </h3>
                </div>
                <div class="buttons">
                    <a href="#" class="btn">delete offer</a>
                    <a href="<?php echo e(url('/details')); ?>" class="btn">view details</a>
                </div>
            </div>
        </div>
        <div class="box">
            <div class="image-container">
                <img src="/img/home.jpg" alt="">
            </div>
            <div class="content">
                <div class="price">
                    <h3> 2000DA/day</h3>
                </div>
                <div class="location">
                    <h3> Modern Appartment</h3>
                    <p> Address</p>
                </div>
                <div class="details">
                    <h3> <i class="fas fa-expand"></i> 3500 sqft </h3>
                    <h3> <i class="fas fa-bed"></i> 3 beds </h3>
                    <h3> <i class="fas fa-bath"></i> 2 baths </h3>
                </div>
                <div class="buttons">
                    <a href="#" class="btn">delete offer</a>
                    <a href="<?php echo e(url('/details')); ?>" class="btn">view details</a>
                </div>
            </div>
        </div>
        
        
    </div>
    
</section>

<?php $__env->stopSection(); ?>







        <!--<div class="flex-center position-ref full-height">
            <?php if(Route::has('login')): ?>
                <div class="top-right links">
                    <?php if(Auth::check()): ?>
                        <a href="<?php echo e(url('/home')); ?>">Home</a>
                    <?php else: ?>
                        <a href="<?php echo e(url('/login')); ?>">Login</a>
                        <a href="<?php echo e(url('/register')); ?>">Register</a>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div> -->

<?php echo $__env->make('layouts.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>