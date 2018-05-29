<?php 

/**
 * Template Name: Welcome Template
 */

get_header(); 

?>
 <!--
Welcome Slider
==================================== -->
<?php 


	$query = new WP_Query([
		'post_type'	=> 'bingo_slider',
		'posts_per_page'	=> 2,
		'orderby'			=> 'menu_order',
		'order'				=> 'ASC'
	]);

	

	
?>
<?php 
	while($query->have_posts()): $query->the_post();
		$image_id = get_post_thumbnail_id(get_the_ID());
		$image = wp_get_attachment_image_src($image_id, 'full');

		$button_link1 =  get_post_meta(get_the_ID(), 'button_link1', true);
		$button_text1 = get_post_meta(get_the_ID(), 'button_text1', true);

		$button_link2 =  get_post_meta(get_the_ID(), 'button_link2', true);
		$button_text2 = get_post_meta(get_the_ID(), 'button_text2', true);
?>
<section class="hero-area" style = "background-image: url(<?php echo $image[0]; ?>) ;">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="block" >
					<h1 class="wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".3s" ><?php the_title(); ?></h1>
					<p class="wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".5s"><?php the_content(); ?></p>
					<ul class="list-inline wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".7s">
					
						<li>
							<a data-scroll href="<?php echo $button_link1; ?>" class="btn btn-main"><?php echo $button_text1; ?></a>		
						</li>

						<li>
							<a data-scroll href="<?php echo $button_link2; ?>" class="btn btn-transparent"><?php echo $button_text2; ?></a>		
						</li>
						

					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<?php endwhile; ?>

<!--
Start About Section
==================================== -->
<section class="about" id="about">
	<div class="container">
		<div class="row">
		
			<!-- section title -->
			<div class="title text-center"  >
				<h2>About Us</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa placeat voluptas tempore recusandae quasi nesciunt in, facilis animi. Sint, possimus?</p>
				<div class="border"></div>
			</div>
			<!-- /section title -->

			<div class="col-md-6">
				<img src="<?php echo get_template_directory_uri(); ?>/images//about-us.jpg" class="img-responsive" alt="">
			</div>
			<div class="col-md-6">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a tempor eros. Pellentesque elementum nulla sed justo tempor posuere sit amet sit amet ligula. Curabitur felis nibh, imperdiet eu erat non, luctus cursus lectus. Donec maximus diam leo, sed fringilla nisl auctor eget. Donec dictum neque est, ac faucibus ex blandit a.</p>
				<p>Curabitur felis nibh, imperdiet eu erat non, luctus cursus lectus. Donec maximus diam leo, sed fringilla nisl auctor eget. Donec dictum neque est, ac faucibus ex blandit a</p>
				<h4>Lorem ipsum dolor sit.</h4>
				<ul class="feature-list">
					<li> <i class="tf-ion-android-checkmark-circle"></i> Web Development</li>
					<li> <i class="tf-ion-android-checkmark-circle"></i> Application Development</li>
					<li> <i class="tf-ion-android-checkmark-circle"></i> Website Design</li>
					<li> <i class="tf-ion-android-checkmark-circle"></i> UI/UX Design</li>
					<li> <i class="tf-ion-android-checkmark-circle"></i> SEO Service</li>
				</ul>
				<a href="#" class="btn btn-main mt-20">Learn More</a>
			</div>
		</div> 		<!-- End row -->
	</div>   	<!-- End container -->
</section>   <!-- End section -->

<!--
Start Call To Action
==================================== -->
<section class="call-to-action-2 section">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a tempor eros. Pellentesque elementum nulla sed justo tempor posuere sit amet sit amet ligula.</h2>
			</div>
		</div> 		<!-- End row -->
	</div>   	<!-- End container -->
</section>   <!-- End section -->

