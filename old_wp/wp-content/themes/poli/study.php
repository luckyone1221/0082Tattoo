<?php
/**
 * Template Name: Обучение
 */
$var = get_template_directory_uri(); 

get_header();  
$args = array(
	'posts_per_page'   => 25,
	'offset'           => 0,
	'category'         => 6,
	'orderby'          => 'date',
	'order'            => 'DESC',
	'post_type'        => 'post',
	'post_status'      => 'publish'
);
$posts_array = get_posts( $args );  ?>


  <hr>
<section id="clients">
        <div class="container">
            <h2>Обучение</h2>
            <div class="row">
            			        
<?php
foreach ($posts_array as $post) { ?>
<div class="col-md-4 col-sm-6">
	                    <div class="tech-box">
	                    <a href="<?php echo get_permalink($post); ?>">
	                        <img src="<?php echo get_the_post_thumbnail_url($post); ?>" alt="">
	                        <h3><?php echo $post->post_title; ?></h3>
	                        <p><?php echo get_field('desc',$post); ?></p>
	                        </a>
	                    </div>
                	</div>
<?php
} ?>
                	
			        			        

                	
			                        
                
            </div>
        </div>
    </section>
<?php get_footer(); ?>