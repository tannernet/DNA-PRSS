<?php 
global $more, $k_options; 
get_header();?> 
<div id="main">
	


	<div id="content">	<h2>Search Results</h2>	
			<?php 
			if (have_posts()) : 
			while (have_posts()) : the_post(); ?>

		<div class='entry blogentry'>
			<h3><a href="<?php echo get_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>"><?php the_title(); ?></a></h3>
	</div><!--end entry-->
	<?php 	endwhile; 
	
				kriesi_pagination();
				else: 
		?>
			<div class="entry">
			<h2>No Entries</h2>
			<p>Sorry, no PRSS sites matched your criteria.</p>
			<p>Please check back often, as we're always adding new sites to the DNA PRSS network. Also, you can search the DNA PRSS site below.</p>
			</div>
 	<?php
			endif;
	?>  
</div><!-- end content -->

<?php get_sidebar(); ?>

</div><!--end main-->

<?php get_footer();  ?>