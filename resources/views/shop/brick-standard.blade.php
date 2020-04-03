						@foreach($shop as $product)
						<div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
							<a href="{{route('product', [$product->id])}}">
							<div class="block2">
								<!-- <a href="{{route('product', [$product->id])}}"> -->
								<div class="block2-img wrap-pic-w of-hidden pos-relative">
									<img src="{{asset('public/images/' . $product->image)}}" alt="IMG-PRODUCT">
									<div class="block2-overlay trans-0-4">

									</div>
								</div>

								<div class="block2-txt p-t-20">
									<a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
										{{$product->name}}
									</a>

									<span class="block2-price m-text6 p-r-5">
										{{$product->price}}
									</span>
								</div>
								<!-- </a> -->
							</div>
							</a>
					</div>		
						@endforeach