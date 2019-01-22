<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tsellstrom
 */

// get_header();
?>


<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="width=device-width">
		<title>Jump Start Kit</title>
		<link rel="stylesheet" href="style.css" type="text/css" media="screen" />
		<?php wp_head(); ?>
	</head>

	<body>
		<div class="skip-link">
			<a href="#main-content" class="button">Skip to Main Content</a>
		</div>

		<!-- Column markers, for use during development -->
		<div  class="col-markers" id="markers">
			<div class="container">
				<ul>
					<li></li><li></li><li></li>
					<li></li><li></li><li></li>
					<li></li><li></li><li></li>
					<li></li><li></li><li></li>
				</ul>
			</div>
		</div>

		<header class="site-header">
      <div class="container container--standard">
          <div class="row">
            <a href="." class="logo">Jump Start Kit</a>
            <nav class="site-nav">
                <ul>
                    <li><a href=".">Menu Item</a></li>
                    <li><a href=".">Menu Item</a></li>
                    <li><a href=".">Menu Item</a></li>
                </ul>
            </nav>
          </div>
      </div>
  </header>

	<div id="primary" class="content-area">
		<main class="site-main" id="main-content">
			<section class="hero hero--home">
				<div class="container">
					<h1>Joel’s Jump Start&nbsp;Kit</h1>
					<h2 class="set-h4">On your mark, get&nbsp;set,&nbsp;go!</h2>
					<a href="https://github.com/joelisfar/jump-start-kit/" class="button button--large">Jump Start</a>
				</div>
			</section>
			<div class="content-set">
				<div class="container container--medium">
					<section>
						<div class="formatted-type">
							<h2>Never Stop Never Starting</h2>
							<h3>Sample Headings & Typography</h3>
							<p>Sometimes getting started is the hardest part. That’s why I made this collection of some generic stuff I use on almost every new project. There are a handful of SCSS files set up with my commonly used extensions, base styles, and layout rules. I’ve included my column-sizing functions, including the <a href="#markers">overlay markers</a>. Plus there’s a sample hero component to get you started.</p>
							<!-- <p>There’s not much here so I’ll likely add more in the future. But this should hold you over.</p>
							<hr>
							<h4>Another subheading, this time for Lorem Ipsum</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Odio tempor orci dapibus ultrices. In arcu cursus euismod quis viverra. Proin sagittis nisl rhoncus mattis.</p>
							<p>Cras ornare arcu dui vivamus arcu felis bibendum ut tristique. Faucibus interdum posuere lorem ipsum dolor. Orci nulla pellentesque dignissim enim sit amet venenatis urna cursus.</p> -->
						</div>
					</section>
					<section>
						<h5>Here’s a sample form for you!</h5>
						<h6>Because forms are hard.</h6>
						<form>
							<ul>
								<li>
									<label for="name">Name</label>
									<input type="text" id="name" name="name" placeholder="Full Name" required>
								</li>
								<li>
									<label for="email">Email</label>
									<input type="email" id="email" name="email" placeholder="Email Address" required>
								</li>
								<li>
									<label for="subject">Subject</label>
									<div class="styled-select">
										<select id="subject" name="subject" required>
											<option value="" disabled selected>Select Subject…</option>
											<option value="jump-start">Need a jump start</option>
											<option value="pop-the-clutch">Or a push so I can pop the clutch</option>
											<option value="its-working">Nevermind, it’s working now</option>
										</select>
									</div>
								</li>
								<li>
									<label for="message">Message</label>
									<textarea id="message" name="message" rows="5" cols="80" placeholder="Enter Your Message" required></textarea>
								</li>
							</ul>
							<button class="button" type="submit" name="button">Submit</button>
						</form>
					</section>
				</div>
			</div>
		</main>
	</div><!-- #primary -->

		<footer class="site-footer">
			<div class="container container--standard">
	            <div class="row">
	                <a href="." class="logo">Jump Start Kit</a>
					<p>&copy; 2018 <a href="http://jifarris.com">jifarris</a>. No Rights Reserved.</p>
	            </div>
	        </div>
		</footer>
	</body>
</html>





		<?php /*
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;

			// Start the Loop
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */ /*
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		*/?>



<?php
// get_sidebar();
// get_footer();
