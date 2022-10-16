 {{-- <div id="theme-main-banner" class="banner-one"> 
		@foreach ($sliders as $slider)
				<div data-src="{{$slider->banner_image}}">
					<div class="camera_caption">
						<div class="container">
							<p class="wow fadeInUp animated">{{$slider->short_content}}</p>
							<h1 class="wow fadeInUp animated" data-wow-delay="0.2s">{{$slider->short_content}}</h1>
						</div> 
					</div> 
				</div>
		@endforeach
	 </div>  --}}




 <section id="nr_slider" class="row">
     <div class="mainSliderContainer">
         <div class="mainSlider">
             <ul>
                 @foreach ($sliders as $sliders_item)
                     <li data-transition="boxslide" data-slotamount="7">
                         <img src="{{ $sliders_item->banner_image }}" alt="slidebg1" data-bgfit="cover"
                             data-bgposition="left top" data-bgrepeat="no-repeat">
                         <div class="caption sfr str" data-x="center" data-y="400" data-speed="700" data-start="1700"
                             data-easing="easeOutBack">
                             <h2><strong>{{ $sliders_item->caption }}</strong></h2>
                         </div>
                         <div class="caption sfl stl" data-x="center" data-y="480" data-speed="500" data-start="1900"
                             data-easing="easeOutBack">
                             <h4>{{ $sliders_item->short_content }}</h4>
                         </div>
                     </li>
                 @endforeach



             </ul>
         </div>
     </div>

     <div class="container sliderAfterTriangle"></div>
     <!--Triangle After Slider-->
 </section>
 <!--Slider-->
