@extends("layouts.master")

@section("content")

	@include("website.navbar")
	@include("website.main_banner")
	@include("website.about_company")

						<div class="theme-inner-banner">
				<div class="overlay">
					<div class="container">
						<h2>Oil & Gas</h2>
					</div> <!-- /.container -->
				</div> <!-- /.overlay -->
			</div> <!-- /.theme-inner-banner -->

			<div class="service-style-one section-spacing">
				<div class="container">
					<p class="mb-20" style="text-align: justify; font-size: 16px;">
					Here is a list of jobs for <b>Oil & Gas</b> sector. The list shows the latest online job vacancy in <b>Oil & Gas</b> with job details. If the job requirement matches your skills and experience, click on “Apply Now” button to send your job application.
					</p>
					<div class="row">
						<div class="col-xl-9 col-lg-8 col-md-8 col-sm-7 col-12">
							<!---total job of category displayed here------>
							@foreach($jobs as $job)
								<div class="job-detail">
									<div class="row">
										<div class="col-sm-3">
											<div class="img-box">
												<img src="/website/images/home/3.jpg" alt="">
											</div>
										</div>
										<div class="col-sm-5">
											<div class="text">
												<h6>Factory Worker (Manufacturing Sec.)</h6>
												<span class="job_company">Company: POLYPLAS SDN. BHD.</span>
												<span><i class="fa fa-map-marker"></i> Malaysia</span>
												<p>Job Category OIL & GAS</p>
											</div> <!-- /.text -->
										</div>
										<div class="col-sm-4">
											<div class="text">
												<span class="job_company">Salary : MYR 1500 Monthly</span>
												<span>Contract : 2 Year(s)</span>
												<a href="apply-form.html" class="apply-button" target="_blank">Apply Now</a>
											</div> <!-- /.text -->
										</div>
									</div>
								</div>
							@endforeach
							<!---total job of category displayed here------>
						</div> <!-- /.Job -->
						<div class="col-xl-3 col-lg-4 col-md-4 col-sm-5 col-12 blog-sidebar">
							<div class="sidebar-container sidebar-categories">
								<ul>
									<li><a href="why-us.html">Why Us?</a></li>
									<li><a href="inner.html">Abou Top Job</a></li>
									<li><a href="inner.html">Message From Chairman</a></li>
									<li><a href="requirement-process.html">Recruitment Process</a></li>
								</ul>
							</div> <!-- /.sidebar-categories -->
							<div class="sidebar-container sidebar-recent-post">
								<h5 class="title">Job Categorey</h5>
								<ul>
									<!----category List---->
									@foreach($menus as $menu)
										<li class="clearfix">
											<a href="#">
											<img src="/website/images/home/3.jpg" alt="" class="float-left">
											<div class="post float-left">
												<h6>Constructions</h6>
												<p>View Job</p>
											</div>
											</a>
										</li>
									@endforeach
									<!---category list closed---->
								</ul>
							</div> <!-- /.sidebar-recent-post -->
							<div class="company-slogon">
								<p class="text-white">we practice Ethical Recruitment and comply to various Business Code of Conducts.</p>
							</div>
						</div>
					</div>
				</div> <!-- /.container -->
			</div> <!-- /.service-style-one -->
			-->



	<!-- include("website.company_success") -->
	@include("website.company_partner")

@endsection