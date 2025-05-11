@extends('frontend.welcomeLayout')
@php
    $setting = \App\Models\Setting::find(1);
@endphp
@section('title', ' Home')

@section('content')

    @include('frontend.include.about_me')
    <!-- End tt-section -->

      {{-- MISSION AND VISION --}}
    @include("frontend.include.mission_vision")

    
   @if (count($keyinitiatives) > 0)
   @include("frontend.include.experience_and_impact")
   @endif


   @if (count($keyfocusareas) > 0)
  @include("frontend.include.areas_of_expertise")
   @endif

  
  {{-- @include("frontend.include.award") --}}



    {{-- <div class="tt-section padding-top-xlg-120 padding-bottom-xlg-120">
        <div class="tt-section-inner tt-wrap">

            <div class="tt-row margin-bottom-40">
                <div class="tt-col-xl-8">


                    <div class="tt-heading tt-heading-xxxlg no-margin">
                        <h3 class="tt-heading-subtitle tt-text-reveal">Contact</h3>
                        <h2 class="tt-heading-title tt-text-reveal">Let's Work<br> Together</h2>
                        <!-- You can use <br> to break a text line if needed -->
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
                        <a href="contact.html" class="tt-big-round-ptn-holder tt-magnetic-item">
                            <div class="tt-big-round-ptn-inner">Let's<br> Connect!</div>
                        </a>
                    </div>
                    <!-- End big round button -->

                </div> <!-- /.tt-col -->
            </div><!-- /.tt-row -->

        </div> <!-- /.tt-section-inner -->
    </div> --}}
    <!-- End tt-section -->
@endsection
