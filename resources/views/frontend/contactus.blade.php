@php
    $setting = \App\Models\Setting::find(1);
@endphp
@extends("frontend.pageLayout")
@section("title","Contact Us")
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
                <img src="{{ asset("images/settings/$setting->website_logo_dark") }}" class="tt-ptr-prel-image" alt="Logo">
            </div> <!-- /.tt-ptr-prel-content -->
        </div> <!-- /.tt-ptr-preloader -->
    </div>
    <!-- End page transition -->

    <!-- Begin magic cursor 
    ======================== -->
    <div id="magic-cursor">
        <div id="ball"></div>
    </div>
  
    @include("frontend.include.header")
    <!-- End header -->

    <div id="tt-content-wrap">

			
        <div id="page-header" class="ph-full ph-full-m ph-cap-xxxxlg ph-center ph-image-parallax ph-caption-parallax">

            <!-- End page header video -->
                
            <div class="page-header-inner tt-wrap">

                <div class="ph-caption">
                    <div class="ph-caption-inner">
                        <h2 class="ph-caption-subtitle">Let's Work Together</h2>
                        <h1 class="ph-caption-title">Contact</h1>
                        <div class="ph-caption-description max-width-700">
                             We would love to hear from you. Whether you are reaching out for collaborations, media inquiries, public speaking engagements, or policy discussions, your message is important.
                            </div>
                        </div>
                    </div> <!-- /.ph-caption-inner -->
                </div> <!-- /.ph-caption -->

            </div> <!-- /.page-header-inner -->

            <!-- Begin page header mask
            ============================ 
            Note: ph-mask is basically a clone of caption. If you want to use a different text on the mask then it is a bit tricky to fit. For better results, make sure that it will be the same length as possible as the original caption text (especially the title). It should also contain the same number of lines. Sometimes this can be difficult to achieve, in which case we recommend simply using identical text to the original caption.
            -->
            <div class="page-header-inner ph-mask">
                <div class="ph-mask-inner tt-wrap">

                    <div class="ph-caption">
                        <div class="ph-caption-inner">
                            <h2 class="ph-caption-subtitle">Let's Work Together</h2>
                            <h1 class="ph-caption-title">Write Me</h1>
                            <div class="ph-caption-description max-width-700">
                              We would love to hear from you. Whether you are reaching out for collaborations, media inquiries, public speaking engagements, or policy discussions, your message is important.
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
                    <li><a href="{{$setting->facebook}}" class="tt-magnetic-item" target="_blank" rel="noopener"><i class="fa-brands fa-facebook"></i></a></li>
                    <li><a href="{{$setting->linkedin}}" class="tt-magnetic-item" target="_blank" rel="noopener"><i class="fa-brands fa-linkedin"></i></a></li>
                    <li><a href="{{$setting->instagram}}" class="tt-magnetic-item" target="_blank" rel="noopener"><i class="fa-brands fa-instagram"></i></a></li>
                    <li><a href="{{$setting->twitter}}" class="tt-magnetic-item" target="_blank" rel="noopener"><i class="fa-brands fa-twitter"></i></a></li>
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

        <div id="tt-page-content">


            <div class="tt-section padding-top-40 padding-bottom-xlg-120">
                <div class="tt-section-inner tt-wrap">

                    <div class="tt-row tt-xl-row-reverse">
                        <div class="tt-col-xl-5">

                            <!-- Begin contact info 
                            ======================== -->
                            <div class="tt-contact-info margin-bottom-80">

                                <!-- Begin big arrow 
                                ====================== 
                                Use classes "tt-ba-angle-left", "tt-ba-angle-top", "tt-ba-angle-top-left", "tt-ba-angle-top-right", "tt-ba-angle-bottom", "tt-ba-angle-bottom-left", "tt-ba-angle-bottom-right" set change arrow pointing angle (no class = right).
                                -->
                                <div class="tt-big-arrow tt-ba-angle-bottom-left tt-anim-fadeinup">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path d="M13.025 1l-2.847 2.828 6.176 6.176h-16.354v3.992h16.354l-6.176 6.176 2.847 2.828 10.975-11z"></path>
                                    </svg>
                                </div> 
                                <!-- End big arrow -->

                                <div class="tt-contact-info-inner">

                                    <div class="margin-bottom-50 tt-anim-fadeinup">
                                        <h6>Let's Talk</h6>
                                        <p style="text-align:justify">
                                            Chris Kwaku Addy-Nayo is committed to building meaningful partnerships across borders, institutions, and communities. With a wealth of experience in international development, trade policy, political leadership, and youth empowerment, he is open to dialogues that inspire real change.
                                        </p>
                                    </div>
                                    
                                    <!-- Begin contact details 
                                    =========================== -->
                                    <div class="tt-contact-details margin-bottom-50 tt-anim-fadeinup">
                                        <h6>Details</h6>
                                        <ul>
                                            <li>
                                                <span class="tt-cd-icon"><i class="fas fa-map-marker-alt"></i></span>
                                                <a href="javascript:;" class="tt-link" target="_blank" rel="noopener">121 King Street, Melbourne, Australia</a>
                                            </li>
                                            <li>
                                                <span class="tt-cd-icon"><i class="fas fa-phone"></i></span>
                                                <a href="tel:{{$setting->phone}}" class="tt-link">{{$setting->phone}}</a>
                                            </li>
                                            <li>
                                                <span class="tt-cd-icon"><i class="fas fa-envelope"></i></span>
                                                <a href="mailto:{{$setting->email}}" class="tt-link">{{$setting->email}}</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- End contact details -->

                                    <!-- Begin social buttons 
                                    ========================== -->
                                    <div class="tt-social-buttons margin-bottom-50 tt-anim-fadeinup">
                                        <h6>Social</h6>
                                        <ul>
                                            <li><a href="{{$setting->facebook}}" class="tt-magnetic-item" target="_blank" rel="noopener"><i class="fa-brands fa-facebook-f"></i></a></li>
                                            <li><a href="{{$setting->twitter}}" class="tt-magnetic-item" target="_blank" rel="noopener"><i class="fa-brands fa-twitter"></i></a></li>
                                            <li><a href="{{$setting->instagram}}" class="tt-magnetic-item" target="_blank" rel="noopener"><i class="fa-brands fa-instagram"></i></a></li>
                                            <li><a href="{{$setting->linkedin}}" class="tt-magnetic-item" target="_blank" rel="noopener"><i class="fa-brands fa-linkedin"></i></a></li>
                                            <!-- <li><a href="https://x.com/Themetorium" class="tt-magnetic-item" target="_blank" rel="noopener"><i class="fa-brands fa-x-twitter"></i></a></li> -->
                                        </ul>
                                    </div>
                                    <!-- End social buttons  -->

                                </div> <!-- /.tt-contact-info-inner -->
                            </div>
                            <!-- End contact info -->

                        </div> <!-- /.tt-col -->

                        <div class="tt-col-xl-7">

                            <!-- Begin form 
                            ================ 
                            * Use class "tt-form-filled", "tt-form-minimal" or "tt-form-creative" to change form style.
                            * Use class "tt-form-sm" or "tt-form-lg" to change form size (no class = default size).
                            * Note-1: Use only lowercase letters in field names! For example name="email".
                            * Note-2: See the template documentation for how to set up the contact form.
                            -->
                            <form id="tt-contact-form" class="tt-form tt-form-creative tt-form-lg">

                                <!-- Becin contact form messages (do not remove!) -->
                                <div id="tt-contact-form-messages" role="alert">
                                    <div class="tt-cfm-inner"></div>
                                    <div class="tt-cfm-close hide-cursor"><i class="fa-solid fa-xmark"></i></div>
                                </div>
                                <!-- End contact form messages -->

    <form id="contactForm" class="needs-validation" novalidate>
    <div class="tt-contact-form-inner">
        <div class="tt-form-group tt-anim-fadeinup">
            <label>What's your name? <span class="required">*</span></label>
            <input class="tt-form-control form-control" id="sender-name" type="text" name="name" placeholder="John Smith" required>
            <div class="invalid-feedback">Please enter your name.</div>
        </div>

        <div class="tt-form-group tt-anim-fadeinup">
            <label>What's your email? <span class="required">*</span></label>
            <input class="tt-form-control form-control" id="sender-email" type="email" name="email" placeholder="john@smith.com" required>
            <div class="invalid-feedback">Please enter a valid email address.</div>
        </div>

        <div class="tt-form-group tt-anim-fadeinup">
            <label>What would you like to talk about? <span class="required">*</span></label>
            <select class="tt-form-control form-control" id="sender-option" name="option" required>
                <option value="" disabled selected>Please choose an option</option>
                <option value="Say Hello">Say hello</option>
                <option value="New Project">New project</option>
                <option value="Feedback">Feedback</option>
                <option value="Other">Other</option>
            </select>
            <div class="invalid-feedback">Please select a topic.</div>
        </div>

        <div class="tt-form-group tt-anim-fadeinup">
            <label>Your message <span class="required">*</span></label>
            <textarea class="tt-form-control form-control" id="sender-message" rows="5" name="message" placeholder="Hello, can you help me with ..." required></textarea>
            <div class="invalid-feedback">Please enter your message.</div>
        </div>

        <div class="tt-anim-fadeinup">
            <button type="submit" class="tt-btn tt-btn-primary tt-magnetic-item">
                <span data-hover="Send Message">Send Message</span>
            </button>
        </div>
    </div>
