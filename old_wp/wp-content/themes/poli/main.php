<?php
/**
 * Template Name: Главная страница
 */
 
$var = get_template_directory_uri(); 

get_header();  ?>

  <header>
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-offset-6">
          <h1>
            <?php the_field("h1"); ?>
          </h1>
          <p class="after-h1">
            <?php the_field("h2"); ?>
          </p>
          <div class="over-line">
            <p>
              <?php the_field("priziv"); ?>
            </p>
            <div class="sale-circle">Горячая<span>-<?php the_field("sale"); ?>%</span>Скидка</div>
            <div style="display: table; margin: 0 auto; text-align: center;"><a class="btn_reg" href="http://superbrows.ru/holliwood-brows/" >Фото</a>
            <a class="btn_reg" style=" margin-left: 10px;" href="#" data-toggle="modal" data-target="#tic_tac">Записаться</a></div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <section id="service1">
    <div class="container2">
      <div class="row">
        <div class="col-md-6">
          <!--h2-->
            <!--?php the_field("h1_1"); ?-->
          <!--/h2-->
          <div class="figure-box">
            <h3><?php the_field("h1_1"); ?></h3>
            <p>
              <?php the_field("desc_1"); ?>
            </p>
            <p class="text-center"><a class="btn_read" href="/pudra-napilenie/">Фото</a> <a class="btn_read" href="#" data-toggle="modal" data-target="#tic_tac">Записаться</a></p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="service2">
    <div class="container3">
      <div class="row">
        <div class="col-md-6 col-md-offset-6">
          <!--h2-->
            <!--?php the_field("h1_2"); ?-->
          <!--/h2-->
          <div class="figure-box">
            <h3><?php the_field("h1_2"); ?></h3>
            <p>
              <?php the_field("desc_2"); ?>
            </p>
            <p class="text-center"><a class="btn_read" href="/gibridnaya-technika/">Фото</a> <a class="btn_read" href="#" data-toggle="modal" data-target="#tic_tac">Записаться</a></p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="best">
    <div class="container">
      <h2>
        <?php the_field("h1_3"); ?>
      </h2>
      <div class="row">
        <?php
            $cc = 0;
			// ˆËÍÎ acf repeat
			if( have_rows('list_3') ):

			  // loop through the rows of data
			    while ( have_rows('list_3') ) : the_row();
					$cc++;
			        // display a sub field value ?>
          <div class="col-md-5  col-sm-6 <?php if($cc == 1 || $cc == 3) echo 'col-md-offset-1'; ?>">
            <div class="best-box">
              <img src="<?php echo the_sub_field('img'); ?>" alt="">
              <span><?php echo the_sub_field('name'); ?></span>
            </div>
          </div>

          <?php

			    endwhile;

			else :

			    // no rows found

			endif;

			?>


      </div>
    </div>
  </section>

  <section id="service3">
    <div class="container2">
      <div class="row">
        <div class="col-md-6">
          <!--h2-->
            <!--?php the_field("h1_4"); ?-->
          <!--/h2-->
          <div class="figure-box">
            <h3><?php the_field('h1_4'); ?></h3>
            <p>
              <?php the_field('desc_4'); ?>
            </p>
            <p class="text-center"><a class="btn_read" href="/ultrareal-voloski/">Фото</a> <a class="btn_read" href="#" data-toggle="modal" data-target="#tic_tac">Записаться</a></p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="tech">
    <div class="container">
      <h2>
        <?php the_field('h1_5'); ?>
      </h2>
      <div class="row">
        <?php

			// ˆËÍÎ acf repeat
			if( have_rows('list_5') ):

			  // loop through the rows of data
			    while ( have_rows('list_5') ) : the_row();

			        // display a sub field value ?>

          <div class="col-md-4 col-sm-4">
            <div class="tech-box">
              <img width="110px;" src="<?php echo the_sub_field('img'); ?>" alt="">
              <h3>
                <?php echo the_sub_field('name'); ?>
              </h3>
              <span class="price"><?php echo the_sub_field('price'); ?></span>
              <div class="sale-circle">горячая<span>-<?php echo the_sub_field('sale'); ?>%</span>скидка</div>
              <a class="btn_reg" href="#" data-toggle="modal" data-target="#tic_tac">Записаться</a>
            </div>
          </div>
          <?php

			    endwhile;

			else :

			    // no rows found

			endif;

			?>


      </div>
    </div>
  </section>


  <section id="brand">
    <div class="container">
      <div class="col-md-4 col-sm-4">
        <img src="<?php echo $var; ?>/img/journal.png" alt="" class="journal-img">
      </div>
      <div class="col-md-4 col-sm-4">
        <div class="text">
          <?php echo the_field('desc_6'); ?>
        </div>
      </div>
      <div class="col-md-4 col-sm-4">
        <div class="brand">
          <h3>Наши бренды</h3>
          <div class="over-line">
            <div class="brand-img"><img src="<?php echo $var; ?>/img/brand1.png" alt=""></div>
            <div class="brand-img"><img src="<?php echo $var; ?>/img/brand2.png" alt=""></div>
            <div class="brand-img"><img src="<?php echo $var; ?>/img/brand3.png" alt=""></div>
            <div class="brand-img"><img src="<?php echo $var; ?>/img/brand4.png" alt=""></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--section id="clients">
    <div class="container">
      <h2>
        <?php the_field('h1_7'); ?>
      </h2>
      <div class="row">
        <?php

			// ˆËÍÎ acf repeat
			if( have_rows('list_7') ):

			  // loop through the rows of data
			    while ( have_rows('list_7') ) : the_row();

			        // display a sub field value ?>


          <div class="col-md-4 col-sm-4">
            <div class="tech-box">
              <img src="<?php echo the_sub_field('img'); ?>" alt="">
              <h3>
                <?php echo the_sub_field('name'); ?>
              </h3>
              <p>
                <?php echo the_sub_field('desc'); ?>
              </p>
            </div>
          </div>
          <?php

			    endwhile;

			else :

			    // no rows found

			endif;

			?>


      </div>
    </div>
  </section-->

  <!--section id="banner">
    <div class="container">

    </div>
  </section-->

  <section id="sale">
    <div class="container">
      <div class="row">
        <div class="col-md-7 col-md-offset-5 col-sm-9 col-sm-offset-3">
          <span class="before-h2"><?php the_field('h2_8'); ?></span>
          <h2>
            <?php the_field('h1_8'); ?>
          </h2>
          <form action="">
            <div class="sale-circle">горячая<span>-<?php the_field('sale'); ?>%</span>скидка</div>
            <div class="body-form">
              <input type="text" required="" name="name" class="main-input" placeholder="Имя">
              <input type="text" required="" name="phone" class="main-input" placeholder="Телефон">

              <input type="hidden" name="form" value="Горячая скидка">
              <input type="submit" class="btn ok" value="ok">
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <section id="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2244.143512885521!2d37.596367616044134!3d55.77337929787204!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b54a3dea5aabe3%3A0xb6b623e51b2f00da!2zMS3QuSDQotCy0LXRgNGB0LrQvtC5LdCv0LzRgdC60L7QuSDQv9C10YAuLCAxNiwg0JzQvtGB0LrQstCwLCDQoNC-0YHRgdC40Y8sIDEyNTA0Nw!5e0!3m2!1sru!2sua!4v1509378826718" width="100%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
  </section>


  <?php get_footer(); ?>
