
	 

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
				Video Foloder
			============================================== 
			-->
			<div class="section-spacing">
				<div class="container">
					<div class="row">
                        @foreach($photos as $photo)
                            <div class="col-md-4 col-sm-6">
                                <iframe width="100%" height="315" src="{{$photo->link}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        @endforeach
					</div> <!-- /.row -->
				</div> <!-- /.container -->
			</div>


        @include("website.company_partner")
    @endsection
    