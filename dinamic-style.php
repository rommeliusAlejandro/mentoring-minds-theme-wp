<?php 
	$absolute_path = explode('wp-content', $_SERVER['SCRIPT_FILENAME']);
	$wp_load = $absolute_path[0].'wp-load.php';
	require_once($wp_load);
	header("Content-type: text/css; charset: UTF-8"); 
	header('Cache-control: must-revalidate');
	

	$home_showcase_bg = of_get_option("top_title_image","none");
?>

#showcase-area, #showcase-area2, .slogan-mobile
{	
	background-image: url('<?php echo $home_showcase_bg;  ?>');
}