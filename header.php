<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	 <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSSフィード" href="<?php bloginfo('rss2_url'); ?>">
	<title>待ち合わせ美女</title>
	<meta name="description" content="待ち合わせ、しよう。" />
	<meta name="keywords" content="美女,待ち合わせ,shour" />
	<meta name="author" content="team shour" />
    
    <meta property="og:title" content="待ち合わせ美女" />
    <meta property="og:type" content="website" />
    <meta property="og:description" content="待ち合わせ、しよう。" />
    <meta property="og:url" content="http://machiawase-bijo.com/" />
    <meta property="og:image" content="http://machiawase-bijo.com/images/fb.png" />
    <meta property="og:site_name" content="待ち合わせ美女" />
    <meta property="og:locale" content="ja_JP" />
    <meta property="fb:app_id" content="397837766950698" />
	
    <!-- css ここから -->
	<link rel="stylesheet" media="screen" href="<?php echo get_template_directory_uri(); ?>/css/reset.css" />
    <link rel="stylesheet" media="screen and (max-width: 65025px)" href="<?php echo get_template_directory_uri(); ?>/css/base.css" />
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
    
    <!-- colorbox js ここから -->
		<script>
		
		  function addColorboxClass(){
		    $(".image a").addClass("iframe cboxElement");
		  }
			$(document).ready(function(){
				
				//Example of preserving a JavaScript event for inline calls.
				$("#click").click(function(){ 
					$('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
					return false;
				});
				
				//skitter
				$('.box1').css({width: 605, height: 532}).skitter({show_randomly: true, navigation: false, dots: false, numbers:false, interval: 4000});
				$('.box2').css({width: 400, height: 395}).skitter({show_randomly: true, navigation: false, dots: false, numbers:false, interval: 4000});
				$('.box3').css({width: 191, height: 259}).skitter({show_randomly: true, navigation: false, dots: false, numbers:false, interval: 4000});
				$('.box4').css({width: 191, height: 122}).skitter({show_randomly: true, navigation: false, dots: false, numbers:false, interval: 4000});
				$('.box5').css({width: 400, height: 259}).skitter({show_randomly: true, navigation: false, dots: false, numbers:false, interval: 4000});
				$('.box6').css({width: 394, height: 122}).skitter({show_randomly: true, navigation: false, dots: false, numbers:false, interval: 4000});
					
				
				
				
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
</head>
<body <?php body_class(); ?>>
<div>
		 <!--------------------- ここからヘッダー -->
        
		<div class="header">
        	<div class="head_wrap">
        		<a href="http://machiawase-bijo.com/"><img src="<?php echo get_template_directory_uri(); ?>/images/logo_machiawase_02.png"  id="logo"/></a>
                
                <div id="fb_good">
        			<div id="head_tw">
                    	<a href="https://twitter.com/share" class="twitter-share-button" data-url="http://machiawase-bijo.com/" data-text="待ち合わせ美女｜あなたも待ち合わせのドキドキを追体験" data-via="machiawasebijo" data-lang="ja" data-hashtags="待ち合わせ美女">ツイート</a>
                    	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                	</div>
                    <iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fmachiawase-bijo.com%2F&amp;send=false&amp;layout=standard&amp;width=250&amp;show_faces=true&amp;action=like&amp;colorscheme=light&amp;font&amp;height=80&amp;appId=397837766950698" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:650px; height:80px;" allowTransparency="true"></iframe>

                </div>

                
                <div style="clear:both"></div>
                
            </div>
        
        </div>