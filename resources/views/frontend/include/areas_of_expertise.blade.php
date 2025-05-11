  <div class="tt-section">
        <div class="tt-section-inner tt-wrap max-width-1500">

            <div class="tt-row">
                <div class="tt-col-xl-3 margin-bottom-60">


                    <div class="tt-heading tt-heading-xxlg">
                        <h3 class="tt-heading-subtitle tt-text-reveal">Areas of Expertise</h3>
                        <h2 class="tt-heading-title tt-text-reveal">Key Focus Areas</h2>
                        <!-- You can use <br> to break a text line if needed -->
                    </div>
                    <!-- End tt-Heading -->

                    <div class="tt-text-uppercase max-width-400 margin-bottom-20 text-pretty tt-text-reveal">
                       Leverage global experience and expertise in policy development, capacity building, and community empowerment to drive impactful, sustainable change.
                    </div>

                </div> <!-- /.tt-col -->

                <div class="tt-col-xl-2">
                </div> <!-- /.tt-col -->

                <div class="tt-col-xl-7 tt-align-self-end">


                    <div class="tt-accordion tt-ac-lg tt-ac-hover tt-ac-counter tt-ac-borders">

                      @foreach ($keyfocusareas as $keyfocusarea)
                            <div class="tt-accordion-item tt-anim-fadeinup">
                            <div class="tt-accordion-heading">
                                <div class="tt-ac-head cursor-alter">
                                    <div class="tt-ac-head-inner">
                                        <h4 class="tt-ac-head-title">{{$keyfocusarea->title}}</h4>
                                    </div>
                                </div>
                                <div class="tt-accordion-caret">
                                    <div class="tt-accordion-caret-inner tt-magnetic-item">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                            <path
                                                d="M13.025 1l-2.847 2.828 6.176 6.176h-16.354v3.992h16.354l-6.176 6.176 2.847 2.828 10.975-11z">
                                            </path>
                                        </svg>
                                    </div>
                                </div> <!-- /.tt-accordion-caret -->
                            </div> <!-- /.tt-accordion-heading -->

                            <!-- Use class "is-open" to make this content open by default. Max width class is optional. -->
                            <div class="tt-accordion-content max-width-1400">

                             

                                <p style="text-align: justify">{!!$keyfocusarea->description!!}</p>

                                <a href="{{route("contactus")}}" class="tt-btn tt-btn-outline tt-magnetic-item">
                                    <span data-hover="Let’s Connect!">Let’s Connect!</span>
                                </a>

                            </div> <!-- /.tt-accordion-content -->
                        </div> <!-- /.tt-accordion-item -->

                      @endforeach
                     
                    </div>
                    <!-- End accordion -->

                </div> <!-- /.tt-col -->
            </div><!-- /.tt-row -->

        </div> <!-- /.tt-section-inner -->
    </div>