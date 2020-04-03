						<?php $__currentLoopData = $shop; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
							<a href="<?php echo e(route('product', [$product->id])); ?>">
							<div class="block2">
								<!-- <a href="<?php echo e(route('product', [$product->id])); ?>"> -->
								<div class="block2-img wrap-pic-w of-hidden pos-relative">
									<img src="<?php echo e(asset('public/images/' . $product->image)); ?>" alt="IMG-PRODUCT">
									<div class="block2-overlay trans-0-4">

									</div>
								</div>

								<div class="block2-txt p-t-20">
									<a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
										<?php echo e($product->name); ?>

									</a>

									<span class="block2-price m-text6 p-r-5">
										<?php echo e($product->price); ?>

									</span>
								</div>
								<!-- </a> -->
							</div>
							</a>
					</div>		
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH /var/www/html/laravel-shop/resources/views/shop/brick-standard.blade.php ENDPATH**/ ?>