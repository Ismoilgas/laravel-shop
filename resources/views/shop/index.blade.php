@extends('shop.layout')

@section('main')

<!-- Content page -->
	<section class="bgwhite p-t-55 p-b-65">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
					<div class="leftbar p-r-20 p-r-0-sm">
						<!--  -->
						<div class="search-product pos-relative bo4 of-hidden">
							<input class="s-text7 size6 p-l-23 p-r-50" type="text" name="search-product" placeholder="Search Products...">

							<button type="button" class="flex-c-m size5 ab-r-m color2 color0-hov trans-0-4">
								<i class="fs-12 fa fa-search" aria-hidden="true"></i>
							</button>
						</div>
					</div>
				</div>
				
				<div class="col-sm-6 col-md-8 col-lg-9 p-b-50">
					<!--  -->
					<!-- Product -->
					<div class="row" id="row">
						

@php 
//print_r($shop);
@endphp
						@include('shop.brick-standard')
						
						
					</div>
					
					<!-- Pagination -->
					
				</div>
			</div>
		</div>
	</section>

@section('js')
<script>
$(document).ready(function(){
   $('.trans-0-4').click(function(){
   	  BaseRecord.search($('[name="search-product"]').val());
   });
});   
</script>
@endsection

@endsection    