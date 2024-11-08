
      
      
      <!-- Header -->
    <?php get_header() ?>

      <section class="hero font-montserrat">
        <div class="container">
          <div class="hero__wrapper relative">
            <div
              class="title justify-center items-center mt-[100px] text-center leading-[1]"
            >
              <h1 class="text-[clamp(40px,5vw,100px)] font-bold text-white">
                <?php the_field('banner_title')?>
              </h1>
              <h2 class="text-xl text-white font-semibold">
                <?php the_field('banner_text')?>
              </h2>
            </div>
          </div>
        </div>
      </section>
      <div class="lastImg absolute bottom-0 left-[50%] translate-x-[-50%]">
        <img src="<?php the_field('hero_image')?>" alt="" />
      </div>
    </div>
    </div>

    <!-- HERO BOTTOM -->

    <section class="heroBtm font-economica py-10 bg-primary">
      <div class="container">
        <div
          class="heroBtm__wrapper flex flex-col justify-center items-center text-center"
        >
          <div class="title flex justify-center items-center py-5">
            <h2
              class="text-[clamp(35px,5vw,55px)] font-bold text-accent font-montserrat"
            >
              <?php the_field('step_title')?>
            </h2>
          </div>
          <ul class="step flex justify-center items-center gap-5 py-10">

            <!-- 1 -->
            <div class="follow place-items-center">
              <img src="<?php the_field('step_image_one')?>" alt="" />
              <h2><?php the_field('step_title_one')?></h2>
            </div>
            <li><i class="fa-solid fa-chevron-right"></i></li>
            <!-- 2 -->
            <div class="follow place-items-center">
              <img src="<?php the_field('step_image_two')?>" alt="" />
              <h2><?php the_field('step_title_two')?></h2>
            </div>
            <li><i class="fa-solid fa-chevron-right"></i></li>
            <!-- 3 -->
            <div class="follow place-items-center">
              <img src="<?php the_field('step_image_three')?>" alt="" />
              <h2><?php the_field('step_title_three')?></h2>
            </div>
          </ul>
        </div>
      </div>
    </section>

    <!-- MENU -->

    <section style="background-image:url('<?php the_field('ramen_background')?>');" class="myMenu bg-[url(./img/wood.jpg)] relative" class="menu py-[20rem] bg-list bg-repeat">
      <div class="container">
        <div class="menu__wrapper flex flex-col justify-center items-center">

          <div
            class="font-montserrat title flex justify-center py-5 font-semibold text-white items-center"
          >
            <h1 class="lg:text-[70px] text-[50px]"><?php the_field('menu_title')?></h1>
          </div>
          <ul class="foodList lg:grid lg:grid-cols-[_2fr_2fr] gap-[5rem]">
            
          <?php 

          $args = array(
            'post_type' => 'ramen',
            'posts_per_page' => -1,
            'tax_query' => array(
          array(
            'taxonomy' => 'category',
            'field'    => 'slug',
            'terms'    => 'ramen'
          )
            )
          );
          $newQuery = new WP_Query($args);

          ?>

          <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post(); ?>
          
          <!-- THE FOOD -->
            <div class="food">
              <div class="food--details">
                

                <div class="name">
                  <h2><?php the_title() ?></h2>
                  <h4><?php the_field('menu_price')?></h4>
                </div>
                <ul>
                  <?php the_field('menu_items')?>
                </ul>
                <h3><?php the_field('menu_categ')?></h3>
              </div>
              <div class="img">
                <?php
           if(has_post_thumbnail()){
            the_post_thumbnail();
           }
           ?>
              </div>
            </div>
                <?php
                endwhile;
                else :
                  echo "No Available Content Yet";
                endif;
                wp_reset_postdata();
            ?>
          </ul>
         <ul class="mt-10">
            <a
              href="http://localhost/myMichi/menu/"
              class="btn bg-darkk rounded-sm text-[20px] font-montserrat"
              >VIEW OUR ALL MENU</a
            >
          </ul>
        </div>
      </div>
      <div style="background-repeart:no-repeat; background-size:cover;"  class="menuImage">
        <img
          class="w-screen translate-y-[7rem]"
          src="<?php the_field('menu_second_image')?>"
          alt=""
        />
      </div>
      
    </section>

    <!-- CTA -->

    <section class="cta lg:py-[6rem] py-[3rem] bg-primary font-montserrat">
      <div class="container">
        <div
          class="cta__wrapper flex flex-col justify-center items-center text-center"
        >
          <h2 class="text-[35px] lg:text-[50px] font-bold text-accent">
            <?php the_field('cta_title')?>
          </h2>
          <h4 class="text-[10px] lg:text-[25px] font-bold text-secondary">
            <?php the_field('cta_text')?>
          </h4>
        </div>
      </div>
    </section>

    <!-- CTA IMAGE -->

    <section class="ctaImg">
      <ul class="ctaImg flex w-full">
        <li>
          <img src="<?php the_field('cta_image_one')?>" alt="" />
        </li>
        <li>
          <img src="<?php the_field('cta_image_two')?>" alt="" />
        </li>
        <li>
          <img src="<?php the_field('cta_image_three')?>" alt="" />
        </li>
      </ul>
    </section>

<?php get_footer() ?>