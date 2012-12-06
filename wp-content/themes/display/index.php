<?php get_header(); ?>
            
	<div id="featured">
		<div id="featured_image"><?php 
		######################################################################
		# Get Images for the Basic Image Slider
		######################################################################
		
		// these are the images for the jQuery slideshow, rendered with the help of the class 
		// framework/theme_plugins/kriesi_menu_manager/kriesi_slider_display
		
		if(is_object($k_option['custom']['slider'])) $k_option['custom']['slider']->display('Mainpage Slider'); ?>
		
		</div><!--end featured_image-->
	</div><!--end featured-->
		
		
		<?php 
		######################################################################
		# Infotext with fallback message 
		######################################################################
		?>
		<div id="infotext">
		<h2><?php echo $k_option['mainpage']['welcome']; ?></h2>
		</div><!--end infotext-->
		
		
		<div id="main">
		
		<?php 
	
		######################################################################
		# 3 Boxes are created here, with the class "kclass_display_box" (located in framework/classes/)
		# content that is passed here is the html output if the
		# "output by html(default)" is choosen in the backend
		#
		# if you want to edit the html directly you can do this here. you can 
		# enter your images directly as well if the size is already ok
		# or you might want to uncomment and change the paths of the placeholder 
		# images i used here
		#
		######################################################################
		
		// the kriesi_build_image function used here checks if the image should be resized. 
		// it returns the resized image if the size is larger than the parameters provided
		// the function is located in framework/helper_functions
		
		$placeholder_image1 = get_bloginfo('template_url').'/files/medium1.jpg'; 
		#$placeholder_image2 = get_bloginfo('template_url').'/files/medium1.jpg';
		#$placeholder_image3 = get_bloginfo('template_url').'/files/medium1.jpg';
		
		$placeholder_image1 = kriesi_build_image(array('url'=>$placeholder_image1,'height'=>'124','width'=>'280'));
		#$placeholder_image2 = kriesi_build_image(array('url'=>$placeholder_image2,'height'=>'124','width'=>'280'));
		#$placeholder_image3 = kriesi_build_image(array('url'=>$placeholder_image3,'height'=>'124','width'=>'280'));
		
		
		$placeholder[1] = $placeholder_image1.'<h3>HTML Template „Display“</h3><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco <a href="">laboris nisi</a> ut aliquip ex ea commodo conse. <a class="more-link" href="#">Read more</a></p>';

		$placeholder[2] = '<h3>The 411 on PRSS</h3><p><abbr title="Personalized Rich Site Summary">PRSS</abbr> is a revolutionary way to get news from your favorite sources. By aggregating information from your favorite websites and blogs, PRSS gives you all the news you need in one place.<br /><em>View the <a href="/about-prss/">About</a> page and <a href="/instructions/">Instructions</a> for more info!</em></p>';
		
		$placeholder[3] = "<hgroup>
								<h3>Freshly PRSS'd</h3>
								<h4>Latest PRSS sites</h4>
							</hgroup>
							<ul>
								<li><a href=\"http://dnaprss.com/category/football/ncaa-football/notre-dame/\" />Notre Dame</a></li>
								<li><a href=\"http://dnaprss.com/category/football/ncaa-football/us-navy/\" />US Navy</a></li>
								<li><a href=\"http://dnaprss.com/football/san-antonio-talons/\" />San Antonio Talons</a></li>
								<li><a href=\"http://dnaprss.com/football/arizona-rattlers/\" />Arizona Rattlers</a></li>
								<li><a href=\"http://dnaprss.com/football/new-orleans-saints/\" />New Orleans Saints</a></li>
							</ul>";
		
		//call class
		$boxes = new kclass_display_box('mainpage','mainpage_column','Mainpage Column', $placeholder);
		$boxes-> prev_image(array('height'=>'124','width'=>'280'));
		$boxes-> display();
		?>
		
       
		</div><!--end main-->
        
<?php get_footer(); ?>
