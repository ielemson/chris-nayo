@php
    $setting = \App\Models\Setting::find(1);
    $team = \App\Models\TeamProfile::find(1);
    // dd($team)
@endphp

<div class="tt-section padding-top-xlg-140 padding-bottom-xlg-120 border-top">
    <div class="tt-section-inner tt-wrap">

        <div class="tt-row">
            <div class="tt-col-lg-4">
                <div class="tt-video ttv-portrait ttv-grayscale">
                    <video playsinline muted autoplay loop preload="metadata" poster="{{asset("assets/images/team/$team->picture")}}" class="tt-anim-zoomin">
                        <source src="" data-src="" type="video/mp4">
                        <source src="" data-src="" type="video/webm">
                    </video>
                </div>
                <!-- End tt-video -->

                <div class="tt-text-uppercase margin-top-30 tt-text-reveal">
                {!! $team->position!!}
                </div>
            </div>
             <!-- /.tt-col -->
            
            <div class="tt-col-lg-8 tt-align-self-center">

                <div class="text-xlg font-400 tt-text-reveal" style="text-align:justify">
                   {{ Str::limit($team->about, 550) }}
                </div>

                <a href="{{route("aboutme")}}" class="tt-btn tt-btn-outline margin-top-40 tt-magnetic-item tt-anim-fadeinup">
                    <span data-hover="More About Me">Read Full Biography</span>
                </a>
                
            </div> <!-- /.tt-col -->
        </div><!-- /.tt-row -->

    </div> <!-- /.tt-section-inner -->
</div>