<?php
/* 
	Template Name: Tutorials Page
*/
get_header(); ?>
<div id="main">
	<div id="container" >
		<div id="content" role="main">
			<div class="container">
				<div id="showcase-area2">
						<div class="col1-4 next">
						</div>				 	
						<div class="col1-3 next top-title-text-home">
								<h1><?php echo of_get_option("top_title_text_1","none"); ?></h1>											
						</div>	
						<div class="col1-3 next top-title-text-home">								
								<h2><?php echo of_get_option("top_title_text_2","none"); ?></h2>													
						</div>					
				</div>
			</div>
			<div class="showcase-area-mobile">
						<div class="titles">
							<div class="container">
								<div class="col1-2 next top-title-text-home">
									<h1><?php echo of_get_option("top_title_text_1","none"); ?></h1>
								</div>
								<div class="col1-2 next top-title-text-home">
									<h2><?php echo of_get_option("top_title_text_2","none"); ?></h2>
								</div>
								<div class="clear"></div>
							</div>
						</div>
						<div class="showcase-mobile-text">
							<div class="container">
								<h2><?php the_title(); ?></h2>
								<p><?php  echo of_get_option("top_title_text_3","none"); ?></p>	
							</div>
						</div>
				</div>
			<div class="page-title-section">	
				<div class="container">				
					<div class="col1-3 next">
					<h2><?php the_title(); ?></h2>
				</div>
				<div class="col1-3 next">
					<p><?php  echo of_get_option("top_title_text_3","none"); ?></p>
				</div>
				<div class="clear"></div>
				</div>				
			</div>
			<div class="videos_section">
					<div class="container">
					<?php					
						$args = array( 'post_type' => 'video_category','order'=> 'ASC', 'orderby' => 'ID', 'meta_key' => 'is_subcategory', 'meta_value' => 'No' );
						$loop = new WP_Query( $args ); 
						while ( $loop->have_posts() ) : $loop->the_post();
						
						?>
							<div class="category">
								<div class="category_name">
									<h2><?php echo get_the_title(); ?></h2>
								</div>
								<div class="category_content">							

										<div class="tut_buttons_section">
												<?php 
													
													$chained_buttons = get_field("videos");																			
													$array_buttons = explode("&lt;&gt;", $chained_buttons);

													$total = count($array_buttons);
													$last_class = "";

													for($h=0; $h<$total-1; $h++)
													{
														$button_html = do_shortcode($array_buttons[$h]); 
														if($h == $total-2 || $h == 3)
														{
															$last_class = "last-button";
														}

														?>
															<div class="tut_button_col col1-4 next <?php echo $last_class; ?>">
																<?php 
																	$last_class = "";
																	echo $button_html;
																?>
															</div>													
														<?php										
													}
												?>
												<div class="clear"></div>	
											</div>
										<?php	
											
										if(get_field("has_subcategories") == "Yes")	
										{
											$ID_dady = get_the_ID();
											$args2 = array( 'post_type' => 'video_category','order'=> 'ASC', 'orderby' => 'ID', 'meta_key' => 'category_parent', 'meta_value' => $ID_dady );
											$loop2 = new WP_Query( $args2 ); 
											while ( $loop2->have_posts() ) : $loop2->the_post();

										?>										
											<div class="tut_buttons_section">
												<div class="subcategory_name"><?php the_title(); ?></div>
												<?php 
													
													$chained_buttons = get_field("videos");																			
													$array_buttons = explode("&lt;&gt;", $chained_buttons);																				
													$total = count($array_buttons);
													$last_class = "";

													for($h=0; $h<$total-1; $h++)
													{
														$button_html = do_shortcode($array_buttons[$h]); 
														if($h == $total-2 || $h == 3)
														{
															$last_class = "last-button";
														}

														?>
															<div class="tut_button_col col1-4 next <?php echo $last_class; ?>">
																<?php 
																	$last_class = "";
																	echo $button_html;
																?>
															</div>													
														<?php											
													}
												?>
												<div class="clear"></div>		
											</div>
											<?php
											endwhile;
										}
									?>
								</div>
							</div>
							<?php
						endwhile;
					?>
				</div>				
			</div>
			<?php generate_categories_mobile(); ?>		
		</div>								
	</div>
</div>
<?php get_footer(); ?>

<?php
function generate_categories_mobile()
{
	$args = array( 'post_type' => 'video_category','order'=> 'ASC', 'orderby' => 'ID', 'meta_key' => 'is_subcategory', 'meta_value' => 'No' );
	$loop3 = new WP_Query( $args ); 

	?>
	<ul class="list-cat-mobile">
		<?php
		while ( $loop3->have_posts() ) : $loop3->the_post();
			?>
			<li>
				<div class="mob-cat-title"><h2><?php echo get_the_title(); ?></h2></div>
				<ul class="mob-cat-content">
				<?php	
					$chained_buttons = get_field("videos");																			
					$array_buttons = explode("&lt;&gt;", $chained_buttons);																				
					$total = count($array_buttons);					
					for($h=0; $h<$total-1; $h++)
					{
						$button_html = do_shortcode($array_buttons[$h]); 						
					?>
						<li class="mob-tut-button">
						<?php 
							echo $button_html;
						?>
						</li>													
					<?php											
					}	
					if(get_field("has_subcategories") == "Yes")	
					{
						$ID_dady = get_the_ID();
						$args2 = array( 'post_type' => 'video_category','order'=> 'ASC', 'orderby' => 'ID', 'meta_key' => 'category_parent', 'meta_value' => $ID_dady );
						$loop2 = new WP_Query( $args2 ); 
						while ( $loop2->have_posts() ) : $loop2->the_post();
					?>
					<li>
						<div class="mob-cat-subtitle">
							<h3 ><?php echo get_the_title(); ?></h3>
						</div>
						<ul class="mob-cat-content">
							<?php	
								$chained_buttons = get_field("videos");																			
								$array_buttons = explode("&lt;&gt;", $chained_buttons);																				
								$total = count($array_buttons);					
								for($h=0; $h<$total-1; $h++)
								{
									$button_html = do_shortcode($array_buttons[$h]); 						
							?>
								<li class="mob-tut-button">
								<?php 
									echo $button_html;
								?>
								</li>													
							<?php											
								}	?>
						</ul>	
					</li>					
					<?php
						endwhile;
					}
					?>
				</ul>
			</li>
			<?php
		endwhile;
		?>
	</ul>
	<?php
}