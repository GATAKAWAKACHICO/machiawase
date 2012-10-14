        <div id="footer">
        
        	<div id="foot_wrap">
                <div id="foot_cont01">
                	
                    <div id="list">
                        <h1>モデル一覧</h1>
                            <?php
                            $i = 0;
                            $b = 0;
                            while($b < 1){
                              startModelListHtml();
                              $args = getModelPostArgs($i);
                              $divided_posts = get_posts($args);
                              //投稿記事リストを走査
                              loopModelList($divided_posts);
                              //閉じタグ
                              closeModelListHtml();
                              $i++;
                              if(count($divided_posts) < 6){
                                $b = 1;
                              }
                            }
                            ?>
                    </div>
                    
                    <div style="clear:both;"></div>
                    
                    <div id="supporters">
                        <h1>Special Sponsors</h1>
                        <div>
                            <h2>comming soon</h2>
                        </div>
                    </div>
                    
                    <div id="member">
                        <h1>Supported by</h1>
                        <a href="https://shour.jp" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/supporters_shour.png" id="logo_shour"/></a>
                        
                        
                    </div>
                </div>
                
                <div id="foot_cont02">
                	<h1>facebook</h1>
					<iframe src="//www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fpages%2F%25E5%25BE%2585%25E3%2581%25A1%25E5%2590%2588%25E3%2582%258F%25E3%2581%259B%25E7%25BE%258E%25E5%25A5%25B3%2F318597744895319&amp;width=292&amp;height=558&amp;colorscheme=light&amp;show_faces=true&amp;border_color=%23111111&amp;stream=true&amp;header=false&amp;appId=397837766950698" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:292px; height:600px;" allowTransparency="true"></iframe>                
                </div>
                <div id="foot_cont03">
                	<h1>twitter</h1>
                    <div id="tw"></div>
                </div>
            </div>
            
            <div style="clear:both;"></div>

            <div id="fnavi">
            <?php dynamic_sidebar( 'footer-widget' ); ?>
            	<p>©copyright shour all right reserved.</p>
                <!--
                <ul>                
                    <li><a href="#">プライバシーポリシー</a></li>
                    <li><a href="#">連絡先</a></li>
                </ul>  
                -->              
            </div>
            
        </div>

<?php wp_footer(); ?>
</body>
</html>