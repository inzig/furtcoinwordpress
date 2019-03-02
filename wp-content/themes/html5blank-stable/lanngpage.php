<?php /* Template Name: Landing Page */ ?>
<?php get_header(); ?>
<?php 
		$menu_items = wp_get_nav_menu_items('main-menu');
	?>
	<?php 
$args = array( 
'post_type' => 'slider',
);

$slider = new WP_Query( $args );
?>

<div class="kode-wrapper">
			  <header class="FORTCOIN-header">
				<div class="topbar4">
				  <div class="container">
					<div class="pull-right">
						<div class="login-wraper3">
							<ul class="login-meta">													  
							  <li><a id="ftb_btn_link" ><i class="fa fa-search"></i></a></li>
							</ul>
						  <div id="show-class"><form><input type="text" placeholder="your key word"></form></div>
						  <ul class="social-style3">
							  <li><a target="_blank" href="https://web.facebook.com/furt.coin.7"><i class="fa fa-facebook"></i></a></li>
							  <li><a target="_blank" href="https://twitter.com/furtcoin"><i class="fa fa-twitter"></i></a></li>
							  <li><a target="_blank" href="https://bitcointalk.org/index.php?topic=5040875"><i class="fa fa-bitcoin"></i></a></li>
							  <li><a target="_blank" href="https://www.instagram.com/furtcoin/"><i class="fa fa-instagram"></i></a></li>
						  </ul>
					  </div>
					</div>
				  </div>
				</div>
				<div class="logo-wrap2">
				  <div class="container">
					<div class="logo logo-3">
					  <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/home/images/logo2.png" alt=""></a>
					</div>
					<div class="spb-ticker spb-ticker2">
					  <span>New:</span>
					  <ul class="top_slider_bxslider">
						<li>
						  <div class="ticker-dec">
							<a href="#">Latest News</a>
						  </div>
						</li>
						<li>
						  <div class="ticker-dec">
							<a href="#">Latest News</a>
						  </div>
						</li>
					  </ul>
					</div>
				  </div>
				</div>
				<div class="nav4" id="myHeader">
				  <div class="container">
					<ul class="kode_nave">
					<?php 
						foreach($menu_items as $menu_item) {
							echo '<li><a href="'.$menu_item->url.'">'.$menu_item->title.'</a>';
						}
					?>			
					</ul>
					<!--DL Menu Start-->
					<div id="kode-responsive-navigation" class="dl-menuwrapper">
					<button class="dl-trigger">Open Menu</button>
						<ul class="dl-menu">
						<?php 							
							foreach($menu_items as $menu_item) {
								echo '<li><a href="'.$menu_item->url.'">'.$menu_item->title.'</a>';
							}
						?>
						</ul>
					</div>
					<!--DL Menu END-->
					<div class="ticket-wrap">
					<a class="book-now" href="#"><i class="fa fa-ticket"></i>Exchange Tickets</a>
					<a class="book-now" href="#"><i class="fa fa-ticket"></i>Buy Tickets</a>
					  <div class="lung-link">
						<a href="#">en</a>
						<a href="#">fr</a>
					</div>
					</div>
				  </div>
				</div>
			  </header>
			  <div id="mainbanner">
				<div class="flexslider">
				  <ul class="slides">
					<li>
					  <div class="thumb-slider">
						<img src="<?php echo get_template_directory_uri(); ?>/home/images/slide4.jpg" alt="" />
						<div class="container">
						  <div class="kode-ft-caption text-left"> 
							<div class="FORTCOIN-caption">  
								<?php
								while ( $slider->have_posts() ) : $slider->the_post();
									echo "<h6>";
									the_title();
									echo "</h6>";
									the_content();						
								endwhile;
								?>								
							</div>
							<div class="clearfix"></div>        
							<p><a class="btn-4" href="#">Veiw More<i class="fa fa-angle-right"></i></a></p>
							<div class="clearfix"></div>
						  </div>
						</div>
					  </div>
					</li>
					<!-- <li>
					  <div class="thumb-slider">
						<img src="<?php echo get_template_directory_uri(); ?>/home/images/slide4.jpg" alt="" />
						<div class="container">
						  <div class="kode-ft-caption text-left"> 
							<div class="FORTCOIN-caption">      
							  <h6>Welcome</h6>
							  <h4>FORTCOIN</h4>
							  <h5>FORTCOIN Club</h5>
							</div>
							<div class="clearfix"></div>        
							<p><a class="btn-4" href="#">Veiw More<i class="fa fa-angle-right"></i></a></p>
							<div class="clearfix"></div>
						  </div>
						</div>
					  </div>
					</li> -->
					<!-- <li>
					  <div class="thumb-slider">
						<img src="<?php echo get_template_directory_uri(); ?>/home/images/slide5.jpg" alt="" />
						<div class="container">
						  <div class="kode-ft-caption text-center"> 
							<div class="FORTCOIN-caption">      
							  <h6>Welcome</h6>
							  <h4>FORTCOIN</h4>
							  <h5>FORTCOIN Club</h5>
							</div>
							<div class="clearfix"></div>        
							<p><a class="btn-4" href="#">Veiw More<i class="fa fa-angle-right"></i></a></p>
							<div class="clearfix"></div>
						  </div>
						</div>
					  </div>
					</li> -->
					<!-- <li>
					  <div class="thumb-slider">
						<img src="<?php echo get_template_directory_uri(); ?>/home/images/slide7.jpg" alt="" />
						<div class="container">
						  <div class="kode-ft-caption text-right"> 
							<div class="FORTCOIN-caption">      
							  <h6>Welcome</h6>
							  <h4>FORTCOIN</h4>
							  <h5>FORTCOIN Club</h5>
							</div>
							<div class="clearfix"></div>        
							<p><a class="btn-4" href="#">Veiw More<i class="fa fa-angle-left"></i></a></p>
							<div class="clearfix"></div>
						  </div>
						</div>
					  </div>
					</li> -->
				  </ul>
				</div>
			  </div>
			  <div class="kode-content">				
				</div>
				<section id="aboutus" class="ftb_Fortcoin">
					<div class="container">
						<div class="heading5 hdg_6">
						  <h4>About the <span>Furtcoin</span></h4>
						</div>
						<div class="row">
							<div class="ftb_goal_tab_des">
								<div class="col-md-3">
									<div class="ftb_goal_fig">
										<img src="<?php echo get_template_directory_uri(); ?>/home/images/goal.jpg" alt="images">
									</div>
								</div>
								<div class="col-md-9">
									<div class="panel panel-default">
										<div class="ftb_goal_tabs">
											<ul class="ftb_goal_tab_detail">
												<li><a class="active" href="#tab1" data-toggle="tab">WhitePaper</a></li>
												<li><a href="#tab2" data-toggle="tab">Our Vission vission</a></li>
												<!-- <li><a href="#tab3" data-toggle="tab">Club Stats</a></li> -->
											</ul>
											<div class="panel-body">	
												<div class="tab-content">
													<div class="tab-pane active" id="tab1">
														<div class="ftb_goal_tab_text">
																Football has grown into a universal sport. This Whitepaper navigates from
																the history of football, with its links to Rugby, and how the sport has grown
																and advanced into a commercial sport.														
															<div class="row">
																<div class="col-md-6">
																	<div class="ftb_goal_caption">
																		<span class="icon-FORTCOIN-2"></span>
																		<h5><a href="#">"The Beautifull Game"</a></h5>
																		<p>
																		Once upon a time, football was a sport that attracted fans from all the
																		corners of the world. It was seen as a sort of unity, bringing fans from different
																		countries together and uniting them.
																		</p>
																	</div>
																</div>
																<div class="col-md-6">
																	<div class="ftb_goal_caption">
																		<span class="icon-symbol-1"></span>
																		<h5><a href="#">Sports as Unifying Force</a></h5>
																		<p>
																		Problems between communities and even countries have sometimes been
																		settled with this sport.
																		</p>
																	</div>
																</div>
																</div>
																<div class="row">
																<div class="col-md-6">
																	<div class="ftb_goal_caption margin_0">
																		<span class="icon-signs"></span>
																		<h5><a href="#">Loyalty is no more being rewarded!</a></h5>
																		<p>
																		The days have gone, where the sport was seen as an avenue to rewind, have
																		fun and have fans loyally support their teams. It is now a sport where
																		oligarchs and foreign business bodies sink their money into, expecting a vast
																		reward, which leads the most important aspect of the sport, the fans to
																		suffer.
																		</p>
																	</div>
																</div>
																<div class="col-md-6">
																	<div class="ftb_goal_caption margin_0">
																		<span class="icon-FORTCOIN-1"></span>
																		<h5><a href="#">It is getting too expensive.</a></h5>
																		<p>
																		The prices of the tickets seem to be on the rise, with fans without such an
																		amount, not able to afford and pay for the tickets.
																		</p>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="tab-pane" id="tab2">
														<div class="ftb_goal_club">
															<h3>Our Vission</h3>
															<p>This White Paper talks about the problem of the current traditional system
																of football. It speaks on how fans are now treated as scums, having no say in
																their team's decisions. This document will speak on the creation of Furt Coin,
																a platform for fans and run by fans, and how Furt Coin intends to solve the
																problem. </p>
														</div>
														
													</div>
													<div class="tab-pane" id="tab3">
														<div class="ftb_club_stats">
															<p>Lorem ipsum dolor sit amet, Lorem ipsum dolor sit. Nam sed ligula odio. Sed id metus felis. Ut pretium nisl non justo condimentum id tincidunt nunc faucibus. Ut neque eros, pulvinar eu blandit quis, lacinia nec ipsum. Etiam vel orci ipsum. Sed eget velit ipsum. Duis in tortor scelerisque felis mattis imperdiet. Donec at libero tellus. Suspendisse consectetur consectetur bibendum.tincidunt nunc faucibus. Ut neque eros, pulvinar eu blandit quis, lacinia nec ipsum. Etiam vel orci ipsum. Sed eget velit ipsum. Duis in tortor scelerisque felis mattis imperdiet. Donec at libero tellus. Suspendisse consectetur consectetur bibendum.</p>
															<ul>
																<li><a href="#"><i class="fa fa-chevron-circle-right"></i>1990 Duis in tortor scelerisque felis</a></li>
																<li><a href="#"><i class="fa fa-chevron-circle-right"></i>1990 Duis in tortor scelerisque felis</a></li>
																<li><a href="#"><i class="fa fa-chevron-circle-right"></i>1993 Duis in tortor scelerisque felis mattis</a></li>
																<li><a href="#"><i class="fa fa-chevron-circle-right"></i>1990 Duis in tortor scelerisque felis</a></li>
																<li><a href="#"><i class="fa fa-chevron-circle-right"></i>1995 Duis in tortor scelerisque eget velit </a></li>
																<li><a href="#"><i class="fa fa-chevron-circle-right"></i>1990 Duis in tortor scelerisque felis</a></li>
																<li><a href="#"><i class="fa fa-chevron-circle-right"></i>2000 Duis in  felis mattis imperdiet</a></li>
																<li><a href="#"><i class="fa fa-chevron-circle-right"></i>1990 Duis in tortor scelerisque felis</a></li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>	
						</div>
					</div>
				</section>


				<!-- video section -->
				<section id="video" class="ftb-Fortcoin">
					<div class="heading5 hdg_6">
					  <h4>About the <span>Furtcoin</span></h4>
					</div>
					<div class="container">
						<div class="col-sm-6">
						<iframe width="560" height="315" src="https://www.youtube.com/embed/KXxW4yyrBRs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</div>
						<div class="col-sm-6">
						<iframe width="560" height="315" src="https://www.youtube.com/embed/7MSR-0KOxec" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</div>
					</div>
				</section>
				<!-- video section -->

				<section>
				  <div class="container">
					<!--// HEADING 5 //-->
					<div class="heading5 hdg_6">
					  <h4> Now Trading <span>At Exchanges</span></h4>
					</div>
					<!--// HEADING 5 //-->
					<div class="row">
					  <!--// FORTCOIN TEAM //-->
					  <div class="col-md-6 col-sm-6">
						<div class="ftb-team-thumb">
						  <figure><img src="<?php echo get_template_directory_uri(); ?>/home/images/crex24.png" height="300px" alt=""></figure>
						  <div class="ftb-team-dec">

							<div class="text">
							  <a target="_blank" href="https://crex24.com/exchange/FURT-BTC"> Crex24</a>
							  <!-- <p>Defender</p> -->
							</div>
							<a class="arrow-iconbtn" target="_blank" href="https://crex24.com/exchange/FURT-BTC"><i class="fa fa-arrow-right "></i></a>
						  </div>
						</div>
					  </div>
					  <!--// FORTCOIN TEAM //-->
					  <!--// FORTCOIN TEAM //-->
					  <div class="col-md-6 col-sm-6">
						<div class="ftb-team-thumb">
						  <figure><img src="<?php echo get_template_directory_uri(); ?>/home/images/bitebtc.jpg" height="300px" alt=""></figure>
						  <div class="ftb-team-dec">
							<div class="text">
							  <a target="_blank" href="https://bitebtc.com/trade/furt_btc">BiteBTC</a>
							  <!-- <p>Defender</p> -->
							</div>
							<a target="_blank" class="arrow-iconbtn" href="https://bitebtc.com/trade/furt_btc"><i class="fa fa-arrow-right "></i></a>
						  </div>
						</div>
					  </div>		
					</div>
				  </div>
				</section>

				<!--// TENNIS EVENT BG //-->
				<section id="blog" class="ftb-resultbg">
				  <div class="container">
					<div class="heading5">
					  <h4>Blog <span>Section</span></h4>
					</div>
					<div class="container">
					<div class="col-sm-6 col-md-4">
						<div class="ftb-post-thumb">
								<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/home/images/ftb-post-slider.jpg" alt=""></a>
								<div class="text">
								  <h6>Best Goal Save In History</h6>
								  <a class="btn-4" href="#">Read More</a>
								</div>
							  </div>
					</div>

					<div class="col-sm-6 col-md-4">
						<div class="ftb-post-thumb">
								<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/home/images/ftb-post-slider.jpg" alt=""></a>
								<div class="text">
								  <h6>Best Goal Save In History</h6>
								  <a class="btn-4" href="#">Read More</a>
								</div>
							  </div>
					</div>

					<div class="col-sm-6 col-md-4">
						<div class="ftb-post-thumb">
								<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/home/images/ftb-post-slider.jpg" alt=""></a>
								<div class="text">
								  <h6>Best Goal Save In History</h6>
								  <a class="btn-4" href="#">Read More</a>
								</div>
							  </div>
					</div>
					</div>
				  </div>
				</section>
				<!--// TENNIS EVENT BG //-->
				<!--// TENNIS EVENT FIXTURE //-->
				<section>
				  <div class="container">
					<div class="row">
					  <!--// BLOG SLIDER //-->
					  <div class="col-md-4">
						<div class="heading6">
						  <h4>News <span>Post</span></h4>
						</div>
						<div class="ftb-bx-slider">
						  <ul class="bxslider">
							<li>
							  <div class="ftb-post-thumb">
								<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/home/images/ftb-post-slider.jpg" alt=""></a>
								<div class="text">
								  <h6>Best Goal Save In History</h6>
								  <a class="btn-4" href="#">Read More</a>
								</div>
							  </div>
							</li>
							<li>
							  <div class="ftb-post-thumb">
								<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/home/images/ftb-post-slider.jpg" alt=""></a>
								<div class="text">
								  <h6>Best Goal Save In History</h6>
								  <a class="btn-4" href="#">Read More</a>
								</div>
							  </div>
							</li>
							<li>
							  <div class="ftb-post-thumb">
								<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/home/images/ftb-post-slider.jpg" alt=""></a>
								<div class="text">
								  <h6>Best Goal Save In History</h6>
								  <a class="btn-4" href="#">Read More</a>
								</div>
							  </div>
							</li>
						  </ul>
						</div>
					  </div>
					  <!--// BLOG SLIDER //-->
					  <!--// BLOG SLIDER //-->
					  <div class="col-md-4">
						<!--// HEADING 6 //-->
						<div class="heading6">
						  <h4>Recent<span>Videos</span></h4>
						</div>
						<!--// HEADING 6 //-->
						<!--// POST //-->
						<div class="ftb-post-thumb">
						  <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/home/images/ftb-post-slider2.jpg" alt=""></a>
						  <a class="spb-play" href="#"><i class="fa fa-play-circle"></i></a>
						  <div class="text">
							<h6>Highlights OF Euro Cup 2nd Mtach</h6>
						  </div>
						</div>
						<!--// POST //-->
						<!--// POST //-->
						<div class="ftb-post-thumb">
						  <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/home/images/ftb-post-slider3.jpg" alt=""></a>
						  <a class="spb-play" href="#"><i class="fa fa-play-circle"></i></a>
						  <div class="text">
							<h6>A Single Fan In Stadium</h6>
						  </div>
						</div>
						<!--// POST //-->
					  </div>
					  <!--// BLOG SLIDER //-->
					  <div class="col-md-4">
						<!--// HEADING 6 //-->
						<div class="heading6">
						  <h4>Club<span>Ranking</span></h4>
						</div>
						<!--// HEADING 6 //-->
						<!--// RATING TABLE //-->
						<ul class="ftb-rating-table">
						  <li>
							<div class="ftb-position">
							  1 . 
							</div>
							<div class="ftb-team-name">
							  <img src="<?php echo get_template_directory_uri(); ?>/home/images/short-logo2.png" alt="">
							  <a href="#">Lore Ipsum Dolor</a>
							</div>
							<div class="ftb-team-points">
							  20
							</div>
						  </li>
						  <li>
							<div class="ftb-position">
							  2 . 
							</div>
							<div class="ftb-team-name">
							  <img src="<?php echo get_template_directory_uri(); ?>/home/images/short-logo3.png" alt="">
							  <a href="#">Lore Ipsum Dolor</a>
							</div>
							<div class="ftb-team-points">
							  25
							</div>
						  </li>
						  <li>
							<div class="ftb-position">
							  3 . 
							</div>
							<div class="ftb-team-name">
							  <img src="<?php echo get_template_directory_uri(); ?>/home/images/short-logo4.png" alt="">
							  <a href="#">Lore Ipsum Dolor</a>
							</div>
							<div class="ftb-team-points">
							  30
							</div>
						  </li>
						  <li>
							<div class="ftb-position">
							  4 . 
							</div>
							<div class="ftb-team-name">
							  <img src="<?php echo get_template_directory_uri(); ?>/home/images/short-logo1.png" alt="">
							  <a href="#">Lore Ipsum Dolor</a>
							</div>
							<div class="ftb-team-points">
							  45
							</div>
						  </li>
						  <li>
							<div class="ftb-position">
							  5 . 
							</div>
							<div class="ftb-team-name">
							  <img src="<?php echo get_template_directory_uri(); ?>/home/images/short-logo6.png" alt="">
							  <a href="#">Lore Ipsum Dolor</a>
							</div>
							<div class="ftb-team-points">
							  29
							</div>
						  </li>
						  <li>
							<div class="ftb-position">
							  6 . 
							</div>
							<div class="ftb-team-name">
							  <img src="<?php echo get_template_directory_uri(); ?>/home/images/short-logo7.png" alt="">
							  <a href="#">Lore Ipsum Dolor</a>
							</div>
							<div class="ftb-team-points">
							  03
							</div>
						  </li>
						</ul>
						<!--// RATING TABLE //-->
					  </div>
					  <!--// BLOG SLIDER //-->
					</div>
					<!--// MAIN TABS TABLE //-->
					
					
					<!--// MAIN TABS TABLE //-->
				  </div>
				</section>
				<!--// TENNIS EVENT FIXTURE //-->
				<!--// TENNIS GALLERY //-->
				<section class="ftb-gallery-bg">
					<div class="container">
					  <div class="heading5">
						<h4>Our  <span>Gallery</span></h4>
					  </div>
					  <div class="ftb-gallery">
						<ul>
						  <li>
							<figure>
							  <img src="<?php echo get_template_directory_uri(); ?>/home/images/ftbgallery1.jpg" alt="">
							  <figcaption>
								<h4>Great Game Ever In History</h4>
								<a data-rel="prettyPhoto[]" href="<?php echo get_template_directory_uri(); ?>/home/images/ftbgallery1.jpg"><i class="fa fa-eye"></i></a>
							  </figcaption>
							</figure>
						  </li>
						  <li>
							<figure>
							  <img src="<?php echo get_template_directory_uri(); ?>/home/images/ftbgallery2.jpg" alt="">
							  <figcaption>
								<h4>Great Game Ever In History</h4>
								<a data-rel="prettyPhoto[]" href="<?php echo get_template_directory_uri(); ?>/home/images/ftbgallery2.jpg"><i class="fa fa-eye"></i></a>
							  </figcaption>
							</figure>
						  </li>
						  <li>
							<figure>
							  <img src="<?php echo get_template_directory_uri(); ?>/home/images/ftbgallery3.jpg" alt="">
							  <figcaption>
								<h4>Great Game Ever In History</h4>
								<a data-rel="prettyPhoto[]" href="<?php echo get_template_directory_uri(); ?>/home/images/ftbgallery3.jpg"><i class="fa fa-eye"></i></a>
							  </figcaption>
							</figure>
						  </li>
						  <li>
							<figure>
							  <img src="<?php echo get_template_directory_uri(); ?>/home/images/ftbgallery4.jpg" alt="">
							  <figcaption>
								<h4>Great Game Ever In History</h4>
								<a data-rel="prettyPhoto[]" href="<?php echo get_template_directory_uri(); ?>/home/images/ftbgallery4.jpg"><i class="fa fa-eye"></i></a>
							  </figcaption>
							</figure>
						  </li>
						  <li>
							<figure>
							  <img src="<?php echo get_template_directory_uri(); ?>/home/images/ftbgallery5.jpg" alt="">
							  <figcaption>
								<h4>Great Game Ever In History</h4>
								<a data-rel="prettyPhoto[]" href="<?php echo get_template_directory_uri(); ?>/home/images/ftbgallery5.jpg"><i class="fa fa-eye"></i></a>
							  </figcaption>
							</figure>
						  </li>
						  <li>
							<figure>
							  <img src="<?php echo get_template_directory_uri(); ?>/home/images/ftbgallery6.jpg" alt="">
							  <figcaption>
								<h4>Great Game Ever In History</h4>
								<a data-rel="prettyPhoto[]" href="<?php echo get_template_directory_uri(); ?>/home/images/ftbgallery6.jpg"><i class="fa fa-eye"></i></a>
							  </figcaption>
							</figure>
						  </li>
						</ul>
						<div class="tns-load ftb-load">                
						  <a href="#">load more</a>
						</div>
					  </div>
					</div>
				</section>
				<!--// FORTCOIN COUNTER //-->
				<div class="ftb-counterup">
				  <div class="container">
					<!--// HEADING 5 //-->
					<div class="heading5">
					  <h4>Partners</h4>
					</div>
					<!--// HEADING 5 //-->
					<div class="row">
					  <!--// COUNTER //-->
					  <div class="col-md-3 col-sm-3">
						<div class="counterup-dec">
						  <span class="icon-FORTCOIN"></span>
						  <div class="text">
							<h3 class="word-count">123</h3>
							<p>exchange detail</p>
						  </div>
						</div>
					  </div>
					  <!--// COUNTER //-->
					  <!--// COUNTER //-->
					  <div class="col-md-3 col-sm-3">
						<div class="counterup-dec">
						  <span class="icon-soccer"></span>
						  <div class="text">
							<h3 class="word-count">123</h3>
							<p>exchange detail</p>
						  </div>
						</div>
					  </div>
					  <!--// COUNTER //-->
					  <div class="col-md-3 col-sm-3">
						<div class="counterup-dec">
						  <span class="icon-symbol"></span>
						  <div class="text">
							<h3 class="word-count">123</h3>
							<p>exchange detail</p>
						  </div>
						</div>
					  </div>
					  <!--// COUNTER //-->
					  <!--// COUNTER //-->
					  <div class="col-md-3 col-sm-3">
						<div class="counterup-dec">
						  <span class="icon-cup"></span>
						  <div class="text">
							<h3 class="word-count">123</h3>
							<p>Awards & Trophies</p>
						  </div>
						</div>
					  </div>
					  <!--// COUNTER //-->
					</div>
				  </div>
				</div>
				<!--// FORTCOIN COUNTER //-->
				<!--// FORTCOIN TEAM SECTION //-->
				<section>
				  <div class="container">
					<!--// HEADING 5 //-->
					<div class="heading5 black">
					  <h4>Our  <span>Team</span></h4>
					</div>
					<!--// HEADING 5 //-->
					<div class="row">
					  <!--// FORTCOIN TEAM //-->
					  <div class="col-md-3 col-sm-6">
						<div class="ftb-team-thumb">
						  <figure><img src="<?php echo get_template_directory_uri(); ?>/home/images/ftb-teamone.png" alt=""></figure>
						  <div class="ftb-team-dec">
							<span>07</span>
							<div class="text">
							  <a href="#">Leo Adam</a>
							  <p>Defender</p>
							</div>
							<a class="arrow-iconbtn" href="#"><i class="fa fa-arrow-right "></i></a>
						  </div>
						</div>
					  </div>
					  <!--// FORTCOIN TEAM //-->
					  <!--// FORTCOIN TEAM //-->
					  <div class="col-md-3 col-sm-6">
						<div class="ftb-team-thumb">
						  <figure><img src="<?php echo get_template_directory_uri(); ?>/home/images/ftb-teamtwo.png" alt=""></figure>
						  <div class="ftb-team-dec">
							<span>07</span>
							<div class="text">
							  <a href="#">Leo Adam</a>
							  <p>Defender</p>
							</div>
							<a class="arrow-iconbtn" href="#"><i class="fa fa-arrow-right "></i></a>
						  </div>
						</div>
					  </div>
					  <!--// FORTCOIN TEAM //-->
					  <!--// FORTCOIN TEAM //-->
					  <div class="col-md-3 col-sm-6">
						<div class="ftb-team-thumb">
						  <figure><img src="<?php echo get_template_directory_uri(); ?>/home/images/ftb-three.png" alt=""></figure>
						  <div class="ftb-team-dec">
							<span>07</span>
							<div class="text">
							  <a href="#">Leo Adam</a>
							  <p>Defender</p>
							</div>
							<a class="arrow-iconbtn" href="#"><i class="fa fa-arrow-right "></i></a>
						  </div>
						</div>
					  </div>
					  <!--// FORTCOIN TEAM //-->
					  <!--// FORTCOIN TEAM //-->
					  <div class="col-md-3 col-sm-6">
						<div class="ftb-team-thumb">
						  <figure><img src="<?php echo get_template_directory_uri(); ?>/home/images/ftb-teamfour.png" alt=""></figure>
						  <div class="ftb-team-dec">
							<span>07</span>
							<div class="text">
							  <a href="#">Leo Adam</a>
							  <p>Defender</p>
							</div>
							<a class="arrow-iconbtn" href="#"><i class="fa fa-arrow-right "></i></a>
						  </div>
						</div>
					  </div>
					  <!--// FORTCOIN TEAM //-->
					</div>
				  </div>
				</section>

				<section id="contactus">
					<div class="container">
						<div class="heading5 black">
					  <h4>Contact  <span>Us</span></h4>
					</div>
						<div class="kode_contact_form_hdg">
							<h2>GET IN TOUCH</h2>
							<p>Through this form send us message if you have another query.</p>
						</div>
						<div class="row">
							<form>
								<div class="col-md-4">
									<div class="kode_contant_field">
										<input type="text" placeholder="Your Name" required="">
									</div>
								</div>
								<div class="col-md-4">
									<div class="kode_contant_field">
										<input type="text" placeholder="Your Email" required="">
									</div>
								</div>
								<div class="col-md-4">
									<div class="kode_contant_field">
										<input type="text" placeholder="Your Phone Number" required="">
									</div>
								</div>
								<div class="col-md-12">
									<div class="kode_contant_area">
										<textarea>Your Message</textarea>
										<button>Reset</button>
										<button>SendS</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</section>
		  <footer class="FORTCOIN-footer">
			<div class="container">
			  <div class="row">
				<div class="col-md-4">
				  <div class="widget spb-widget spb-text-widget">
					<div class="ft-logo">
					  <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/home/images/logo2.png" alt=""></a>
					</div>
					<p>orem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet ante at nunc pretium mattis. Nunc ac semp a libero et, iaculis gravida orci.</p>
					<p>Suspendisse imperdiet dolor in tristique dignissim. Fusce lacus dolor, accumsan . .</p>
					<ul class="spb-social2">
					  <li><a href="#"> <i class="fa fa-facebook"></i></a></li>
					  <li><a href="#"> <i class="fa fa-twitter"></i></a></li>
					  <li><a href="#"> <i class="fa fa-linkedin"></i></a></li>
					  <li><a href="#"> <i class="fa fa-rss"></i></a></li>
					  <li><a href="#"> <i class="fa fa-google-plus"></i></a></li>
					  <li><a href="#"> <i class="fa fa-linkedin"></i></a></li>
					</ul>
				  </div>
				</div>
				<div class="col-md-4">
				  <div class="widget spb-widget spb-popular">
					<h4>Most  Popular</h4>
					<div class="spb-popular-dec">
					  <figure>
						<img src="<?php echo get_template_directory_uri(); ?>/home/images/popular-ft1.jpg" alt="">
						<a data-rel="prettyPhoto[]" href="<?php echo get_template_directory_uri(); ?>/home/images/popular-ft1.jpg" class="spb-play"><i class="fa fa-plus"></i></a>
					  </figure>
					  <div class="text">
						<a href="#">Lorem ipsum dolor amet, conse-ctetur adipiscing elit. Donec st.</a>
						<ul class="spb-meta2">
						  <li><a href="#"><i class="fa fa-heart"></i>13 like</a></li>
						  <li><a href="#"><i class="fa fa-comment"></i>14 comment</a></li>
						</ul>
					  </div>
					</div>
					<div class="spb-popular-dec">
					  <figure>
						<img src="<?php echo get_template_directory_uri(); ?>/home/images/popular-ft2.jpg" alt="">
						<a data-rel="prettyPhoto[]" href="<?php echo get_template_directory_uri(); ?>/home/images/popular-ft2.jpg" class="spb-play"><i class="fa fa-plus"></i></a>
					  </figure>
					  <div class="text">
						<a href="#">Lorem ipsum dolor amet, conse-ctetur adipiscing elit. Donec st.</a>
						<ul class="spb-meta2">
						  <li><a href="#"><i class="fa fa-heart"></i>13 like</a></li>
						  <li><a href="#"><i class="fa fa-comment"></i>14 comment</a></li>
						</ul>
					  </div>
					</div>
					<div class="spb-popular-dec">
					  <figure>
						<img src="<?php echo get_template_directory_uri(); ?>/home/images/popular-ft3.jpg" alt="">
						<a data-rel="prettyPhoto[]" href="<?php echo get_template_directory_uri(); ?>/home/images/popular-ft3.jpg" class="spb-play"><i class="fa fa-plus"></i></a>
					  </figure>
					  <div class="text">
						<a href="#">Lorem ipsum dolor amet, conse-ctetur adipiscing elit. Donec st.</a>
						<ul class="spb-meta2">
						  <li><a href="#"><i class="fa fa-heart"></i>13 like</a></li>
						  <li><a href="#"><i class="fa fa-comment"></i>14 comment</a></li>
						</ul>
					  </div>
					</div>
				  </div>
				</div>
				<!--// POPULAR WIDGET //-->
				<!--// FLICKER WIDGET //-->
				<div class="col-md-4">
				  <div class="widget spb-widget spb-flicker">
					<h4>Flicker Widgets</h4>
					<ul>
					  <li>
						  <a data-rel="prettyPhoto[]" href="<?php echo get_template_directory_uri(); ?>/home/images/flicker-ft1.jpg" class="spb-play"><i class="fa fa-plus"></i></a>
						  <img src="<?php echo get_template_directory_uri(); ?>/home/images/flicker-ft1.jpg" alt="">
					  </li>
					  <li>
						  <a data-rel="prettyPhoto[]" href="<?php echo get_template_directory_uri(); ?>/home/images/flicker-ft2.jpg" class="spb-play"><i class="fa fa-plus"></i></a>
						  <img src="<?php echo get_template_directory_uri(); ?>/home/images/flicker-ft2.jpg" alt="">
					  </li>
					  <li>
						  <a data-rel="prettyPhoto[]" href="<?php echo get_template_directory_uri(); ?>/home/images/flicker-ft3.jpg" class="spb-play"><i class="fa fa-plus"></i></a>
						  <img src="<?php echo get_template_directory_uri(); ?>/home/images/flicker-ft3.jpg" alt="">
					  </li>
					  <li>
						  <a data-rel="prettyPhoto[]" href="<?php echo get_template_directory_uri(); ?>/home/images/flicker-ft4.jpg" class="spb-play"><i class="fa fa-plus"></i></a>
						  <img src="<?php echo get_template_directory_uri(); ?>/home/images/flicker-ft4.jpg" alt="">
					  </li>
					  <li>
						  <a data-rel="prettyPhoto[]" href="<?php echo get_template_directory_uri(); ?>/home/images/flicker-ft5.jpg" class="spb-play"><i class="fa fa-plus"></i></a>
						  <img src="<?php echo get_template_directory_uri(); ?>/home/images/flicker-ft5.jpg" alt="">
					  </li>
					  <li>
						  <a data-rel="prettyPhoto[]" href="<?php echo get_template_directory_uri(); ?>/home/images/flicker-ft6.jpg" class="spb-play"><i class="fa fa-plus"></i></a>
						  <img src="<?php echo get_template_directory_uri(); ?>/home/images/flicker-ft6.jpg" alt="">
					  </li>
					  <li>
						  <a data-rel="prettyPhoto[]" href="<?php echo get_template_directory_uri(); ?>/home/images/flicker-ft7.jpg" class="spb-play"><i class="fa fa-plus"></i></a>
						  <img src="<?php echo get_template_directory_uri(); ?>/home/images/flicker-ft7.jpg" alt="">
					  </li>
					  <li>
						  <a data-rel="prettyPhoto[]" href="<?php echo get_template_directory_uri(); ?>/home/images/flicker-ft8.jpg" class="spb-play"><i class="fa fa-plus"></i></a>
						  <img src="<?php echo get_template_directory_uri(); ?>/home/images/flicker-ft8.jpg" alt="">
					  </li>
					</ul>
					<a class="spb-btn3" href="#">Load More</a>
				  </div>
				</div>
				<!--// FLICKER WIDGET //-->
			  </div>
			  <!--// COPY RIGHT //-->
			  <div class="spb-copyright">
				<ul class="sbp-ftnav">
				  <li><a href="#">home</a></li>
				  <li><a href="#">News</a></li>
				  <li><a href="#">Topics</a></li>
				  <li><a href="#">Stats</a></li>
				  <li><a href="#">Videos</a></li>
				  <li><a href="#">post</a></li>
				</ul>
				<p>All Rights Reserved</p>
				<a id="kode-topbtn" href="#"><i class="fa fa-angle-double-up"></i></a>
			  </div>
			  <!--// COPY RIGHT //-->
			</div>
		  </footer>
		  <!--// Contact Footer //-->
		  <!--// Wrapper //-->
		  <!-- Modal -->
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog">
			  <div class="modal-content">
				<div class="modal-header thbg-color">
				  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  <h4 class="modal-title">Login To Your Account</h4>
				</div>
				<div class="modal-body">
				  <form class="kode-loginform">
					<p><span>User Name</span> <input type="text" placeholder="User Name"></p>
					<p><span>Password</span> <input type="password" placeholder="Password"></p>
					<p><label><input type="checkbox"><span>Remember Me</span></label></p>
					<p class="kode-submit"><a href="#">Lost Your Password</a> <input class="thbg-colortwo" type="submit" value="Sign in"></p>
				  </form>
				</div>
			  </div>
			</div>
		  </div>
			<!-- Modal -->
		  <div class="modal fade" id="myModalTwo" tabindex="-1" role="dialog" aria-hidden="true">
			  <div class="modal-dialog">
				<div class="modal-content">
				  <div class="modal-header thbg-color">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title">Register</h4>
				  </div>
				  <div class="modal-body">
					<form class="kode-loginform">
					  <p><span>Email</span> <input type="text" placeholder="Email"></p>
					  <p><span>Password</span> <input type="password" placeholder="Password"></p>
					  <p><span>Retype Password</span> <input type="password" placeholder="Retype Password"></p>
					  <p><label><input type="checkbox"><span>Remember Me</span></label></p>
					  <p class="kode-submit"><a href="#">Lost Your Password</a> <input class="thbg-colortwo" type="submit" value="Sign Up"></p>
					</form>
				  </div>
				</div>
			  </div>
		  </div>

<?php get_footer(); ?>
