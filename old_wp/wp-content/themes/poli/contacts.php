<?php
/**
 * Template Name: Контакты
 */
$var = get_template_directory_uri(); 

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
			<h3>рубрики</h3>
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
			<h3>Рекомендуем</h3>
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
<section id="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2244.143512885521!2d37.596367616044134!3d55.77337929787204!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b54a3dea5aabe3%3A0xb6b623e51b2f00da!2zMS3QuSDQotCy0LXRgNGB0LrQvtC5LdCv0LzRgdC60L7QuSDQv9C10YAuLCAxNiwg0JzQvtGB0LrQstCwLCDQoNC-0YHRgdC40Y8sIDEyNTA0Nw!5e0!3m2!1sru!2sua!4v1509378826718" width="100%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
    </section>
<?php get_footer(); ?>
