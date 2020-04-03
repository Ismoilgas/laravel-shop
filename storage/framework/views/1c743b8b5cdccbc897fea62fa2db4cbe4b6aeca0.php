            <?php $__currentLoopData = $carts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<!-- Cart item -->
			<div class="container-table-cart pos-relative">
				<div class="wrap-table-shopping-cart bgwhite">
					<table class="table-shopping-cart">
						<!-- <tr class="table-head">
							<th class="column-1"></th>
							<th class="column-2">Product</th>
							<th class="column-3">Price</th>
							<th class="column-4 p-l-70"></th>
						</tr> -->

						<tr class="table-row">
							<td class="column-1">
								<div class="cart-img-product b-rad-4 o-f-hidden">
									<img src="<?php echo e(asset('public/images/' . $cart->image)); ?>" alt="IMG-PRODUCT">
								</div>
							</td>
							<td class="column-2"><?php echo e($cart->name); ?></td>
							<td class="column-3"><?php echo e($cart->price); ?></td>
							<td class="column-4"><div><a class="btn btn-danger listbuttonremove" id="<?php echo e($cart->id); ?>" href="#"><i class="fa fa-trash-o" aria-hidden="true"></i></a></div></td>
							</td>
							
						</tr>

						
					</table>
				</div>
			</div>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH /var/www/html/laravel-shop/resources/views/shop/cart-standard.blade.php ENDPATH**/ ?>