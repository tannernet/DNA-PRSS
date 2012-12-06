<?php 
global $k_option;
if ($k_option['custom']['bodyclass'] == "") // check if its a full width page, if full width dont show the sidebar content
{
			
			##############################################################################
			# Display the sidebar menu if we are on a page and if displaying is activated
			##############################################################################
			
?>
			<div id='sidebar'>

			<?php
				// Make a MySQL Connection
				mysql_connect("dnaprss.db.4229562.hostedresource.com", "dnaprss", "Supp0rt!") or die(mysql_error());
				mysql_select_db("dnaprss") or die(mysql_error());

				// Select data from database
				$query  = "SELECT * FROM network ORDER BY RAND() LIMIT 0,5";
				$result = mysql_query($query);

				echo "<h3 class=\"widgettitle\">Our Network</h3><ul class=\"network\">";
				
				while($row = mysql_fetch_array($result, MYSQL_ASSOC))
					{
						echo "<li><a href=\"{$row['link']}\">" . "<img src=\"{$row['img']}\" alt=\"{$row['alt']}\" /></a></li>";
				}
				echo "</ul>";

			?>
			
			<?php if (is_page() && $k_option['menu']['sidebar_menu'] != 2){ ?>
				
			<?php 
			 
			
			


			}
			#######################################################################
			# Else Display the Blog Sidebar Area, at least if it is filled with 
			# widgets, if thats not the case a category and archive list is applied
			#
			# if you dont want these placeholder widgets to appear delete where the 
			# comments tell you to do :)
			#######################################################################
			
			else 
			{
			if (function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar Blog')) : else : 
			
			$exclude = '';
			
			if($k_option['blog']['blog_widget_exclude'] == 1)
			{
				$exclude = '&exclude='.$k_option['blog']['blog_cat_final'];
			}
			
			


			endif;
		
			} 
			
			
			######################################################################
			# widget area for the custom widgets by the user
			######################################################################
			global $custom_widget_area;
			if (function_exists('dynamic_sidebar') && dynamic_sidebar($custom_widget_area) ) : endif;
			
	        #######################################################################
			# Display the "Displayed Everywhere" widget area. Widgets applied here 
			# will be shown on every page with a sidebar 
			#######################################################################
			if (function_exists('dynamic_sidebar') && dynamic_sidebar('Displayed Everywhere')) : endif;
	       	?>	
			</div><!-- end #sidebar -->

<?php } ?>         