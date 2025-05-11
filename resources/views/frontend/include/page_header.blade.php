@php
$team = \App\Models\TeamProfile::find(1);
@endphp
<div id="page-header"
                    class="ph-full ph-full-m ph-center ph-cap-xxxxlg ph-image-parallax ph-caption-parallax">

                    <div class="page-header-inner tt-wrap">

                        <div class="ph-caption">
                            <div class="ph-caption-inner">
                                <!-- <h2 class="ph-caption-subtitle">Subtitle</h2> -->
                                <h1 class="ph-caption-title">{{$team->fname}}<br> {{$team->lname}}</h1>
                                <div class="ph-caption-description max-width-700">
                                    {!!$team->tagline!!}
                                </div>
                            </div> <!-- /.ph-caption-inner -->
                        </div>
                        <!-- End page header caption -->

                    </div> <!-- /.page-header-inner -->

                    <div class="page-header-inner ph-mask">
                        <div class="ph-mask-inner tt-wrap">

                            <div class="ph-caption">
                                <div class="ph-caption-inner">
                                    <!-- <h2 class="ph-caption-subtitle">Subtitle</h2> -->
                                    <h1 class="ph-caption-title">{{$team->fname}}<br> {{$team->lname}}</h1>
                                    <div class="ph-caption-description max-width-700">
                                        {!!$team->tagline!!}
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
                            <li><a href="{{$setting->facebook}}" class="tt-magnetic-item" target="_blank"
                                    rel="noopener"><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a href="{{$setting->twitter}}" class="tt-magnetic-item" target="_blank"
                                    rel="noopener"><i class="fa-brands fa-twitter"></i></a></li>
                            <li><a href="{{$setting->instagram}}" class="tt-magnetic-item" target="_blank"
                                    rel="noopener"><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="{{$setting->linkedin}}" class="tt-magnetic-item" target="_blank"
                                    rel="noopener"><i class="fa-brands fa-linkedin"></i></a></li>
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
                                    <path
                                        d="M50,250c0-110.5,89.5-200,200-200s200,89.5,200,200s-89.5,200-200,200S50,360.5,50,250"
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