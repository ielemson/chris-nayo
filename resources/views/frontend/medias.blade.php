@extends('frontend.pageLayout')
@php
    $setting = \App\Models\Setting::find(1);
    $team = \App\Models\TeamProfile::find(1);
@endphp
@section('title', 'Media | Events | Press Release')

@section('content')
    <main id="body-inner">

        <div id="page-header" class="ph-full ph-full-m ph-cap-xxxxlg ph-center ph-image-parallax ph-caption-parallax">

            <div class="page-header-inner tt-wrap">

                <div class="ph-caption">
                    <div class="ph-caption-inner">
                        <h2 class="ph-caption-subtitle">Media &amp; Events</h2>
                        <h1 class="ph-caption-title">Coverage</h1>
                    </div> <!-- /.ph-caption-inner -->
                </div> <!-- /.ph-caption -->

            </div> <!-- /.page-header-inner -->


            <div class="page-header-inner ph-mask">
                <div class="ph-mask-inner tt-wrap">

                    <div class="ph-caption">
                        <div class="ph-caption-inner">
                            <h2 class="ph-caption-subtitle">Articles &amp; News</h2>
                            <h1 class="ph-caption-title">Blog</h1>
                        </div> <!-- /.ph-caption-inner -->
                    </div> <!-- /.ph-caption -->

                </div> <!-- /.ph-mask-inner -->
            </div>
            <!-- End page header mask -->


            <!-- Begin social buttons
    ========================== -->
            <div class="ph-social">
                <ul>
                    <li><a href="{{ $setting->facebook }}" class="tt-magnetic-item" target="_blank" rel="noopener"><i
                                class="fa-brands fa-facebook-f"></i></a></li>
                    <li><a href="{{ $setting->twitter }}" class="tt-magnetic-item" target="_blank" rel="noopener"><i
                                class="fa-brands fa-twitter"></i></a></li>
                    <li><a href="{{ $setting->instagram }}" class="tt-magnetic-item" target="_blank" rel="noopener"><i
                                class="fa-brands fa-instagram"></i></a></li>
                    <li><a href="{{ $setting->linkedin }}" class="tt-magnetic-item" target="_blank" rel="noopener"><i
                                class="fa-brands fa-linkedin"></i></a></li>
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
                            <path d="M50,250c0-110.5,89.5-200,200-200s200,89.5,200,200s-89.5,200-200,200S50,360.5,50,250"
                                id="textcircle"></path>
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
            <div class="tt-section padding-bottom-xlg-120">
                <div class="tt-section-inner tt-wrap max-width-1000">

                       
                    <div id="blog-list" class="bli-compact bli-image-cropped">

                        <!-- Begin blog list item
                        ========================== -->
                     @foreach ($events as $event)
                            <article class="blog-list-item">

                            <!-- Begin blog list item image -->
                            <a href="{{ route("media.details",$event->slug) }}" class="bli-image-wrap" data-cursor="Read<br>More">
                                <figure class="bli-image tt-anim-zoomin">
                                    <img src="{{ asset('assets/images/banner/' .$event->event_banner) }}" loading="lazy" alt="Image">
                                </figure>
                            </a>
                            <!-- End blog list item image -->

                            <!-- Begin blog list item info -->
                            <div class="bli-info">
                                <div class="bli-categories">
                                    <a href="{{ route("media.details",$event->slug) }}">
                                    
                                         {{ 
                                            $event->category == 'press_release' ? 'Press Release' : 
                                            ($event->category == 'media_coverage' ? 'Medida Coverage' : 'Events') 
                                        }}
                                    </a>
                             
                                </div>
                                <h2 class="bli-title"><a href="{{ route("media.details",$event->slug) }}">{{ $event->title }}</a></h2>
                                <div class="bli-meta">
                                    <span class="published">{{ Carbon\Carbon::parse($event->created_at)->diffForHumans() }}</span>
                                    <span class="posted-by">- by <a href="{{ route("media.details",$event->slug) }}"
                                            title="View all posts by John Doe">Admin</a></span>
                                </div>
                                <div class="bli-desc"> <!-- 3 lines is optimal! -->
                                       {!! Str::limit( $event->content, 550) !!}
                                </div>
                                <a href="{{ route("media.details",$event->slug) }}" class="tt-btn tt-btn-primary">
                                    <span data-hover="Read More">Read More</span>
                                </a>
                            </div>
                            <!-- End blog list item info -->

                        </article>
                     @endforeach
                        <!-- End blog list item -->


                    </div>
                    <!-- End blog list -->

                    <div class="tt-pagination">
                        <div class="tt-pagin-prev">
                            <a href="#" class="tt-pagin-item tt-magnetic-item"><i class="fas fa-arrow-left"></i></a>
                        </div>
                        <div class="tt-pagin-numbers">
                            <a href="#" class="tt-pagin-item tt-magnetic-item active">1</a>
                            <a href="#" class="tt-pagin-item tt-magnetic-item">2</a>
                            <a href="#" class="tt-pagin-item tt-magnetic-item">3</a>
                            <a href="#" class="tt-pagin-item tt-magnetic-item">4</a>
                        </div>
                        <div class="tt-pagin-next">
                            <a href="#" class="tt-pagin-item tt-pagin-next tt-magnetic-item"><i
                                    class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <!-- End tt-pagination -->

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
