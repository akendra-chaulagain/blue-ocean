@extends('layouts.master')
    @section("content")
        @include("website.navbar");
        	<div class="theme-inner-banner">
				<div class="overlay">
					<div class="container">
						<h2>{{$slug_detail->caption ?? ''}}</h2>
					</div> <!-- /.container -->
				</div> <!-- /.overlay -->
			</div> <!-- /.theme-inner-banner -->

		  @php 
			if(app\Models\Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%message%")->where('page_type','Group')->latest()->first()!=null){
				$message_id = app\Models\Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%message%")->where('page_type','Group')->latest()->first()->id;
				$message = app\Models\Navigation::query()->where('parent_page_id',$message_id)->latest()->first();
       		 }
        else{
            $message = null;
        }
		  @endphp
			<!-------common page------>
            @if($slug_detail->nav_name=="abouts" || $slug_detail->id=="2255")
            @if(isset($message))
			<div class="callout-banner">
				<div class="container clearfix">
					<h3 class="title">{{$message->caption}}<br> <span>{{$message->short_content}}</span></h3>
					<p>{{$message->long_content}}</p>
					<a href="/inquiry" class="theme-button-one" target="_blank">Apply Now</a>
				</div>
			</div> <!-- /.callout-banner -->
            @else
            <div class="callout-banner">
				<div class="container clearfix">
					<h3 class="title">ROHAN GURUNG<br> <span>Chairman</span></h3>
					<p>Our commitment is finding the right person for the right job as per the request of our valued clients around the world. We are focusing, ethical and fair recruitment procedures. We are always happy to provide our Services.</p>
					<a href="/inquiry" class="theme-button-one" target="_blank">Apply Now</a>
				</div>
			</div> <!-- /.callout-banner -->
            @endif
            @endif
			<!-- 
			=============================================
				About Company Stye Two
			============================================== 
			-->

			<div class="about-compnay section-spacing">
				<div class="container">
					<div class="row">
						<div class="@if($normal->banner_image!=null) col-lg-6 col-12 text order-lg-last @else col-lg-12 col-12 text order-lg-last @endif">
							<div class="theme-title-one mb-20">
								<h2>{{$normal->caption}}</h2>
							</div> <!-- /.theme-title-one -->
							<p class="mb-20">@php echo $normal->long_content; @endphp</p>
						</div> <!-- /.col- -->
                         @if($normal->banner_image!=null) 
						<div class="col-lg-6 col-12 order-lg-first">
							<img src="{{$normal->banner_image}}" alt="" class="left-img">
						</div>
                        @endif
					</div> <!-- /.row -->
				</div> <!-- /.container -->
			</div> <!-- /.about-compnay-two -->
   @include("website.company_partner")
    @endsection
    
