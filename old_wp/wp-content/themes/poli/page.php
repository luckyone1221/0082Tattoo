<?php $var = get_template_directory_uri(); 

get_header();  ?>

  <hr>
<section>
	<div class="container content">
	<div class="row">
		<div class="col-lg-9 col-md-9 col-xs-12">
			<h2><?php the_title(); ?></h2>
                <div id="share">
                    Поделиться: 
					<script src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
					<script src="//yastatic.net/share2/share.js"></script>
					<div class="ya-share2" data-services="vkontakte,facebook,odnoklassniki,moimir,gplus" data-counter="">
					</div>
                </div>
             <p>
             <?php 
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 
		//
	 the_content(); 
		//
	} // end while
} // end if
?>
             	
             </p>
<?php comments_template(); ?>

		</div>
		<div class="col-lg-3 col-md-3 col-xs-12">
			<div class="podpis">
				<a class="button_sub btn" data-toggle="modal" data-target="#podpis" href="#">Подписаться</a>
				<a class="button_feed btn" data-toggle="modal" data-target="#feedback" href="#">Связаться с нами</a>
			</div>
			<hr>
			<div class="roubric">
				<ul>
				<?php

// ˆËÍÎ acf repeat
if( have_rows('roub','options') ):

  // loop through the rows of data
    while ( have_rows('roub','options') ) : the_row();

        // display a sub field value ?>
        <li><a href="<?php echo the_sub_field('link'); ?>"><img src="<?php echo the_sub_field('img'); ?>" /><p><?php echo the_sub_field('name'); ?></p></a></li>
        
        <?php

    endwhile;

else :

    // no rows found

endif;

?>
				</ul>
			</div>
			<div class="clearfix"></div>
			<hr>
			<div class="rec_list">
				
								<?php

// ˆËÍÎ acf repeat
if( have_rows('list_pic','options') ):

  // loop through the rows of data
    while ( have_rows('list_pic','options') ) : the_row();

        // display a sub field value ?>
        <div class="rec_item"><a href="<?php echo the_sub_field('link'); ?>"><img src="<?php echo the_sub_field('img'); ?>" /></a></div>
        
        <?php

    endwhile;

else :

    // no rows found

endif;

?>
			</div>
		</div>
		</div>
	</div>
</section>
    
<hr>
<?php get_footer(); ?>
