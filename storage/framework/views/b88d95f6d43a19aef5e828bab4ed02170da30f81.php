

<?php $__env->startSection('main'); ?>

	<!-- Title Page -->


	<!-- Cart -->
	<section class="cart bgwhite p-t-70 p-b-100">
		<div class="container">
			<?php
                //print_r($carts);
            ?>

            <div class="cart-standard">
			   <?php echo $__env->make('shop.cart-standard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		    </div>

			<div class="flex-w flex-sb-m p-t-25 p-b-25 bo8 p-l-35 p-r-60 p-lr-15-sm">
				<div class="flex-w flex-m w-full-sm">
					<div >
						</div>

					<div class="size12 trans-0-4 m-t-10 m-b-10 m-r-10">
						<!-- Button -->
						
					</div>
				</div>

				<div class="size10 trans-0-4 m-t-10 m-b-10">
					<!-- Button -->
					<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4" id="clearall_button">
						Clear Cart
					</button>
					<form name="form_clearall" method="post" action="<?php echo e(route('clearall')); ?>">
                      <?php echo e(csrf_field()); ?>

                      </form> 

				</div>
			</div>

			<!-- Total -->
			
		</div>
	</section>



	<!-- Footer -->
	<?php $__env->stopSection(); ?>  

	<?php $__env->startSection('js'); ?>
    <script>
      	$(document).ready(function(){
      		$('.flex-c-m.sizefull.bg1').click(function(){
      			// form_clearall.submit();
      			BaseRecord.clearall();
      		});
      	$('.listbuttonremove').click(function(){
                BaseRecord.removeone($(this).attr('id'));
                return false;
            });	
      	});
    </script>>

    <?php $__env->stopSection(); ?>
<?php echo $__env->make('shop.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/laravel-shop/resources/views/shop/cart.blade.php ENDPATH**/ ?>