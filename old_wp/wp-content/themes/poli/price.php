<?php
/**
 * Template Name: Прайс
 */
$var = get_template_directory_uri(); 

get_header();  
?>


  <hr>
<section id="clients">
        <div class="container">
            <h2>Прайс</h2>
            <div class="row">
            <table class="table table-striped">
			    <thead>
			      <tr>
			        <th><?php the_field('zag1'); ?></th>
			        <th><?php the_field('zag2'); ?></th>
			        <th><?php the_field('zag3'); ?></th>
			        <th><?php the_field('zag4'); ?></th>
			        <th><?php the_field('zag5'); ?></th>
			      </tr>
			    </thead>
			    <tbody>
			    <?php

				// ˆËÍÎ acf repeat
				if( have_rows('prices') ):

				  // loop through the rows of data
				    while ( have_rows('prices') ) : the_row();

				        // display a sub field value ?>
				        
				        <tr>
					        <td><div class="photo-pep">
					        	<img src="<?php echo the_sub_field('img'); ?>" alt="">
					        	<p class="name"><?php echo the_sub_field('name'); ?></p>
					        	<p class="rank"><?php echo the_sub_field('rank'); ?></p>
					        </div></td>
					        <td class="price_td"><?php echo the_sub_field('price'); ?></td>
					        <td class="price_action_td"><?php echo the_sub_field('price_action'); ?></td>
					        <td><a href="<?php echo the_sub_field('link'); ?>" class="btn btn-default">посмотреть</a></td>
					        <td><a href="#" data-toggle="modal" data-target="#tic_tac" class="btn btn-default">записаться</a></td>
					    </tr>
				        <?php

				    endwhile;

				else :

				    // no rows found

				endif;

				?>
			      
				</tbody>
			</table>
      
            </div>
        </div>
    </section>
<?php get_footer(); ?>