<div class="tt-section padding-top-xlg-140 border-top">
    <div class="tt-section-inner tt-wrap">

        <div class="tt-row">
            <div class="tt-col-xl-8">

                <div class="tt-heading tt-heading-xxxlg">
                    <h3 class="tt-heading-subtitle tt-text-reveal">Experience & Impact</h3>
                    <h2 class="tt-heading-title tt-text-reveal">Key Initiatives</h2>
                    <!-- You can use <br> to break a text line if needed -->
                </div>
                <!-- End tt-Heading -->

                <div class="tt-text-uppercase max-width-400 margin-left-xlg-10-p text-pretty tt-text-reveal">
                    Please explore my selected projects below. Click on each one for an overview
                </div>

            </div> <!-- /.tt-col -->

            <div class="tt-col-xl-4 tt-align-self-end margin-top-30">

                <!-- Begin big round button
                ============================ -->
                <div class="tt-big-round-ptn tt-anim-fadeinup">
                    <a href="javascript:;" class="tt-big-round-ptn-holder tt-magnetic-item">
                        <div class="tt-big-round-ptn-inner">All<br> Projects</div>
                    </a>
                </div>
                <!-- End big round button -->

            </div> <!-- /.tt-col -->
        </div><!-- /.tt-row -->

    </div> <!-- /.tt-section-inner -->
</div>

<div class="tt-section">
    <div class="tt-section-inner max-width-2200">

        <div class="tt-portfolio-compact-list pcl-caption-hover pcl-image-hover">
            <div class="pcli-inner">

              @foreach ($keyinitiatives as $keyinitiative)
             
                   <!-- Begin portfolio compact list item
                 ======================================= -->
                <a href="{{route("key_initiative.details",$keyinitiative->slug)}}" class="pcli-item tt-anim-fadeinup" data-cursor="View<br>Project">
                    <div class="pcli-item-inner">
                        <div class="pcli-col pcli-col-image">
                            <div class="pcli-image">
                                <!-- Note: The recommended maximum image width is 800px -->
                                <img src="{{asset("assets/images/keyinitiative/$keyinitiative->banner")}}" loading="lazy" alt="Image">
                            </div> <!-- /.pcli-image -->
                        </div> <!-- /.pcli-col -->

                        <div class="pcli-col pcli-col-count">
                            <div class="pcli-count"></div>
                        </div> <!-- /.pcli-col -->

                        <div class="pcli-col pcli-col-caption">
                            <div class="pcli-caption">
                                <h2 class="pcli-title">{{$keyinitiative->title}}</h2>
                                <div class="pcli-categories">
                                    <div class="pcli-category">{{$keyinitiative->year}}</div>
                                    <!-- <div class="pcli-category">Varia</div> -->
                                </div> <!-- /.pcli-categories -->
                            </div> <!-- /.pcli-caption -->
                        </div> <!-- /.pcli-col -->
                    </div> <!-- /.pcli-item-inner -->
                </a>
                <!-- End portfolio compact list item -->
              @endforeach
               

            </div> <!-- /.pcli-inner -->

        </div>
        <!-- End portfolio compact list -->

    </div> <!-- /.tt-section-inner -->
</div>