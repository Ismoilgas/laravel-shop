@extends('shop.layout')

@section('main')
	<!-- Product Detail -->
	<div class="container bgwhite p-t-35 p-b-80">
		@if ($errors->any())
                    @component('shop.components.alert')
                        @slot('type')
                            danger
                        @endslot
                      @foreach ($errors->all() as $error)
                          {{ $error }}<br>
                      @endforeach
                    @endcomponent
                	@endif
		<div class="flex-w flex-sb">
			<div class="w-size13 p-t-30 respon5">
				<div class="wrap-slick3 flex-sb flex-w">
					<div class="wrap-slick3-dots"></div>
					

					<div class="slick3">
						

						<div class="item-slick3" data-thumb="{{asset('public/images/' . $product->image)}}">
							<div class="wrap-pic-w">
								<img src="{{asset('public/images/'. $product->image)}}" alt="IMG-PRODUCT">
							</div>
						</div>

					</div>
				</div>
			</div>

			<div class="w-size14 p-t-30 respon5">
				<h4 class="product-detail-name m-text16 p-b-13">
					{{$product->name}}
				</h4>

				<span class="m-text17">
					{{$product->price}}
				</span>

				<p class="s-text8 p-t-10">
					Nulla eget sem vitae eros pharetra viverra. Nam vitae luctus ligula. Mauris consequat ornare feugiat.
				</p>

				<!--  -->
				<div class="p-t-33 p-b-60">
					<div class="flex-m flex-w p-b-10">
						
					</div>

					<div class="flex-m flex-w">
						
					</div>

					<div class="flex-r-m flex-w p-t-10">
						<div class="w-size16 flex-m flex-w">
							
							<div class="btn-addcart-product-detail size9 trans-0-4 m-t-10 m-b-10">
								<!-- Button -->
								<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
									Add to Cart
								</button>
							</div>
						</div>
						<form name="form_tocart" method="post" action="{{route('tocart')}}" style="display: none;">
										{{ csrf_field() }}
										<input type="hidden" name="name" value="{{$product->name}}" />
										<input type="hidden" name="price" value="{{$product->price}}"/>
										<input type="hidden" name="image" value="{{$product->image}}"/>	
							</form>
					</div>
				</div>

				

				<!--  -->
				<div class="wrap-dropdown-content bo6 p-t-15 p-b-14 active-dropdown-content">
					<h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
						Description
						
					</h5>

					<div class="dropdown-content dis-none p-t-15 p-b-23">
						<p class="s-text8">
							Fusce ornare mi vel risus porttitor dignissim. Nunc eget risus at ipsum blandit ornare vel sed velit. Proin gravida arcu nisl, a dignissim mauris placerat
						</p>
					</div>
				</div>

				

				
			</div>
		</div>
	</div>


	<!-- Relate Product -->
	@endsection

	@section('js')

      <script>
      	$(document).ready(function(){
      		$('.btn-addcart-product-detail').click(function(){
      			form_tocart.submit();
      		});
      	});
      </script>>

    @endsection