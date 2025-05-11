@extends('frontend.pageLayout')
@php
    $setting = \App\Models\Setting::find(1);
    $team = \App\Models\TeamProfile::find(1);
@endphp
@section('title', "404")

@section('content')
    <main id="body-inner">
	

        @include('frontend.include.header')
        <!-- End header -->

     <div id="tt-page-content">

					<div class="tt-section no-padding">
						<div class="tt-section-inner tt-wrap">

							<div class="tt-404-error">
								<h2 class="tt-404-error-subtitle">404 Error</h2>
								<h1 class="tt-404-error-title">Oops!</h1>
								<div class="tt-404-error-description">Something went wrong.<br> This page could not be found.</div>
								<a href="{{route("welcome")}}" class="tt-btn tt-btn-secondary margin-top-40 tt-magnetic-item">
									<span data-hover="Home Page">Home Page</span>
								</a>
							</div>

						</div> <!-- /.tt-section-inner -->
					</div>
					<!-- End tt-section -->


				</div>
        <!-- End content wrap -->


    </main>
    <!-- End body inner -->
    @push("css_styles")
        	<link rel="stylesheet" href="{{asset("assets/css/blog.css")}}">
    @endpush
@endsection
