@extends('shop.layout')

@section('main')

	<!-- Title Page -->


	<!-- Cart -->
	<section class="cart bgwhite p-t-70 p-b-100">
		<div class="container">
			@php
                //print_r($carts);
            @endphp
            
            <div class="cart-standard">
			   @include('shop.cart-standard')
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
					<form name="form_clearall" method="post" action="{{route('clearall')}}">
                      {{ csrf_field() }}
                      </form> 

				</div>
			</div>

			<!-- Total -->
			
		</div>
	</section>



	<!-- Footer -->
	@endsection  

	@section('js')
    <script>
      	$(document).ready(function(){
      		$('.flex-c-m.sizefull.bg1').click(function(){
      			//form_clearall.submit();
      			BaseRecord.clearall();
      		});
      	$('.listbuttonremove').click(function(){
                BaseRecord.removeone($(this).attr('id'));
                return false;
            });	
      	});
    </script>>

    @endsection