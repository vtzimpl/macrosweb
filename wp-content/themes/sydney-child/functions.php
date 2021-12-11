<?php
/**
 * Sydney child functions
 *
 */


/**
 * Enqueues the parent stylesheet. Do not remove this function.
 *
 */
add_action( 'wp_enqueue_scripts', 'sydney_child_enqueue' );
function sydney_child_enqueue() {
    
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}

/* ADD YOUR CUSTOM FUNCTIONS BELOW */
// Shortcode to output custom PHP in Elementor
function wpc_elementor_shortcode( $atts ) {
     echo "<link href=https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css rel=stylesheet integrity=sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3 crossorigin=anonymous>";
  echo "<div class=container>";
 $count=0;
 for ($j = 0; $j <= 7; $j++) {
	echo " <div class=row>";
for ($i = 1; $i <= 10; $i++) {
	$count=$j*10+$i;
  echo "<div class=col-1> <div class=form-check><input class=form-check-input type=checkbox id=".$count."><label class=form-check-label for=".$count.">".$count."</label></div> </div>";
 }
 echo "</div>";
 }
 
 
 
  echo "</div></div>";
 
}
add_shortcode( 'my_elementor_php_output', 'wpc_elementor_shortcode');



/* ADD YOUR CUSTOM FUNCTIONS BELOW */
// Shortcode to output custom PHP in Elementor
function wpc_elementor_shortcode_grid( $atts ) {
 echo "<div class=grid-container>";
 $count=0;
 for ($j = 0; $j <= 7; $j++) {

for ($i = 1; $i <= 10; $i++) {
	$count=$j*10+$i;
  echo "<div class=check-with-label  id=".$count."> <input class=check-input  type=checkbox ><label  class=check-label for=".$count.">".$count."</label></div>";
 }

 }
 
 
 
  echo "</div>";
   echo "</div>";


}
add_shortcode( 'my_elementor_php_output_grid', 'wpc_elementor_shortcode_grid');





