
<div class="tt-section no-padding-bottom padding-bottom-xlg-80">
						<div class="tt-section-inner tt-wrap">

							<div class="tt-row">
								<div class="tt-col-xl-8">

									<!-- Begin tt-Heading 
									====================== 
									* Use class "tt-heading-xsm", "tt-heading-sm", "tt-heading-lg", "tt-heading-xlg", "tt-heading-xxlg" or "tt-heading-xxxlg" to set caption size (no class = default size).
									* Use class "tt-heading-center" to align tt-Heading to center.
									* Use class "tt-text-reveal" or "tt-anim-fadeinup" with title or subtitle element to enable text reveal animation.
									* Use prepared helper class "max-width-*" to add custom width if needed. Example: "max-width-800". More info about helper classes can be found in the file "helper.css".
									-->
									<div class="tt-heading tt-heading-xxxlg">
										<h3 class="tt-heading-subtitle tt-text-reveal">Our Commitment</h3>
										<h2 class="tt-heading-title tt-text-reveal">OUR VISION & MISSION</h2> <!-- You can use <br> to break a text line if needed -->
									</div>
									<!-- End tt-Heading -->

									<div class="tt-text-uppercase max-width-400 margin-left-xlg-10-p text-pretty tt-text-reveal">
										Empowering Growth with Purpose, Driven by Excellence and Integrity.
									</div>

								</div> <!-- /.tt-col -->
							
								<div class="tt-col-xl-4 tt-align-self-end margin-top-40">

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

								</div> <!-- /.tt-col -->
							</div><!-- /.tt-row -->

						</div> <!-- /.tt-section-inner -->
					</div>

<div class="tt-section">
						<div class="tt-section-inner">

							<!-- Begin horizontal accordion
							================================ 
							* Use class "tt-hac-alter-hover" to enable alternative hover style (no effect on small screens!).
							* INFO: Do not use too many items here! The more items, the narrower the space to display. Up to 5 items are optimal. If you want to display more items, use a vertical accordion instead.
							-->
							<div class="tt-horizontal-accordion tt-hac-alter-hover tt-anim-fadeinup">

								<!-- Begin horizontal accordion item 
								===================================== -->
								<div class="tt-hac-item cursor-alter">
									<div class="tt-hac-item-count"></div>
									<div class="tt-hac-item-inner">
										<div class="tt-hac-item-content">
											<div class="tt-haci-content-top">
												<h2 class="tt-haci-title">Our <br> Vision</h2>
												<div class="tt-haci-description"> <!-- Max 4 lines of text displayed -->
													{{$setting->our_vision}}
												</div> <!-- /.tt-haci-description -->
											</div> <!-- /.tt-haci-content-top -->

											
										</div> <!-- /.tt-hac-item-content -->
									</div> <!-- /.tt-hac-item-inner -->
								</div>
								<!-- End horizontal accordion item -->

								<!-- Begin horizontal accordion item 
								===================================== -->
								<div class="tt-hac-item cursor-alter">
									<div class="tt-hac-item-count"></div>
									<div class="tt-hac-item-inner">
										<div class="tt-hac-item-content">
											<div class="tt-haci-content-top">
												<h2 class="tt-haci-title">Our <br> Mission</h2>
												<div class="tt-haci-description"> <!-- Max 4 lines of text displayed -->
													{{$setting->our_mission}}
												</div> <!-- /.tt-haci-description -->
											</div> <!-- /.tt-haci-content-top -->

											
										</div> <!-- /.tt-hac-item-content -->
									</div> <!-- /.tt-hac-item-inner -->
								</div>
								<!-- End horizontal accordion item -->

					
							</div>
							<!-- End horizontal accordion -->

						</div> <!-- /.tt-section-inner -->
					</div>