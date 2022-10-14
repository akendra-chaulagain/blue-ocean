@php	 
	 if(app\Models\Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%partner%")->where('page_type','Group')->latest()->first()!=null){
            $partners_id = app\Models\Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%partner%")->where('page_type','Group')->latest()->first()->id;
            $partners = app\Models\Navigation::query()->where('parent_page_id',$partners_id)->latest()->get();
        }
        else{
            $partners = null;
        }
@endphp
	<div class="partner-section bg-color">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-4 col-12">
							<h6>OUR VALUED<br>Clients</h6>
						</div>
						<div class="col-md-9 col-sm-8 col-12">
							<div class="partner-slider">
								@if(isset($partners))
							  @foreach($partners as $part)	
								<div class="item"><img src="{{$part->banner_image}}" alt=""></div>
							  @endforeach
							  @endif
							</div>
						</div>
					</div>
				</div>
			</div> <!-- /.Clients -->