<!-- Start Services Section
		==================================== -->
		
		<section class="services"  id="services">
			<div class="container">
				<div class="row">
					
					<!-- section title -->
					<div class="title text-center" >
						<h2 >Our Services</h2>
						<p>Vestibulum nisl tortor, consectetur quis imperdiet bibendum, laoreet sed arcu. Sed condimentum iaculis ex, in faucibus lorem accumsan non. Donec mattis tincidunt metus. Morbi sed tortor a risus luctus dignissim.</p>
						<div class="border"></div>
					</div>
					<!-- /section title -->
					
                    <!-- Single Service Item -->
					<div class="col-md-4 col-sm-6 col-xs-12  no-padding" >
						<div class="service-block color-bg text-center">
							<div class="service-icon text-center">
								<i class="tf-ion-ios-copy-outline"></i>
							</div>
							<h3>WordPress Theme</h3>
							<p>Lorem ipsum dolor sit amet, consectetur.. Sed id lorem eget orci dictum facilisis vel id tellus. Nullam iaculis arcu at mauris dapibus consectetur.</p>
						</div>
					</div>
                    <!-- End Single Service Item -->
                    
                    <!-- Single Service Item -->
					<div class="col-md-4 col-sm-6 col-xs-12  no-padding" >
						<div class="service-block text-center">
							<div class="service-icon text-center">
								<i class="tf-ion-ios-alarm-outline"></i>
							</div>
							<h3>Responsive Design</h3>
							<p>Lorem ipsum dolor sit amet, consectetur.. Sed id lorem eget orci dictum facilisis vel id tellus. Nullam iaculis arcu at mauris dapibus consectetur.</p>
						</div>
					</div>
                    <!-- End Single Service Item -->
                    
                    <!-- Single Service Item -->
					<div class="col-md-4 col-sm-6 col-xs-12  no-padding"  >
						<div class="service-block color-bg text-center">
							<div class="service-icon text-center">
								<i class="tf-ion-ios-book-outline"></i>
							</div>
							<h3>Media &amp; Advertisement</h3>
							<p>Lorem ipsum dolor sit amet, consectetur.. Sed id lorem eget orci dictum facilisis vel id tellus. Nullam iaculis arcu at mauris dapibus consectetur.</p>
						</div>
					</div>
					<!-- End Single Service Item -->
					
					<!-- Single Service Item -->
					<div class="col-md-4 col-sm-6 col-xs-12  no-padding" >
						<div class="service-block  text-center">
							<div class="service-icon text-center">
								<i class="tf-ion-ios-briefcase-outline"></i>
							</div>
							<h3>Graphic Design</h3>
							<p>Lorem ipsum dolor sit amet, consectetur.. Sed id lorem eget orci dictum facilisis vel id tellus. Nullam iaculis arcu at mauris dapibus consectetur.</p>
						</div>
					</div>
					<!-- End Single Service Item -->
					
					<!-- Single Service Item -->
					<div class="col-md-4 col-sm-6 col-xs-12  no-padding"  >
						<div class="service-block color-bg text-center">
							<div class="service-icon text-center">
								<i class="tf-ion-ios-crop"></i>
							</div>
							<h3>Apps Development</h3>
							<p>Lorem ipsum dolor sit amet, consectetur.. Sed id lorem eget orci dictum facilisis vel id tellus. Nullam iaculis arcu at mauris dapibus consectetur.</p>
						</div>
					</div>
					<!-- End Single Service Item -->
					
					<!-- Single Service Item -->
					<div class="col-md-4 col-sm-6 col-xs-12  no-padding">
						<div class="service-block text-center">
							<div class="service-icon text-center">
								<i class="tf-ion-ios-home-outline"></i>
							</div>
							<h3>Networking</h3>
							<p>Lorem ipsum dolor sit amet, consectetur.. Sed id lorem eget orci dictum facilisis vel id tellus. Nullam iaculis arcu at mauris dapibus consectetur.</p>
						</div>
					</div>
					<!-- End Single Service Item -->
						
				</div> 		<!-- End row -->
			</div>   	<!-- End container -->
		</section>   <!-- End section -->

<!--
Start Call To Action
==================================== -->
<section class="call-to-action section">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h2>Let's Create Something Together</h2>
				<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicudin bibendum auctor, <br> nisi elit consequat ipsum, nesagittis sem nid elit. Duis sed odio sitain elit.</p>
				<a href="" class="btn btn-main">Contact Us</a>
			</div>
		</div> 		<!-- End row -->
	</div>   	<!-- End container -->
