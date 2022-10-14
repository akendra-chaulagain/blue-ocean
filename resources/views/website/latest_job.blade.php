<div class="service-style-one section-spacing">
				<div class="container">
					<div class="theme-title-one">
						<h2>Latest Job</h2>
					</div> 
					<div class="wrapper">
						<div class="row">
						 @foreach($jobs as $job)
							<div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
							 <!-------latest job detail left side---->
								<div class="job-detail">
									<div class="row">
										<div class="col-sm-3">
											<div class="img-box">
												<a href="{{route('single_job',$job->nav_name)}}"><img src="{{$job->banner_image}}" alt=""></a>
											</div>
										</div>
										<div class="col-sm-5">
											<a href="{{route('single_job',$job->nav_name)}}">
											  <div class="text">
												<h6>{{$job->caption}}</h6>
												<span class="job_company">{{$job->getJob->company_name}}</span>
												<span><i class="fa fa-map-marker"></i>{{$job->getJob->country}}</span>
												<!-- <p>job category</p> -->
											  </div> <!-- /.text -->
											</a>
										</div>
										<div class="col-sm-4">
											  <div class="text">
												<span class="job_company">Salary : NRP {{$job->getJob->salary}} Monthly</span>
												<span>Contract : {{$job->getJob->contract_time}} Year(s)</span>
												<a href="/jobapply/{{$job->nav_name}}" class="apply-button" target="_blank">Apply Now</a>
											  </div> <!-- /.text -->
										</div>
									</div>
								</div>								
								 <!-------latest job detail left side closed---->						
							</div> <!-- /.Job -->	
						  @endforeach
						  
						</div>
						<div class="view-all-btn">
							<a href="/all-jobs" class="theme-button-one">View All</a>
						</div>
					</div>
				</div>
			</div>