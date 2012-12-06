				<div id="sidebarSchedule" class="sidebar fourcol last clearfix" role="complementary">

					<?php if ( is_active_sidebar( 'stryker' ) ) : ?>

						<?php dynamic_sidebar( 'stryker' ); ?>

					<?php endif; ?>

					
					<?php
						global $post;
						$latest = array( 'numberposts' => 3, 'category' => 1 );
						$latestposts = get_posts( $latest );
						foreach( $latestposts as $post ) :	setup_postdata($post);
					?>
						<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
						<?php the_post_thumbnail( 'home-thumbnails' ); ?>
							<header class="article-header">
							
								<h1 id="articleheaderH1"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?><img src="/wp-content/themes/azrattlers/library/images/arrows.png" class="arrow" alt="Post Arrows" title="post arrows" /></a></h1>
							
							</header><!-- end article header -->
						
						</article><!-- end article -->
						
					<?php endforeach; ?>
					
				</div>