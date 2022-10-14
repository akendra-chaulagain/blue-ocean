
	 

	@extends('layouts.master')
    @section("content")
		@include("website.navbar")		
			<div class="theme-inner-banner">
				<div class="overlay">
					<div class="container">
						<h2>{{$slug_detail->caption}}</h2>
					</div> <!-- /.container -->
				</div> <!-- /.overlay -->
			</div> <!-- /.theme-inner-banner -->


			<!-- 
			=============================================
				gallery
			============================================== 
			-->
			@if(isset($photos))
			<div class="folder-spacing">
				<div class="container">
					<div class="row">
							<!----gallary data----->
							@foreach($photos as $photo)								
								<div class="col-md-3 col-sm-4">
									<a href="{{route('galleryview',$photo->nav_name)}}">
									<div class="folder">
										<div class="folder-inside" style="background: url({{$photo->banner_image}}) no-repeat; background-size: cover;"></div>
									</div>
									<h4>{{$photo->caption}}</h4>
									</a>
								</div>
							@endforeach
						  <!----gallary data close----->
		                </div>
		            </div>
          		</div>
			</div>
		  @endif
	

        @include("website.company_partner")
    @endsection
    