</section>   <!-- End section -->

<!-- Start Team Skills
		=========================================== -->
		
		<section class="team-skills section-sm" id="skills">
			<div class="container">
				<div class="row">
				
					<!-- section title -->
					<div class="title text-center">
						<h2>Our Skills</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus fugiat, vel veniam, eos et delectus eveniet molestiae. Esse, voluptas ratione.</p>
						<div class="border"></div>
					</div>
					<!-- /section title -->
					
					<div class="col-md-5">
						<div class="team-skills-content">
							<h2>Simple To Start</h2>
							<p>Vestibulum nisl tortor, consectetur quis imperdiet bium, letcu. Sedndime ntumiaculis ex, in faucibus lorem accumsan non. Donec mattis tin unt metuorbi sed tort Igor aman luctus dignissim. Vestibulum nisl tortor, consectetur quis imperdiet bium, letcu. Sedndime ntumiaculis ex, in faucibus lorem accumsan non.</p>
							<a href="" class="btn btn-main mt-20">Contact Us</a>
						</div>
					</div>
					<div class="col-md-6 col-md-offset-1">
						<div class="progress-block">
							<ul>
								<li>
									<span>Photoshop</span>
									<div class="progress">
										<div class="progress-bar" style="width: 90%;">
									    </div>
									</div>
								</li>
								<li>
									<span>Web Application</span>
									<div class="progress">
										<div class="progress-bar" style="width: 85%;">
									    </div>
									</div>
								</li>
								<li>
									<span>Andriod Application</span>
									<div class="progress">
										<div class="progress-bar" style="width: 92%;">
									    </div>
									</div>
								</li>
								<li>
									<span>IOS Development</span>
									<div class="progress">
										<div class="progress-bar" style="width: 78%;">
									    </div>
									</div>
								</li>
							</ul>
							
						</div>
					</div>
				</div>  		<!-- End row -->
				<div class="row">				
					<div class="col-md-12">
					
					
						<div id="clients-slider" class="clients-logo-slider">
						
							<img src="<?php echo get_template_directory_uri(); ?>/images//client-logo/logo1.png" alt="">
							<img src="<?php echo get_template_directory_uri(); ?>/images//client-logo/logo1.png" alt="">
							<img src="<?php echo get_template_directory_uri(); ?>/images//client-logo/logo1.png" alt="">
							<img src="<?php echo get_template_directory_uri(); ?>/images//client-logo/logo1.png" alt="">
							<img src="<?php echo get_template_directory_uri(); ?>/images//client-logo/logo1.png" alt="">
							<img src="<?php echo get_template_directory_uri(); ?>/images//client-logo/logo1.png" alt="">
							<img src="<?php echo get_template_directory_uri(); ?>/images//client-logo/logo1.png" alt="">
							<img src="<?php echo get_template_directory_uri(); ?>/images//client-logo/logo1.png" alt="">
							<img src="<?php echo get_template_directory_uri(); ?>/images//client-logo/logo1.png" alt="">
							<img src="<?php echo get_template_directory_uri(); ?>/images//client-logo/logo1.png" alt="">
						
						</div>
					
						
					</div>
					
					
				</div>
			</div>   	<!-- End container -->
		</section>   <!-- End section -->

