<?php 
global $k_option;
if ($k_option['custom']['bodyclass'] == "") // check if its a full width page, if full width dont show the sidebar content
{
			
			##############################################################################
			# Display the sidebar menu if we are on a page and if displaying is activated
			##############################################################################
			
?>
			<div id='sidebar'>
			
				<h1>sports sidebar</h1>

			</div><!-- end #sidebar -->

<?php } ?>         