</form>
 <!-- /.tt-contact-form-inner-->
                            </form>
                            <!-- End form -->

                        </div> <!-- /.tt-col -->
                    </div><!-- /.tt-row -->

                </div> <!-- /.tt-section-inner -->
            </div>
            <!-- End tt-section -->

        </div>
        <!-- End page content -->


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


</main>
<!-- End body inner -->

@push("js_scripts")
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
 document.addEventListener('DOMContentLoaded', function () {
        const form = document.getElementById('contactForm');

        form.addEventListener('submit', function (e) {
            e.preventDefault();

            // Bootstrap-style validation
            if (!form.checkValidity()) {
                form.classList.add('was-validated');
                return;
            }

            const formData = {
                name: document.getElementById('sender-name').value,
                email: document.getElementById('sender-email').value,
                option: document.getElementById('sender-option').value,
                message: document.getElementById('sender-message').value,
                _token: '{{ csrf_token() }}' // If you're using Blade
            };

            fetch('{{ route("contact.send") }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json'
                },
                body: JSON.stringify(formData)
            })
            .then(res => {
                if (!res.ok) throw new Error("Network response was not ok");
                return res.json();
            })
            .then(data => {
                alert('Your message was sent successfully!');
                form.reset();
                form.classList.remove('was-validated');
            })
            .catch(error => {
                alert('Something went wrong. Please try again.');
                console.error('Error:', error);
            });
        });
    });
</script>

@endpush
@endsection