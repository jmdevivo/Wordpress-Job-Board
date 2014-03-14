<?php
/*
 * Template Name: FrontpageTemplate
 * Description: Template for landing page - will show listings in browse view.
 */

get_header(); ?>

<link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.9.1.js"></script>
<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  <script>
  $(function() {
    $( "#listings-contain" ).tabs();
  });
  </script>

	<section id="primary" class="site-content">
		<div id="content" role="main">
			
			<header class="page-header index-header">
				<!-- <h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'twentytwelve' ), '<span>' . get_search_query() . '</span>' ); ?></h1> -->
				<br>
				<!-- Total Results: 
				<?= $total_results = $wp_query->found_posts; ?> -->
				<h1>Welcome to the Whiteboard Job Board</h1>	
				<h3>Find jobs. Find talent. Find the right startup opportunity.</h3>
			</header>


			<div id='listings-contain'>
				<ul>
    <li><a href="#job-listings">Job Openings </a></li>
    <li><a href="#opportunity-listings">Opportunity Seekers</a></li>
  </ul>
		<!-- for job listings -->
		<div id='job-listings' class='listing-div-alt'>
			<!-- has the job search form -->
			
			<!-- displays the most recent job listings -->
			<div class='thumb-contain'>
			
<?php
	
	$job_listings_array = get_recent_listings('job_posting');
	foreach ($job_listings_array as $key => $value) {
		echo $value;
	}



?>
			<br><br>
			<a href="?s=&post_type=job_posting">Browse All Job Listings</a>
			</div>
			<div class='listing-header'>
				<!-- <b>Job Listings</b> -->
				
			
<?php 
	echo job_search_form(); 

?>
					
			</div>
			
		</div>

		<!-- container for opportunity seekers -->
		<div id='opportunity-listings' class='listing-div-alt' >
			<!-- shows the opportunity seeker search bar -->
			
			<!-- lists recent opportunity seeker listing -->
			<div class='thumb-contain'>
				
<?php
	$opportunity_listings_array = get_recent_listings('opportunity_posting');
	foreach ($opportunity_listings_array as $key => $value) {
		echo $value;
	}

?>
			<br><br>
			<a href="?s=&post_type=opportunity_posting">Browse All Opportunity Seekers</a>
			</div>
			<div class='listing-header'>
<!-- 			<b>Opportunity Seekers</b>
			<br><br>	 -->

<?php 
	// echo job_search_form($something); 
	echo opportunity_search_form();
?>				
			</div>

		</div>

	</div>

		</div><!-- #content -->
	</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>