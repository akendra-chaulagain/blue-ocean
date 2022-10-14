<div class="theme-counter section-spacing">
				<div class="container">
					<div class="bg">
						<h6>Company Success</h6>
						<h2>Some facts about our company</h2>

						<div class="cunter-wrapper">
							<div class="row">
								<!----start---->
								@if(isset($statistics))
								@foreach($statistics as $stat)
									<div class="col-md-3 col-6">
										<div class="single-counter-box">
											<div class="number"><span class="timer" data-from="0" data-to="{{$stat->caption}}" data-speed="1200" data-refresh-interval="5">0</span>{{$stat->short_content}}+</div>
											<p>{{$stat->long_content}}</p>
										</div> 
									</div>  <!-- /.col- -->
								@endforeach	
								@endif	
							 <!-----end---->
							</div> 
						</div>
					</div> 
				</div> <!-- /.container -->
			</div>