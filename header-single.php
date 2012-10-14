<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
  <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSSフィード" href="<?php bloginfo('rss2_url'); ?>">
	<?php //氏名 | 待ち合わせ美女 ?>
	<?php
    $name = "名前";
    $age = "年齢";
    ?>
	<title><?php echo get_post_meta($post->ID, $name, true); ?> - 待ち合わせ美女</title>
	<meta name="description" content="待ち合わせ、しよう。" />
	<meta name="keywords" content="美女,待ち合わせ,shour" />
    
    <meta property="og:title" content="<?php echo get_post_meta($post->ID, $name, true); ?> - 待ち合わせ美女" />
    <meta property="og:type" content="article" />
    <meta property="og:description" content="<?php echo get_post_meta($post->ID, $name, true); ?>さんと 待ち合わせ、しよう。" />
    <meta property="og:url" content="<?php echo the_permalink();?>" />
    <?php $image_profile =  wp_get_attachment_image_src( get_post_meta($post->ID, 'プロフィール画像', true),'full' ); ?>
    <meta property="og:image" content='<?php echo $image_profile[0]; ?>' />
    <meta property="og:site_name" content="待ち合わせ美女" />
    <meta property="og:locale" content="ja_JP" />
    <meta property="fb:app_id" content="397837766950698" />
	
    <!-- css ここから -->
	<link rel="stylesheet" media="screen" href="<?php echo get_template_directory_uri(); ?>/css/reset.css" />
  
    <link rel="stylesheet" media="screen and (max-width: 65025px)" href="<?php echo get_template_directory_uri(); ?>/css/girl.css" />
    <link href="<?php echo get_template_directory_uri(); ?>/css/skitter.styles.css" type="text/css" media="all" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/colorbox.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/followbox.css" />
    
     
    <!-- js ここから -->
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.7.2.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.easing.1.3.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.animate-colors-min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.skitter.min.js"></script>
	<!--<script src="<?php echo get_template_directory_uri(); ?>/js/highlight.js"></script>-->
	<!--<script src="<?php echo get_template_directory_uri(); ?>/js/sexy-bookmarks-public.js"></script>-->
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.colorbox.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.followbox.min.js"></script>
    
    <!-- skitter js ここから -->
		<script>
			$(document).ready(function(){
				$('.girl_photo').css({width: 945, height: 591}).skitter({show_randomly: false, navigation: false, dots: false, numbers:false, thumbs:true, interval: 4000});
				
				//followbox
				$('#tw').followbox({
						'user': 'machiawasebijo',
						'width'  : 290,
						'height'  : 560
					});
					
		  //mouseover
			$('.model li img')
					.hover(
						function(){
							$(this).stop().animate({'marginTop':'-40px'},'slow');
						},
						function () {
							$(this).stop().animate({'marginTop':'0px'},'fast');
						}
					);
			});
		</script>
    
    
    	<script type="text/javascript">

		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-34905210-1']);
		  _gaq.push(['_trackPageview']);
		
		  (function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();
		
		</script>
    
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<!--------------------- ここからヘッダー -->
        
	<div class="header">
    	<div class="head_wrap">
    		<a href="http://machiawase-bijo.com/"><img src="<?php echo get_template_directory_uri(); ?>/images/logo_machiawase_02.png"  /></a>             
        </div>
    </div>