<!--
		Start Counter Section
		==================================== -->
		
		<section  class="counter-wrapper section-sm" >
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<div class="title">
							<h2>Award-Winning Agency</h2>
							<p>Vestibulum nisl tortor, consectetur quis imperdiet bibendum, laoreet sed arcu. Sed condimentum iaculis ex, in faucibus lorem accumsan non. Donec mattis tincidunt metus. Morbi sed tortor a risus luctus dignissim.</p>
						</div>
					</div>
					<!-- first count item -->
					<div class="col-md-3 col-sm-6 col-xs-6 text-center " >
						<div class="counters-item">
							<i class="tf-ion-ios-alarm-outline"></i>
							<div>
							    <span class="counter" data-count="150">0</span>
							</div>
							<h3>Happy Clients</h3>
						</div>
					</div>
					<!-- end first count item -->
				
					<!-- second count item -->
					<div class="col-md-3 col-sm-6 col-xs-6 text-center " >
						<div class="counters-item">
							<i class="tf-ion-ios-analytics-outline"></i>
							<div>
							    <span class="counter" data-count="130">0</span>
							</div>
							<h3>Projects completed</h3>
						</div>
					</div>
					<!-- end second count item -->
				
					<!-- third count item -->
					<div class="col-md-3 col-sm-6 col-xs-6 text-center "  >
						<div class="counters-item">
							<i class="tf-ion-ios-compose-outline"></i>
							<div>
							    <span class="counter" data-count="99">0</span>
							</div>
				            <h3>Positive feedback</h3>
							
						</div>
					</div>
					<!-- end third count item -->
					
					<!-- fourth count item -->
					<div class="col-md-3 col-sm-6 col-xs-6 text-center ">
						<div class="counters-item kill-border">
							<i class="tf-ion-ios-bolt-outline"></i>
							<div>
							    <span class="counter" data-count="250">0</span>
							</div>
							<h3>Cups of Coffee</h3>
						</div>
					</div>
					<!-- end fourth count item -->
				</div> 		<!-- end row -->
			</div>   	<!-- end container -->
		</section>   <!-- end section -->

<!-- Start Portfolio Section
		=========================================== -->
		
		<section class="portfolio section-sm" id="portfolio">
			<div class="container-fluid">
				<div class="row " >
					<div class="col-lg-12">
					
						<!-- section title -->
						<div class="title text-center">
							<h2>Our Works</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro, veritatis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima, vitae? </p>
							<div class="border"></div>
						</div>
						<!-- /section title -->

						<?php 
							$terms = get_terms([
								'taxonomy'	=> 'portfolios_category',
								'hide_empty'	=> false
							]);
								
						?>

						<div class="portfolio-filter">
							<button type="button" data-filter="all"><?php echo _e('All','bingo')?></button>
							<?php 
								foreach($terms as $term): 
							?>
							<button type="button" data-filter=".<?php echo $term->slug; ?>"><?php echo $term->name; ?></button>
							<?php endforeach;?>
						</div>

						<?php 
							$query = new WP_Query([
								'post_type'	=> 'bingo_portfolio',
								'posts_per_page'	=> -1,
								'orderby'			=> 'menu_order',
								'order'				=> 'ASC'
							]);

							
						?>
						<?php if($query->have_posts()): ?>
					
						<div class="portfolio-items-wrapper">
							<div class="row">
								<?php 
									while($query->have_posts()): 
										$query->the_post();
										$image_id = get_post_thumbnail_id(get_the_ID());
										$image = wp_get_attachment_image_src($image_id, 'full');

										$portfolio_classes = wp_get_post_terms(get_the_ID(), 'portfolios_category', true);
										
										$classes = [];
										foreach($portfolio_classes as $class){
											$classes[] = $class->slug;
										}
										
										$final_class = implode($classes, ' ');


										
								?>
								<div class="col-md-3 col-sm-6 col-xs-6 mix <?php echo $final_class; ?>" >
							    	<div class="portfolio-block">
							    		<img class="img-responsive" src="<?php echo $image[0]; ?>" alt="">

							    		<div class="caption">
							    			<a class="search-icon" href="<?php echo $image[0]; ?>" data-lightbox="image-1">
							    				<i class="tf-ion-ios-search-strong"></i>
								    		</a>
							    			<h4><a href="">AirBnB Postcard</a></h4>
							    		</div>

							    	</div>
							    </div>
								<?php endwhile; ?>

							</div>
						</div>
						<?php endif;?>
						
					</div> <!-- /end col-lg-12 -->
				</div> <!-- end row -->
			</div>	<!-- end container -->
			
		</section>   <!-- End section -->

