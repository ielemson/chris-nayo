@extends('frontend.pageLayout')
@php
    $setting = \App\Models\Setting::find(1);
    $team = \App\Models\TeamProfile::find(1);
@endphp
@section('title', $event->title)

@section('content')
    <main id="body-inner">
<div id="page-header" class="ph-cap-lg ph-image-parallax ph-caption-parallax">

					<!-- Begin page header image 
					============================= 
					* Use class "ph-image-grayscale" to enable black & white image.
					* Use class "ph-image-cover-*" to set image overlay opacity. For example "ph-image-cover-2" or "ph-image-cover-2-5" (up to "ph-image-cover-9-5"). 
					-->
					<div class="ph-image ph-image-cover-5">
						<div class="ph-image-inner">
							<img src="{{asset("assets/images/blog/1920/blog-1-1920.jpg")}}" alt="Image">
						</div>
					</div>
					<!-- End page header image -->

						
					<div class="page-header-inner tt-wrap">

						<div class="ph-caption">
							<div class="ph-caption-inner">
								<div class="ph-caption-categories">
									<a href="javascript:;" class="ph-caption-category">
                                          {{ 
                                            $event->category == 'press_release' ? 'Press Release' : 
                                            ($event->category == 'media_coverage' ? 'Medida Coverage' : 'Events') 
                                        }}
                                    </a>
									<!-- <a href="javascript:;" class="ph-caption-category">Uncategorized</a> -->
								</div> <!-- /.ph-categories -->
								<h1 class="ph-caption-title">{{ $event->title }}</h1>
								<div class="ph-caption-meta">
									<span class="ph-cap-meta-published">{{ Carbon\Carbon::parse($event->created_at)->diffForHumans() }}</span>
									<span class="ph-cap-meta-posted-by">by: <a href="javascript:;" title="View all posts by Admin">Admin</a></span>
								</div> <!-- /.ph-meta -->
							</div> <!-- /.ph-caption-inner -->
						</div> <!-- /.ph-caption -->

					</div> <!-- /.page-header-inner -->


					<!-- Begin page header share (share buttons are for design purposes only!) 
					============================= -->
					<div class="ph-share">
						<div class="ph-share-inner">
							<div class="ph-share-trigger">
								<div class="ph-share-text">Share</div>
								<div class="ph-share-icon"><i class="fas fa-share"></i></div>
							</div> <!-- /.ph-share-trigger -->
							<div class="ph-share-buttons">
								<ul>
									<li><a href="#" class="tt-magnetic-item" title="Share on Facebook"><i class="fa-brands fa-facebook-f"></i></a></li>
									<li><a href="#" class="tt-magnetic-item" title="Share on X"><i class="fa-brands fa-x-twitter"></i></a></li>
									<li><a href="#" class="tt-magnetic-item" title="Share on Pinterest"><i class="fa-brands fa-pinterest"></i></a></li>
								</ul>
							</div> 
                            <!-- /.ph-share-buttons -->
						</div> <!-- /.ph-share-inner -->
					</div>
					<!-- End page header share -->

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
        <!-- End page header -->
        <!-- Begin page transition (do not remove!!!)
    =========================== -->
        <div id="tt-page-transition">
            <div class="tt-ptr-overlay-top tt-noise"></div>
            <div class="tt-ptr-overlay-bottom tt-noise"></div>
            <div class="tt-ptr-preloader">
                <div class="tt-ptr-prel-content">
                    <!-- Hint: You may need to change the img height and opacity to match your logo type. You can do this from the "theme.css" file (find: ".tt-ptr-prel-image"). -->
                    <img src="{{ asset("images/settings/$setting->website_logo_dark") }}" class="tt-ptr-prel-image"
                        alt="Logo">
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

        @include('frontend.include.header')
        <!-- End header -->

        <div id="tt-page-content">
           <div class="tt-section padding-top-xlg-120 padding-bottom-xlg-120">
						<div class="tt-section-inner tt-wrap">

							<!-- Begin blog post 
							===================== -->
							<article class="tt-blog-post">
                             {{-- <div class="tt-image tti-fixed-height">
								<figure>
									<img src="{{ asset('assets/images/banner/' .$event->event_banner) }}" class="tt-image-parallax tt-anim-zoomin" loading="lazy" alt="Image">
									<figcaption>
										Full width image
									</figcaption>
								</figure>
							</div> --}}
								<!-- Begin blog post content -->
								<div class="tt-blog-post-content">
                                   
									{{-- <h4>{{$event->title}}</h4> --}}
                                        
                                        <div class="tt-row">
                                            <div class="tt-col-lg-4 tt-col-md-4">
                                                <img src="{{ asset('assets/images/banner/' .$event->event_banner) }}" class="tt-blog-post-image" loading="lazy" alt="{{$event->title}}">
                                            </div>
                                            <div class="tt-col-lg-8 tt-col-md-8">
                                                {!!$event->content!!}
                                            </div>
                                            
                                        </div>
								</div>
								<!-- End blog post content -->

								<!-- Begin blog post tags -->
								{{-- <div class="tt-blog-post-tags">
									<ul>
										<li><span>Tags:</span></li>
										<li><a href="javascript:;">#photography</a></li> 
										<li><a href="javascript:;">#travel</a></li>
										<li><a href="javascript:;">#motion</a></li>
									</ul>
								</div> --}}
								<!-- End blog post tags -->

								<!-- Begin blog post share (Note: Share buttons are for design purposes only!) 
								=========================== -->
								<div class="tt-blog-post-share">
									<div class="tt-bps-text">Share:</div>
									<div class="tt-social-buttons">
										<ul>
											<li><a href="#0" class="tt-magnetic-item" title="Share on Facebook"><i class="fa-brands fa-facebook-f"></i></a></li>
											<li><a href="#0" class="tt-magnetic-item" title="Share on Twitter"><i class="fa-brands fa-x-twitter"></i></a></li>
											<li><a href="#0" class="tt-magnetic-item" title="Share on Pinterest"><i class="fa-brands fa-pinterest"></i></a></li>
										</ul>
									</div> <!-- /.social-buttons -->
								</div>
								<!-- End blog post share -->

							</article> 
							<!-- End blog post -->


							<!-- Begin blog post nav 
							======================== -->
							<div class="tt-blog-post-nav">
								
                                        @if($previousPost)
                                       
                                     <div class="tt-bp-nav-col tt-bp-nav-left">
									<div class="tt-bp-nav-text"><a href="{{ route('media.details', ['slug' => $previousPost->slug, 'id' => $previousPost->id]) }}"><span><i class="fa-solid fa-arrow-left"></i></span>Prew Post</a></div>
									<h4 class="tt-bp-nav-title"><a href="{{ route('media.details', ['slug' => $previousPost->slug, 'id' => $previousPost->id]) }}">{{$previousPost->title}}</a></h4>
								</div>
                                        </a>
                                        @endif
								

                                    @if($nextPost)
                                    <div class="tt-bp-nav-col tt-bp-nav-right">
                                    <div class="tt-bp-nav-text"><a href="{{ route('media.details', ['slug' => $nextPost->slug, 'id' => $nextPost->id]) }}">Next Post<span><i class="fa-solid fa-arrow-right"></i></span></a></div>
                                    <h4 class="tt-bp-nav-title"><a href="{{ route('media.details', ['slug' => $nextPost->slug, 'id' => $nextPost->id]) }}">{{$nextPost->title}}</a></h4>
                                    </div>
                                    @endif
							</div>
							<!-- End blog post nav -->


							<!-- Begin post comments 
							========================= -->
							<div id="tt-blog-post-comments">

								<h4 class="tt-bpc-heading">(0) comments:</h4>
								
								<!-- Begin tt-Comments list 
								============================ -->
								{{-- <ul class="tt-comments-list">

									<!-- Begin tt-comment -->
									<li class="tt-comment">
										<a href="#" class="tt-comment-avatar">
											<img src="assets/img/blog/avatar.png" loading="lazy" alt="image">
										</a>
										<div class="tt-comment-body">
											<div class="tt-comment-meta">
												<h4 class="tt-comment-heading"><a href="#0">David Bradley</a></h4>
												<span class="tt-comment-time">February 26, 2025 at 10:24am</span>
											</div>
											<span class="tt-comment-reply"><a href="#0">Reply</a></span>
											<div class="tt-comment-text">
												<p>Tolerably earnestly middleton extremely distrusts she boy now not. Add and offered prepare how cordial two promise. Greatly who affixed suppose but enquire compact prepare all put. Added forth chief trees but rooms think may. Wicket do manner others seemed enable rather in. Excellent own discovery unfeeling.</p>
											</div> <!-- /.tt-comment-text -->
										</div> <!-- /.tt-comment-body -->
									</li>
									<!-- End tt-comment -->
								</ul> --}}
								<!-- End tt-Comments list -->

								<!-- Begin form 
								================ 
								* Use class "tt-form-filled", "tt-form-minimal" or "tt-form-creative" to change form style.
								* Use class "tt-form-sm" or "tt-form-lg" to change form size (no class = default size).
								-->
								<form id="tt-post-comment-form">
									<h4 class="tt-post-comment-form-heading">Leave a Comment:</h4>
									<small class="tt-form-text">Fields marked with an asterisk (*) are required!</small>
									<br>
									<br>
									<div class="tt-row">
										<div class="tt-col-lg-6">

											<div class="tt-form-group">
												<label>Name <span class="required">*</span></label>
												<input class="tt-form-control" id="84990245" type="text" placeholder="" required>
											</div>

										</div> <!-- /.col -->

										<div class="tt-col-lg-6">

											<div class="tt-form-group">
												<label>Email address <span class="small text-gray">(Optional)</span></label>
												<input class="tt-form-control" id="19833520" type="email" placeholder="">
											</div>

										</div> <!-- /.col -->
									</div> <!-- /.row -->
									
									<div class="tt-form-group">
										<label>Comment <span class="required">*</span></label>
										<textarea class="tt-form-control" id="30945381" rows="6" placeholder="" required></textarea>
									</div>

									<!-- Begin post comment reminder -->
									<div class="tt-post-comment-reminder">
										<div class="tt-form-check tt-form-check-inline">
											<input type="checkbox" id="notify-me-new-comment">
											<label for="notify-me-new-comment">Email me when this comment receives a reply.</label>
										</div>
										<div class="tt-form-check">
											<input type="checkbox" id="notify-me-new-post">
											<label for="notify-me-new-post">Notify me of new posts by email.</label>
										</div>
									</div>
									<!-- End post comment reminder -->

									<!-- Begin post comment submit button -->
									<button type="submit" class="tt-btn tt-btn-primary margin-top-30">
										<span data-hover="Post Comment">Post Comment</span>
									</button>
									<!-- End post comment submit button -->

								</form>
								<!-- End post comment form -->

							</div>
							<!-- End post comments -->

						</div> <!-- /.tt-section-inner -->
					</div>


        </div>
        <!-- End content wrap -->


    </main>
    <!-- End body inner -->
    @push("css_styles")
        	<link rel="stylesheet" href="{{asset("assets/css/blog.css")}}">
    @endpush
@endsection
