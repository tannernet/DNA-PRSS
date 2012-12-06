<?php get_header(); ?>
			
			<div id="content">

				<div id="inner-content" class="wrap clearfix">
			
					<div id="main" class="twelvecol first clearfix" role="main">

						<article id="post-not-found" class="hentry clearfix">
						
							<header class="article-header">
							
								<h1><?php _e("Congratulations, you broke it!", "bonestheme"); ?></h1>
								<h2><?php _e("Error 404", "bonestheme"); ?></h2>
						
							</header> <!-- end article header -->
					
							<section class="post-content">
							
								<p><?php _e("Looks like we can't find what you're looking for so here's some random facts. Hopefully now you don't feel as if you've wasted your time.", "bonestheme"); ?></p>
								
								<?php

								$trivia_array = array(
											"Archery is the national sport in Bhutan, a Buddhist country in Asia.",
											"Each year, 30,000 people are seriously injured by exercise equipment.",
											"125,000 golf balls a year are hit into the water at the famous 17th hole of the Stadium Course at Sawgrass.",
											"Before 1917, goalies (in hockey) were not allowed to fall to the ice to make saves or else they were penalized.",
											"There are 2,598,960 possible hands in a five-card poker game.",
											"In 1970, 127 runners ran the NY Marathon. In 1998, 32,000 did.",
											"\"Guinea Pig\" or \"Wind-Dummy\" is a person who is set out to see if the wind is suitable for kitesurfing.",
											"The Houston Astrodome was the first baseball stadium to have a roof over its playing field.",
											"Bulgaria was the only soccer team in the 1994 World Cup in which all 11 starters' last names ended with the letters 'OV.'",
											"22.8 percent of golfers are women.",
											"Norway has won the most medals (263) at the Winter Games.",
											"Korfball is the only sport played with mixed teams, consisting of 4 men and 4 women.",
											"In 1986 yellow balls were used at Wimbledon for the first time to make them visible for the TV cameras.",
											"Americans spend more than $630 million a year on golf balls.",
											"No country in the Southern Hemisphere has ever hosted a Winter Games.",
											"Catgut, used in the making of tennis racket strings, is made out of the intestines of various animals.",
											"Gymnasiums were introduced in 900BC and Greek athletes practiced in the nude to the accompaniment of music. They also performed naked at the Olympic Games.",
											"The Metropolitan Museum of Art, in New York, houses the largest collection of baseball cards: over 200,000.",
											"The United States has won more medals (2,189) at the Summer Games than any other country."
											);

								$trivia = $trivia_array[array_rand($trivia_array)];

    							echo "<h1 class=\"h2\">Did you know?</h1>"."<p class=\"trivia\" >\"".$trivia."\"</p>";

								?>
							</section> <!-- end article section -->

							<section class="search">
				
								<h3 class="h4">Maybe you want to search for something?</h3>
							    <p><?php get_search_form(); ?></p>
				
							</section> <!-- end search section -->
						
							<footer class="article-header">
							
							    <!--<p><?php _e("This is the 404.php template.", "bonestheme"); ?></p>-->
							
							</footer> <!-- end article footer -->
					
						</article> <!-- end article -->
			
					</div> <!-- end #main -->

				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>