<!-- Start Our Team
		=========================================== -->
		<section class="team" id="team">
			<div class="container">
				<div class="row">
				
					<!-- section title -->
					<div class="title text-center " >
						<h2>Our Team</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque quasi tempora obcaecati, quis similique quos.</p>
						<div class="border"></div>
					</div>
					<!-- /section title -->
					
					<!-- team member -->
					<div class="col-md-4 col-sm-6 " >
					<div class="team-member text-center">
							<div class="member-photo">
								<!-- member photo -->
								<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images//team/member-1.jpg" alt="Meghna">
								<!-- /member photo -->
								
								<!-- member social profile -->
								<div class="mask">
									<ul class="clearfix">
										<li><a href="#"><i class="tf-ion-social-facebook"></i></a></li>
										<li><a href="#"><i class="tf-ion-social-twitter"></i></a></li>
										<li><a href="#"><i class="tf-ion-social-google-outline"></i></a></li>
										<li><a href="#"><i class="tf-ion-social-dribbble"></i></a></li>					
									</ul>
								</div>
								<!-- /member social profile -->
							</div>
							
							<!-- member name & designation -->
							<div class="member-content">
								<h3>Michael Jonson</h3>
								<span>Head Of Marketing</span>
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur necessitatibus ullam, culpa odio.</p>
							</div>
							<!-- /member name & designation -->
						
					</div>
					</div>
					<!-- end team member -->
					
					<!-- team member -->
					<div class="col-md-4 col-sm-6 " >
					<div class="team-member text-center">
							<div class="member-photo">
								<!-- member photo -->
								<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images//team/member-2.jpg" alt="Meghna">
								<!-- /member photo -->
								
								<!-- member social profile -->
								<div class="mask">
									<ul class="clearfix">
										<li><a href="#"><i class="tf-ion-social-facebook"></i></a></li>
										<li><a href="#"><i class="tf-ion-social-twitter"></i></a></li>
										<li><a href="#"><i class="tf-ion-social-google-outline"></i></a></li>
										<li><a href="#"><i class="tf-ion-social-dribbble"></i></a></li>
									</ul>
								</div>
								<!-- /member social profile -->
							</div>
							
							<!-- member name & designation -->
							<div class="member-content">
								<h3>Michael Jonson</h3>
								<span>Web Developer</span>
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur necessitatibus ullam, culpa odio.</p>
							</div>
							<!-- /member name & designation -->
						</div>
					</div>
					<!-- end team member -->
					
					<!-- team member -->
					<div class="col-md-4 col-sm-6 ">
					<div class="team-member text-center">
							<div class="member-photo">
								<!-- member photo -->
								<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images//team/member-3.jpg" alt="Meghna">
								<!-- /member photo -->
								
								<!-- member social profile -->
								<div class="mask">
									<ul class="clearfix">
										<li><a href="#"><i class="tf-ion-social-facebook"></i></a></li>
										<li><a href="#"><i class="tf-ion-social-twitter"></i></a></li>
										<li><a href="#"><i class="tf-ion-social-google-outline"></i></a></li>
										<li><a href="#"><i class="tf-ion-social-dribbble"></i></a></li>					
									</ul>
								</div>
								<!-- /member social profile -->
							</div>
							
							<!-- member name & designation -->
							<div class="member-content">
								<h3>Michael Jonson</h3>
								<span>Head Of Management</span>
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur necessitatibus ullam, culpa odio.</p>
							</div>
							<!-- /member name & designation -->
							
					</div>
					</div>
					<!-- end team member -->
				</div>  	<!-- End row -->
			</div>   	<!-- End container -->
		</section>   <!-- End section -->

