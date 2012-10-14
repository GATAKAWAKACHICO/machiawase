<?php get_header("single"); ?>
<?php 
  $girl_id = getGirlImageId($post->ID);
  $name = "名前";
  $age = "年齢";
  $university = "大学名";
  $q1 = "q1";
  $a1 = "a1";
  $q2 = "q2";
  $a2 = "a2";
  $q3 = "q3";
  $a3 = "a3";
  $image_profile =  wp_get_attachment_image_src( get_post_meta($post->ID, 'プロフィール画像', true),'full' );
  $image_1 = wp_get_attachment_image_src( get_post_meta($post->ID, '画像1', true),'full' );
  $image_2 = wp_get_attachment_image_src( get_post_meta($post->ID, '画像2', true),'full' );
  $image_3 = wp_get_attachment_image_src( get_post_meta($post->ID, '画像3', true),'full' );
  $image_4 = wp_get_attachment_image_src( get_post_meta($post->ID, '画像4', true),'full' );
  $image_5 = wp_get_attachment_image_src( get_post_meta($post->ID, '画像5', true),'full' );
  $image_6 = wp_get_attachment_image_src( get_post_meta($post->ID, '画像6', true),'full' );
  $image_7 = wp_get_attachment_image_src( get_post_meta($post->ID, '画像7', true),'full' );
  $image_8 = wp_get_attachment_image_src( get_post_meta($post->ID, '画像8', true),'full' );
  $image_9 = wp_get_attachment_image_src( get_post_meta($post->ID, '画像9', true),'full' );
  $image_10 = wp_get_attachment_image_src( get_post_meta($post->ID, '画像10', true),'full' );
  $images = array(
    $image_1,
    $image_2,
    $image_3,
    $image_4,
    $image_5,
    $image_6,
    $image_7,
    $image_8,
    $image_9,
    $image_10
);
?>
    <!--------------------- ここからコンテンツ -->
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>

		<div class="girl_wrap">
            
            <div class="box_skitter girl_photo shadow">
                <ul>
                    <?php
                    foreach ($images as &$image) {
                        if($image){
                        echo '<li><a class="iframe" href="">';
                        var_dump($image);
                        echo '<img src="'.$image[0].'" class="fade" >';
                        echo '</a></li>';
                        }
                    }
                    ?>
                </ul>
            </div>     
            
            <div class="container">
            
                <div class="contents01">
                    <?php //the_content(); 
                    ?>
                    <?php /*
                    <h1>関 侑里子 <span style="font-size:16px;">さん(22)</span></h1>
                    <h2>東京大学法科大学院一年</h2>
                    */
                    ?>
                    <h1><?php echo get_post_meta($post->ID, $name, true); ?> <span style="font-size:16px;">さん(
<?php echo get_post_meta($post->ID, $age, true); ?> <span style="font-size:16px;">)</span></h1>
                    <h2><?php echo get_post_meta($post->ID, $university, true); ?></h2>
                    <div>
	                    <iframe src="//www.facebook.com/plugins/like.php?href=<?php echo the_permalink();?>&amp;send=false&amp;layout=button_count&amp;width=250&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font&amp;height=21&amp;appId=397837766950698" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:250px; height:21px;" allowTransparency="true"></iframe>
    	                <a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php echo the_permalink();?>" data-text="待ち合わせ美女　<?php echo get_post_meta($post->ID, $name, true); ?> さん" data-via="machiawasebijo" data-lang="ja" data-hashtags="待ち合わせ美女">ツイート</a>
						<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                    </div>
                </div>  
                
                <div class="contents04">
                  <img src="<?php echo $image_profile[0]; ?>" class="shadow"/>
                </div>
                
                <div class="contents02">
                    <h2>Q1.<?php echo get_post_meta($post->ID, $q1, true); ?></h2>
                    <p><?php echo get_post_meta($post->ID, $a1, true); ?></p>
                    <h2>Q2.<?php echo get_post_meta($post->ID, $q2, true); ?></h2>
                    <p><?php echo get_post_meta($post->ID, $a2, true); ?></p>
                    <h2>Q3.<?php echo get_post_meta($post->ID, $q3, true); ?></h2>
                    <p><?php echo get_post_meta($post->ID, $a3, true); ?></p>
                </div>
                
                <div class="contents03">
                	<!--
                    <img src="<?php echo get_template_directory_uri(); ?>/images/spot_02.png" class="shadow"/>
                    <h3>FREEMAN CAFE でランチ</h3>
                    <p>東京都渋谷区渋谷1-16-14<br />メトロプラザ 2F</p>
                    <p>tell : 03-5766-9111</p>
                    -->
                </div>
            
            	
            </div>
            
		</div>
		<?php endwhile; ?>
<?php else : ?>
<h2 class="title">記事が見つかりませんでした。</h2>
<?php endif; ?>
<?php get_footer(); ?>