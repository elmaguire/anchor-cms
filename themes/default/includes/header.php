<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title><?php echo page_title(); ?> - <?php echo site_name(); ?></title>

		<meta name="description" content="<?php echo site_description(); ?>">

		<link rel="stylesheet" href="<?php echo theme_url('/css/reset.css'); ?>">
		<link rel="stylesheet" href="<?php echo theme_url('/css/style.css'); ?>">
		
		<link rel="alternate" type="application/rss+xml" title="RSS" href="<?php echo rss_url(); ?>">

		<script src="//code.jquery.com/jquery-latest.min.js"></script>
		<script>var base = '<?php echo theme_url(); ?>';</script>
		<script src="<?php echo theme_url('/js/main.js'); ?>"></script>
		
		<?php if(customised()): ?>
		    <!-- Custom CSS -->
    		<style><?php echo article_css(); ?></style>
    		
    		<!--  Custom Javascript -->
    		<script><?php echo article_js(); ?></script>
		<?php endif; ?>
	</head>
	<body>
	
		<form id="search" action="<?php echo search_url(); ?>" method="post">
			<input type="search" name="term" placeholder="To search, type and hit enter&hellip;" value="<?php echo search_term(); ?>">
		</form>
	
		<header id="top">
			<div class="wrap">
				
				<a id="logo" href="<?php echo base_url(); ?>"><?php echo site_name(); ?></a>
	
				<nav id="main" role="navigation">
					<ul>
						<?php foreach(pages() as $page): ?>
						<li <?php echo ($page->active ? 'class="active"' : ''); ?>>
							<a href="<?php echo $page->url; ?>" title="<?php echo $page->title; ?>"><?php echo $page->name; ?></a>
						</li>
						<?php endforeach; ?>
					</ul>
				</nav>
				
			</div>
		</header>