<!-- Start Pricing section
		=========================================== -->
	<section class="pricing-table " id="pricing">
		<div class="container">
			<div class="row">
				
				<!-- section title -->
			    <div class="title title-white text-center " >
		        	<h2>Our Greatest Plans</h2>
			        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium soluta deserunt eaque, est, quia hic odit sed incidunt officiis quidem.</p>
			        <div class="border"></div>
			    </div>
			    <!-- /section title -->
				
				<!-- single pricing table -->
				<div class="col-md-4 col-sm-6 col-xs-12" >
					<div class="pricing-item">
						
						<!-- plan name & value -->
						<div class="price-title">
							<h3>Basic</h3>
							<strong class="value">$99</strong>
							<p>Perfect for single freelancers who work by themselves</p>
						</div>
						<!-- /plan name & value -->
						
						<!-- plan description -->
						<ul>
							<li><i class="tf-ion-ios-arrow-forward"></i> 1GB Disk Space</li>
							<li><i class="tf-ion-ios-arrow-forward"></i> 10 Email Account</li>
							<li><i class="tf-ion-ios-arrow-forward"></i> Script Installer</li>
							<li><i class="tf-ion-ios-arrow-forward"></i> 1 GB Storage</li>
							<li><i class="tf-ion-ios-arrow-forward"></i> 10 GB Bandwidth</li>
							<li><i class="tf-ion-ios-arrow-forward"></i> 24/7 Tech Support</li>
						</ul>
						<!-- /plan description -->
						
						<!-- signup button -->
						<a class="btn btn-main" href="#">Signup</a>
						<!-- /signup button -->
						
					</div>
				</div>
				<!-- end single pricing table -->
				
				<!-- single pricing table -->
				<div class="col-md-4 col-sm-6 col-xs-12  "  >
					<div class="pricing-item">
					
						<!-- plan name & value -->
						<div class="price-title">
							<h3>Basic</h3>
							<strong class="value">$99</strong>
							<p>Suitable for small businesses with up to 5 employees</p>
						</div>
						<!-- /plan name & value -->
						
						<!-- plan description -->
						<ul>
							<li><i class="tf-ion-ios-arrow-forward"></i> 1GB Disk Space</li>
							<li><i class="tf-ion-ios-arrow-forward"></i> 10 Email Account</li>
							<li><i class="tf-ion-ios-arrow-forward"></i> Script Installer</li>
							<li><i class="tf-ion-ios-arrow-forward"></i> 1 GB Storage</li>
							<li><i class="tf-ion-ios-arrow-forward"></i> 10 GB Bandwidth</li>
							<li><i class="tf-ion-ios-arrow-forward"></i> 24/7 Tech Support</li>
						</ul>
						<!-- /plan description -->
						
						<!-- signup button -->
						<a class="btn btn-main" href="#">Signup</a>
						<!-- /signup button -->
						
					</div>
				</div>
				<!-- end single pricing table -->
				
				<!-- single pricing table -->
				<div class="col-md-4 col-sm-6 col-xs-12 ">
					<div class="pricing-item">
						
						<!-- plan name & value -->
						<div class="price-title">
							<h3>Basic</h3>
							<strong class="value">$99</strong>
							<p>Great for large businesses with more than 5 employees</p>
						</div>
						<!-- /plan name & value -->
						
						<!-- plan description -->
						<ul>
							<li><i class="tf-ion-ios-arrow-forward"></i> 1GB Disk Space</li>
							<li><i class="tf-ion-ios-arrow-forward"></i> 10 Email Account</li>
							<li><i class="tf-ion-ios-arrow-forward"></i> Script Installer</li>
							<li><i class="tf-ion-ios-arrow-forward"></i> 1 GB Storage</li>
							<li><i class="tf-ion-ios-arrow-forward"></i> 10 GB Bandwidth</li>
							<li><i class="tf-ion-ios-arrow-forward"></i> 24/7 Tech Support</li>
						</ul>
						<!-- /plan description -->
						
						<!-- signup button -->
						<a class="btn btn-main" href="#">Signup</a>
						<!-- /signup button -->
						
					</div>
				</div>
				<!-- end single pricing table -->
				
				
			</div>       <!-- End row -->
		</div>   	<!-- End container -->
	</section>   <!-- End section -->
		

