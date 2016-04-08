<?php get_header(); ?>

			<div id="home">
				<div id="slides">
					<ul class="slides-container">
						<li id="slide-1">
						</li>

						<li id="slide-2"> 
							<div id="music-content">
								<div class="album-cover">
								<img id="album-img" src="http://rosesandcigarettes.com/wp-content/themes/roses-theme/library/images/album_cover.jpg" alt="Roses & Cigarettes - Self-Titled Album Cover"/>
								</div>
								<div class="album-info">
									<p id="album-inf">The self-titled debut Roses & Cigarettes is out now.</p>
									<p id="album-inf">Featuring "Whiskey Down", "Gypsy Woman",</p>
									<p id="album-inf">& "Laurel Canyon". Download Now.</p>
									<div id='album-buttons'>
										<a href="https://play.spotify.com/album/34MdXnBif0OrMNF0gIySce?play=true&utm_source=open.spotify.com&utm_medium=open" target="blank"><img id='spotify' src='http://rosesandcigarettes.com/wp-content/themes/roses-theme/library/images/listen-on-spotify.png' /></a>
										<a href="https://itunes.apple.com/us/album/roses-and-cigarettes/id987734711" target="blank"><img id='itunes' src='http://rosesandcigarettes.com/wp-content/themes/roses-theme/library/images/itunes_logo.png' />
										</a>
									</div>
								</div>
							</div>
						</li>
					</ul>
					<nav class="slides-navigation">
					<a href="#" class="prev"><i class="ionicons ion-chevron-left"></i></a>
					<a href="#" class="next"><i class="ionicons ion-chevron-right"></i></a>
					</nav>
				</div>
			</div>

			<div id="music">
				<div id="player">
					<h1>Music</h1>
					<iframe width="50%" height="650" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/136057946&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
				</div>
			</div>

			<div id="content" class="news">
				<div class="scrollbox wrap">
				<h1>News</h1>
					<div id="inner-content" class="wrap cf">
						<div class="header-container">
						</div>
							<main id="main" class="news-content m-all t-2of3 d-5of7 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

								<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

								<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article">

									<header class="article-header">

										<h1 class="h2 entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
										<p class="byline entry-meta vcard">
	                                                                        <?php printf( __( 'Posted', 'bonestheme' ).' %1$s %2$s',
	                       								/* the time the post was published */
	                       								'<time class="updated entry-time" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' . get_the_time(get_option('date_format')) . '</time>',
	                       								/* the author of the post */
	                       								'<span class="by">'.__( 'by', 'bonestheme').'</span> <span class="entry-author author" itemprop="author" itemscope itemptype="http://schema.org/Person">' . get_the_author_link( get_the_author_meta( 'ID' ) ) . '</span>'
	                    							); ?>
										</p>

									</header>

									<section class="entry-content cf">
										<?php the_content(); ?>
									</section>
									</footer>

								</article>

								<?php endwhile; ?>

										<?php bones_page_navi(); ?>

								<?php else : ?>

										<article id="post-not-found" class="hentry cf">
												<header class="article-header">
													<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
											</header>
												<section class="entry-content">
													<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
											</section>
											<footer class="article-footer">
													<p><?php _e( 'This is the error message in the index.php template.', 'bonestheme' ); ?></p>
											</footer>
										</article>

								<?php endif; ?>


							</main>

						<?php get_sidebar(); ?>

					</div>
				</div>
			</div>

			<div id="gigs">
				<div id="gig-dates">
					<ul class="tabs">
						<li class="tab-link current" data-tab="tab-1">Upcoming Gigs</li>
						<li class="tab-link" data-tab="tab-2">Past Gigs</li>
					</ul>
					<div id="tab-1" class="tab-content current">
					</div>
					<div id="tab-2" class="tab-content">
					</div>
				</div>
			</div>

			<div id="about">
				<div id="about-content">
					<h1>About</h1>
					<div>
						<p>Roses & Cigarettes formed in 2013 when the country cover band that Pagliaro was singing in auditioned Petrilli for a vacant guitar position. The girls immediately bonded over their desire to perform original material and similar tastes in music - from the classics like Fleetwood Mac, the Eagles and Bonnie Raitt; to more contemporary artists like Patty Griffin, Sheryl Crow and Miranda Lambert. It was a mutual love of singer-songwriter Ray LaMontagne and his song Roses and Cigarettes that inspired the name of the band. Roses & Cigarette’s music is an eclectic blend of Roots, Country, Rock, Folk and Americana – the perfect recipe for the classic California sound. Roses & Cigarettes self-titled debut album is available now on iTunes, Apple Music, Spotify and most other digital outlets.</p>
					</div>
				</div>
			</div>

			<div id="videos">
				<div id="video-content">
					<div class="header-container">
						<h1>Videos</h1>
					</div>
				</div>

				<div id="video-slides">
				  <ul class="slides-container">
				    <li>
				    	<iframe width="854" height="480" src="https://www.youtube.com/embed/XXFdqoFaMIE" frameborder="0" allowfullscreen></iframe>
				    </li>
				    <li> 
				    	<iframe width="854" height="480" src="https://www.youtube.com/embed/_6UwrIjWMw0" frameborder="0" allowfullscreen></iframe>
				    </li>
				    <li>
				    	<iframe width="854" height="480" src="https://www.youtube.com/embed/NmJ5NBUasHo" frameborder="0" allowfullscreen></iframe>
				    </li>
				    <li>
				    	<iframe width="854" height="480" src="https://www.youtube.com/embed/jjXu0Gqatn4" frameborder="0" allowfullscreen></iframe>
				    </li>
				  </ul>
				  <nav class="slides-navigation">
				    <a href="#" class="next"><i class="ionicons ion-chevron-right"></i></a>
				    <a href="#" class="prev"><i class="ionicons ion-chevron-left"></i></a>
				  </nav>
				</div>
			</div>

			<div id="contact">
				<div id="contact-content">
					<h1>Contact</h1>
					<div class="contact-section">
						<h4>Management</h4>
						<p>
							<span>Gregg Bell</span>
						</p>
						<p>
							<span>Wanted Management</span>
						</p>
						<a href="mailto:wantedgregg@gmail.com" target="new">wantedgregg@gmail.com</a>
					</div>
					<div class="contact-section">
						<h4>Band Booking</h4>
						<p>
							<span>Ann Marie Jones</span>
						</p>
						<a href="mailto:rosesandcigarettesband@gmail.com" target="new">rosesandcigarettesband@gmail.com</a>
					</div>
					<div class="contact-section">
						<h4>Site Credit</h4>
						<p>
							<span>Bryan Cuevas and Willie Rodriguez</span>
						</p>
						<a href="mailto:bryancuevas4@gmail.com" target="new">bryancuevas4@gmail.com</a> &nbsp; | &nbsp; <a href="mailto:wgr1960@gmail.com" target="new">wgr1960@gmail.com</a>
					</div>
				</div>
			</div>


<?php get_footer(); ?>
