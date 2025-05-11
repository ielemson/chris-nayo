<footer id="tt-footer" class="border-top">
    <div class="tt-footer-inner tt-wrap">

        <div class="tt-row">
            <div class="tt-col-xl-3 tt-col-sm-6">
                <div class="tt-footer-widget">
                    <h5 class="tt-footer-widget-heading">Links</h5>
                    <ul class="tt-footer-widget-list">
                        <li><a href="javascript:;" class="tt-link">Support</a></li>
                        <li><a href="javascript:;" class="tt-link">Licenses</a></li>
                        <li><a href="javascript:;" class="tt-link">Terms of Use</a></li>
                        <li><a href="javascript:;" class="tt-link">Privacy Policy</a></li>
                    </ul> <!-- /.tt-footer-widget-list -->
                </div> <!-- /.tt-footer-widget -->
            </div> <!-- /.tt-col -->

            <div class="tt-col-xl-3 tt-col-sm-6">
                <div class="tt-footer-widget">
                    <h5 class="tt-footer-widget-heading">Sitemap</h5>
                    <ul class="tt-footer-widget-list">
                        <li><a href="javascript:;" class="tt-link">About Me</a></li>
                        <li><a href="javascript:;" class="tt-link">My Work</a></li>
                        <li><a href="javascript:;" class="tt-link">Services</a></li>
                        <li><a href="javascript:;" class="tt-link">Contact</a></li>
                    </ul> <!-- /.tt-footer-widget-list -->
                </div> <!-- /.tt-footer-widget -->
            </div> <!-- /.tt-col -->

            <div class="tt-col-xl-3 tt-col-sm-6">
                <div class="tt-footer-widget">
                    <h5 class="tt-footer-widget-heading">Contact</h5>
                    <ul class="tt-footer-widget-list">
                        <li>
                            <a href="https://www.google.com/maps/place/121+King+St,+Melbourne+VIC+3000,+Austraalia/@-37.817251,144.955775,17z/data=!3m1!4b1!4m6!3m5!1s0x6ad65d4dd5a05d97:0x3e64f855a564844d!8m2!3d-37.817251!4d144.955775!16s%2Fg%2F11g0g8c54h"
                                class="tt-link" target="_blank" rel="nofollow noopener">
                                {{$setting->address}}
                            </a>
                        </li>
                        <li><a href="mailto:{{$setting->email}}" class="tt-link">{{$setting->email}}</a></li>
                        <li><a href="tel:{{$setting->phone}}" class="tt-link">{{$setting->phone}}</a></li>
                        <li>
                            <div class="tt-social-buttons">
                                <ul>
                                    <li><a href="{{$setting->facebook}}"
                                            class="tt-magnetic-item" target="_blank" rel="noopener"><i
                                                class="fa-brands fa-facebook-f"></i></a></li>
                                                <li><a href="{{$setting->twitter}}" class="tt-magnetic-item"
                                            target="_blank" rel="noopener"><i
                                                class="fa-brands fa-twitter"></i></a></li>
                                    <li><a href="{{$setting->instagram}}"
                                            class="tt-magnetic-item" target="_blank" rel="noopener"><i
                                                class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="{{$setting->linkedin}}"
                                            class="tt-magnetic-item" target="_blank" rel="noopener"><i
                                                class="fa-brands fa-linkedin"></i></a></li>
                                    
                                    <!-- <li><a href="https://x.com/Themetorium" class="tt-magnetic-item" target="_blank" rel="noopener"><i class="fa-brands fa-x-twitter"></i></a></li> -->
                                </ul>
                            </div> <!-- /.tt-social-buttons -->
                        </li>
                    </ul> <!-- /.tt-footer-widget-list -->
                </div> <!-- /.tt-footer-widget -->
            </div> <!-- /.tt-col -->

            <div class="tt-col-xl-3 tt-col-sm-6 tt-justify-content-xl-end">
                <div class="tt-footer-widget">
                    <ul class="tt-footer-widget-list">
                        <li>
                            <!-- You may need to change the img height to match your logo type. You can do this from the "theme.css" file (find: ".tt-footer-logo img").-->
                            <div class="tt-footer-logo">
                                <a href="{{ asset("images/settings/$setting->website_logo_dark") }}"
                                    class="tt-magnetic-item">
                                    <img src="assets/img/logo-light.png" class="tt-logo-light"
                                        loading="lazy" alt="Logo"> <!-- logo light -->
                                    <img src="{{ asset("images/settings/$setting->website_logo_dark") }}"
                                        class="tt-logo-dark" loading="lazy" alt="Logo">
                                    <!-- logo dark -->
                                </a>
                            </div> <!-- /.tt-footer-logo -->
                        </li>
                        <li>
                            <div class="tt-footer-copyright">
                                © <span class="tt-copyright-year"></span> <a
                                    href="javascript:;" class="tt-link" target="_blank"
                                    rel="nofollow noopener">My Portfolio</a><br>
                                All Rights Reserved
                            </div> <!-- /.tt-footer-copyright -->
                        </li>
                    </ul> <!-- /.tt-footer-widget-list -->
                </div> <!-- /.tt-footer-widget -->
            </div> <!-- /.tt-col -->
        </div> <!-- /.tt-row -->

    </div> <!-- /.tt-section-inner -->
</footer>