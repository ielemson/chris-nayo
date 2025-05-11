@extends("frontend.pageLayout")
@php
  $setting = \App\Models\Setting::find(1);
  $team = \App\Models\TeamProfile::find(1);
@endphp
@section('title', 'About Me')  

@section("content")
    <main id="body-inner">

			<!-- Begin page transition (do not remove!!!) 
			=========================== -->
			<div id="tt-page-transition">
				<div class="tt-ptr-overlay-top tt-noise"></div>
				<div class="tt-ptr-overlay-bottom tt-noise"></div>
				<div class="tt-ptr-preloader">
					<div class="tt-ptr-prel-content">
						<!-- Hint: You may need to change the img height and opacity to match your logo type. You can do this from the "theme.css" file (find: ".tt-ptr-prel-image"). -->
						<img src="{{asset("images/settings/$setting->website_logo_dark")}}" class="tt-ptr-prel-image" alt="Logo">
					</div> <!-- /.tt-ptr-prel-content -->
				</div> <!-- /.tt-ptr-preloader -->
			</div>
			<!-- End page transition -->

			<!-- Begin magic cursor 
			======================== -->
			<div id="magic-cursor">
				<div id="ball"></div>
			</div>
			<!-- End magic cursor --> 

			@include("frontend.include.header")
			<!-- End header -->

			<div id="tt-content-wrap">

			
				<div id="page-header" class="ph-full ph-full-m ph-cap-xxxxlg ph-center ph-image-parallax ph-caption-parallax">

						
					<div class="page-header-inner tt-wrap">

						<div class="ph-caption">
							<div class="ph-caption-inner">
								<h2 class="ph-caption-subtitle">{{$team->fname}} {{$team->lname}}</h2>
								<h1 class="ph-caption-title">About Me</h1>
								<div class="ph-caption-description max-width-700">
								   {!! $team->position!!}
								</div>
							</div> <!-- /.ph-caption-inner -->
						</div> <!-- /.ph-caption -->

					</div> <!-- /.page-header-inner -->

					
					<div class="page-header-inner ph-mask">
						<div class="ph-mask-inner tt-wrap">

							<div class="ph-caption">
								<div class="ph-caption-inner">
									<h2 class="ph-caption-subtitle">{{$team->fname}} {{$team->lname}}</h2>
									<h1 class="ph-caption-title">Who I Am</h1>
									<div class="ph-caption-description max-width-700">
									{!! $team->position!!}
									</div>
								</div> <!-- /.ph-caption-inner -->
							</div> <!-- /.ph-caption -->

						</div> <!-- /.ph-mask-inner -->
					</div>
					<!-- End page header mask -->


					<!-- Begin social buttons
					========================== -->
					<div class="ph-social">
						<ul>
							<li><a href="{{$setting->facebook}}" class="tt-magnetic-item" target="_blank" rel="noopener"><i class="fa-brands fa-facebook-f"></i></a></li>
							<li><a href="{{$setting->twitter}}" class="tt-magnetic-item" target="_blank" rel="noopener"><i class="fa-brands fa-twitter"></i></a></li>
							<li><a href="{{$setting->instagram}}" class="tt-magnetic-item" target="_blank" rel="noopener"><i class="fa-brands fa-instagram"></i></a></li>
							<li><a href="{{$setting->linkedin}}" class="tt-magnetic-item" target="_blank" rel="noopener"><i class="fa-brands fa-linkedin"></i></a></li>
							<!-- <li><a href="https://x.com/Themetorium" class="tt-magnetic-item" target="_blank" rel="noopener"><i class="fa-brands fa-x-twitter"></i></a></li> -->
						</ul>
					</div>
					<!-- End social buttons -->

					<!-- Begin scroll down
					=======================
					* Note: Circle shown only if class "ph-full" or "ph-full-m" is enabled in "page-header" but not on small screens! Otherwise, only the arrow icon will be shown to save space.
					-->
					<div class="tt-scroll-down">
						<!-- You can change "data-offset" attribute to set scroll top offset -->
						<a href="#tt-page-content" class="tt-scroll-down-inner tt-magnetic-item" data-offset="0">
							<div class="tt-scrd-icon"></div>
							<svg viewBox="0 0 500 500">
								<defs>
									<path d="M50,250c0-110.5,89.5-200,200-200s200,89.5,200,200s-89.5,200-200,200S50,360.5,50,250" id="textcircle"></path>
								</defs>
								<text dy="30">
									<!-- If you change the text, you probably have to change the CSS parameters as well. In the "theme.css" file, find ".tt-scroll-down text {" and change the "font-size" and "letter-spacing" to fit the text correctly. -->
									<textPath xlink:href="#textcircle">Scroll to Explore - Scroll to Explore -</textPath>
								</text>
							</svg>
						</a> <!-- /.tt-scroll-down-inner -->
					</div>
					<!-- End scroll down -->

				</div>
				<!-- End page header -->


				<!-- *************************************
				*********** Begin page content *********** 
				************************************** -->
				<div id="tt-page-content">

					<div class="tt-section no-padding-bottom padding-bottom-xlg-40">
						<div class="tt-section-inner tt-wrap">

							<div class="tt-row tt-lg-row-reverse">
								<div class="tt-col-lg-6 margin-bottom-20">

								
									<div class="tt-video ttv-portrait ttv-grayscale">
										<video playsinline muted autoplay loop preload="metadata" poster="{{asset("assets/images/team/$team->picture")}}" class="tt-anim-zoomin">
											<source src="javascript:;" data-src="javascript:;" type="video/mp4">
											<source src="javascript:;" data-src="javascript:;" type="video/webm">
										</video>
									</div>
									<!-- End tt-video -->

								</div> <!-- /.tt-col -->

								<div class="tt-col-lg-1">

								</div> <!-- /.tt-col -->

								<div class="tt-col-lg-5">

									<h2 class="tt-font-alter tt-anim-fadeinup">Hello!</h2>
									<div class="text-lg" style="text-align:justify">
										 {!!$team->about!!}
										<!-- Begin big round button 
										============================ -->
									
										<!-- End big round button -->

									</div>

								</div> <!-- /.tt-col -->
							</div> <!-- /.tt-row -->

						</div> <!-- /.tt-section-inner -->
					</div>
					<!-- End tt-section -->


					{{-- <div class="tt-section padding-top-xlg-120">
						<div class="tt-section-inner tt-wrap">

							<div class="tt-row margin-bottom-40">
								<div class="tt-col-xl-8">

									
									<div class="tt-heading tt-heading-xxxlg no-margin">
										<h3 class="tt-heading-subtitle tt-text-reveal">Contact</h3>
										<h2 class="tt-heading-title tt-text-reveal">Let's Work<br> Together</h2> <!-- You can use <br> to break a text line if needed -->
									</div>
									<!-- End tt-Heading -->

								</div> <!-- /.tt-col -->
							
								<div class="tt-col-xl-4 tt-align-self-end tt-xl-column-reverse margin-top-40">

									<div class="max-width-600 margin-bottom-10 tt-text-uppercase text-pretty tt-text-reveal">
										Feeling good about a new project? Write me what's in your mind<br> and let's talk about it!
									</div>

									<!-- Begin big round button 
									============================ -->
									<div class="tt-big-round-ptn margin-top-30 margin-bottom-xlg-80 tt-anim-fadeinup">
										<a href="{{route("contactus")}}" class="tt-big-round-ptn-holder tt-magnetic-item">
											<div class="tt-big-round-ptn-inner">Let's<br> Connect!</div>
										</a>
									</div>
									<!-- End big round button -->

								</div> <!-- /.tt-col -->
							</div><!-- /.tt-row --> 

						</div> <!-- /.tt-section-inner -->
					</div>
					<!-- End tt-section -->


				</div>
				<!-- End page content -->
 --}}

				<!-- ======================
				///// Begin tt-footer /////
				=========================== -->
				@include("frontend.include.footer")
				<!-- End tt-footer -->


				<!-- Begin scroll to top button
				================================ -->
				<a href="#" class="tt-scroll-to-top">
					<div class="tt-stt-progress tt-magnetic-item">
						<svg class="tt-stt-progress-circle" width="100%" height="100%" viewBox="-1 -1 102 102">
							<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
						</svg>
					</div> <!-- /.tt-stt-progress -->
				</a>
				<!-- End scroll to top button -->

			</div>
			<!-- End content wrap -->


		</main>
		<!-- End body inner -->
@endsection