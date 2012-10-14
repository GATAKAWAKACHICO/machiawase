<?php
/* auto-draft を投稿一覧に可視化する */
function force_update_autodraft_to_draft( $post_id, $post ) {
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE && ! (int)$post_id ) { return; }
    if ( $post->post_status == 'auto-draft' ) {
        wp_update_post( array( 'ID' => (int)$post_id, 'post_status' => 'draft' ) );
    }
}
add_action( 'wp_insert_post', 'force_update_autodraft_to_draft', 10, 2 );

function getGirlName($string){
  $name = explode("|", $string);
  return $name[0];
}

function getGirlImageId($id){
  if($id < 10){
    $id = "0".$id;
  }
  return $id;
}

function getCorrectForLoopNum($int){
  if($int == 0){
    return 1;
  }
  return $int;
}

function getModelPostArgs($int){
  $args = array( 'numberposts' => 5, 'offset'=> $int * 5);
  return $args;
}

function startModelListHtml(){
echo '<div>';
echo '<ul class="model">';
}

function loopModelList($posts){
  foreach($posts as $post) {
    echo '<li><a href="'.$post->guid.'">';
    $image_thumbnail = wp_get_attachment_image_src( get_post_meta($post->ID, 'サムネイル画像', true),'full' );
    echo '<img src="'.$image_thumbnail[0].'" >';
    echo '</a></li>';
  }
}

function closeModelListHtml(){
echo '</ul>';
echo '</div>';
echo '<div style="clear:both;"></div>';
}
?>