<!-- Start Testimonial
=========================================== -->
		
	<section class="testimonial section" id="testimonial">
		<div class="container">
			<div class="row">				
				<div class="col-lg-12">
					<!-- testimonial wrapper -->
					<div class="testimonial-slider">
						<!-- testimonial single -->
						<div class="item text-center">
							<i class="tf-ion-chatbubbles"></i>
							<!-- client info -->
							<div class="client-details">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum nulla, soluta dolorum. Eos earum, magni asperiores, unde corporis labore, enim, voluptatum officiis voluptates alias natus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, officia. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, quia?</p>
							</div>
							<!-- /client info -->
							<!-- client photo -->
							<div class="client-thumb">
								<img src="<?php echo get_template_directory_uri(); ?>/images//client-logo/clients-1.jpg" class="img-responsive" alt="">
							</div>
							<div class="client-meta">
								<h3>Abul Mal Muhit</h3>
								<span>CEO , Company Name</span>
							</div>
							<!-- /client photo -->
						</div>
						<!-- /testimonial single -->
				
						<!-- testimonial single -->
						<div class="item text-center">
							<i class="tf-ion-chatbubbles"></i>
							<!-- client info -->
							<div class="client-details">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum nulla, soluta dolorum. Eos earum, magni asperiores, unde corporis labore, enim, voluptatum officiis voluptates alias natus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, officia. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, quia?</p>
							</div>
							<!-- /client info -->
							<!-- client photo -->
							<div class="client-thumb">
								<img src="<?php echo get_template_directory_uri(); ?>/images//client-logo/clients-1.jpg" class="img-responsive" alt="">
							</div>
							<div class="client-meta">
								<h3>Abul Mal Muhit</h3>
								<span>CEO , Company Name</span>
							</div>
							<!-- /client photo -->
						</div>
						<!-- /testimonial single -->
					
						<!-- testimonial single -->
						<div class="item text-center">
							<i class="tf-ion-chatbubbles"></i>
							<!-- client info -->
							<div class="client-details">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum nulla, soluta dolorum. Eos earum, magni asperiores, unde corporis labore, enim, voluptatum officiis voluptates alias natus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, officia. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, quia?</p>
							</div>
							<!-- /client info -->
							<!-- client photo -->
							<div class="client-thumb">
								<img src="<?php echo get_template_directory_uri(); ?>/images//client-logo/clients-1.jpg" class="img-responsive" alt="">
							</div>
							<div class="client-meta">
								<h3>Abul Mal Muhit</h3>
								<span>CEO , Company Name</span>
							</div>
							<!-- /client photo -->
						</div>
						<!-- /testimonial single -->
					</div>
				</div> 		<!-- end col lg 12 -->
			</div>	    <!-- End row -->
		</div>       <!-- End container -->
	</section>    <!-- End Section -->

<!--
		Start Blog Section
		=========================================== -->
				
	<section class="blog" id="blog">
		<div class="container">
			<div class="row">

				<!-- section title -->
				<div class="title text-center ">
					<h2> Latest <span class="color">Posts</span></h2>
					<div class="border"></div>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus facere accusamus, reprehenderit libero inventore nam.</p>
				</div>
				<!-- /section title -->
				<!-- single blog post -->
				<article class="col-md-4 col-sm-6 col-xs-12 clearfix " >
					<div class="post-item">
						<div class="media-wrapper">
							<img src="<?php echo get_template_directory_uri(); ?>/images//blog/post-1.jpg" alt="amazing caves coverimage" class="img-responsive">
						</div>
						
						<div class="content">
							<h3><a href="<?php the_permalink(); ?>">Simple Image Post</a></h3>
							<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non skateboard dolor brunch.</p>
							<a class="btn btn-main" href="<?php the_permalink(); ?>">Read more</a>
						</div>
					</div>						
				</article>
				<!-- /single blog post -->
				
				<!-- single blog post -->
				<article class="col-md-4 col-sm-6 col-xs-12 "  >
					<div class="post-item">
						<div class="media-wrapper">
							<img src="<?php echo get_template_directory_uri(); ?>/images//blog/post-2.jpg" alt="amazing caves coverimage" class="img-responsive">
						</div>
						
						<div class="content">
							<h3><a href="<?php the_permalink(); ?>">Simple Image Post</a></h3>
							<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non skateboard dolor brunch.</p>
							<a class="btn btn-main" href="<?php the_permalink(); ?>">Read more</a>
						</div>
					</div>						
				</article>
				<!-- end single blog post -->
				
				<!-- single blog post -->
				<article class="col-md-4 col-sm-6 col-xs-12 "  >
					<div class="post-item">
						<div class="media-wrapper">
							<img src="<?php echo get_template_directory_uri(); ?>/images//blog/post-3.jpg" alt="amazing caves coverimage" class="img-responsive">
						</div>
						
						<div class="content">
							<h3><a href="<?php the_permalink(); ?>">Simple Image Post</a></h3>
							<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non skateboard dolor brunch.</p>
							<a class="btn btn-main" href="<?php the_permalink(); ?>">Read more</a>
						</div>
					</div>						
				</article>
				<!-- end single blog post -->
			</div> <!-- end row -->
		</div> <!-- end container -->
	</section> <!-- end section -->

<!-- Srart Contact Us
		=========================================== -->		
	<section class="contact-us" id="contact">
		<div class="container">
			<div class="row">
				
				<!-- section title -->
				<div class="title text-center" >
					<h2>Get In Touch</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate facilis eveniet maiores ab maxime nam ut numquam molestiae quaerat incidunt?</p>
					<div class="border"></div>
				</div>
				<!-- /section title -->
				
				<!-- Contact Details -->
				<div class="contact-details col-md-6 " >
					<h3>Contact Details</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, vero, provident, eum eligendi blanditiis ex explicabo vitae nostrum facilis asperiores dolorem illo officiis ratione vel fugiat dicta laboriosam labore adipisci.</p>
					<ul class="contact-short-info" >
						<li>
							<i class="tf-ion-ios-home"></i>
							<span>Khaja Road, Bayzid, Chittagong, Bangladesh</span>
						</li>
						<li>
							<i class="tf-ion-android-phone-portrait"></i>
							<span>Phone: +880-31-000-000</span>
						</li>
						<li>
							<i class="tf-ion-android-globe"></i>
							<span>Fax: +880-31-000-000</span>
						</li>
						<li>
							<i class="tf-ion-android-mail"></i>
							<span>Email: hello@meghna.com</span>
						</li>
					</ul>
					<!-- Footer Social Links -->
					<div class="social-icon">
						<ul>
							<li><a href="#"><i class="tf-ion-social-facebook"></i></a></li>
							<li><a href="#"><i class="tf-ion-social-twitter"></i></a></li>
							<li><a href="#"><i class="tf-ion-social-dribbble-outline"></i></a></li>
							<li><a href="#"><i class="tf-ion-social-linkedin-outline"></i></a></li>
						</ul>
					</div>
					<!--/. End Footer Social Links -->
				</div>
				<!-- / End Contact Details -->
					
				<!-- Contact Form -->
				<div class="contact-form col-md-6 " >
					<form id="contact-form" method="post" action="sendmail.php" role="form">
					
						<div class="form-group">
							<input type="text" placeholder="Your Name" class="form-control" name="name" id="name">
						</div>
						
						<div class="form-group">
							<input type="email" placeholder="Your Email" class="form-control" name="email" id="email">
						</div>
						
						<div class="form-group">
							<input type="text" placeholder="Subject" class="form-control" name="subject" id="subject">
						</div>
						
						<div class="form-group">
							<textarea rows="6" placeholder="Message" class="form-control" name="message" id="message"></textarea>	
						</div>
						
						<div id="mail-success" class="success">
							Thank you. The Mailman is on His Way :)
						</div>
						
						<div id="mail-fail" class="error">
							Sorry, don't know what happened. Try later :(
						</div>
						
						<div id="cf-submit">
							<input type="submit" id="contact-submit" class="btn btn-transparent" value="Submit">
						</div>						
						
					</form>
				</div>
				<!-- ./End Contact Form -->
			
			</div> <!-- end row -->
		</div> <!-- end container -->
	</section> <!-- end section -->

<?php get_footer(); ?>