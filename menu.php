<?php

/**

* Template Name: Menu

*/
?>

<?php wp_head()?>

<?php get_header()?>

    <!-- TOP -->

    <section class="top bg-accent w-full font-montserrat sticky top-0">
      <div class="container">
        <div class="top__wrapper">
          <h2 class="text-[15px] lg:text-[25px] text-white font-bold text-center">
            <?php the_field('top_text')?>
          </h2>
        </div>
      </div>
    </section>

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
              <h2><?php the_field('step_title_')?></h2>
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

    <!-- TOPPINGS -->

    <section class="topings bg-primary py-10 font-montserrat py-[10rem]">
      <div class="container">
        <div
          class="title flex flex-col justify-center items-center text-center"
        >
          <h2 class="text-[60px] text-accent font-bold">RAMEN TOPINGS</h2>
          <h4 class="text-[30px] text-secondary font-bold">
            BROTH & NOODLES
            <h3 class="text-[30px] text-dark font-bold">$6.50</h3>
          </h4>
          <p>Great for kids or to build your own</p>
        </div>
        

        <div
          class="toppings__wrapper lg:grid lg:grid-cols-[_0.5fr_0.5fr] lg:gap-10 place-items-center py-10"
        >
                <?php 

          $args = array(
            'post_type' => 'ramen',
            'posts_per_page' => -1,
            'tax_query' => array(
          array(
            'taxonomy' => 'category',
            'field'    => 'slug',
            'terms'    => 'toppings'
          )
            )
          );
          $newQuery = new WP_Query($args);

          ?>

          <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post(); ?>



          <div class="toppingsFood">
            <div class="flex justify-between">
              <div class="toppings--details">
                
                <p class="uppercase text-2xl font-bold"><?php the_title()?></p>
                <p class="text-sm font-semibold"><?php the_excerpt()?></p>

              </div>

              <div class="toppings--Price">
                <p class="text-2xl font-bold"><?php the_field('menu_price')?></p>
              </div>

            </div>
          </div>


                 <?php
                endwhile;
                else :
                  echo "No Available Content Yet";
                endif;
                wp_reset_postdata();
            ?>  

        
        
        </div>
        
      </div>
      <div style="background-repeart:no-repeat; background-size:cover;"  class="menuImage">
        <img
          class="w-screen translate-y-[7rem]"
          src="<?php the_field('sidessss')?>"
          alt=""
        />
      </div>
    </section>

    <!-- SIDES AND DESSERTS -->

    <section class="sides bg-primary py-[10rem] font-montserrat">
      <div class="container">
        <div class="title flex justify-center items-center text-center">
          <h2 class="text-[60px] text-accent font-bold">SIDES & DESSERT</h2>
        </div>
        <div
          class="sides__wrapper lg:grid lg:grid-cols-[_0.5fr_0.5fr] gap-10 place-items-center py-10"
        >

                  <?php 

          $args = array(
            'post_type' => 'ramen',
            'posts_per_page' => -1,
            'tax_query' => array(
          array(
            'taxonomy' => 'category',
            'field'    => 'slug',
            'terms'    => 'sides'
          )
            )
          );
          $newQuery = new WP_Query($args);

          ?>

          <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post(); ?>

          <div class="sidesFood">
            <div class="flex justify-between">
              <div class="sides--details">
                <p class="uppercase text-2xl font-bold"><?php the_title()?></p>
                <p class="text-sm font-semibold">
                  <?php the_excerpt()?>
                </p>
              </div>
              <div class="sides--Price">
                <div class="text-2xl font-bold"><?php the_field('menu_price')?> </div>
              </div>
            </div>
          </div>

            <?php
                endwhile;
                else :
                  echo "No Available Content Yet";
                endif;
                wp_reset_postdata();
            ?>

        </div>
      </div>
      <div style="background-repeart:no-repeat; background-size:cover;"  class="menuImage">
        <img
          class="w-screen translate-y-[7rem]"
          src="<?php the_field('drinkimage')?>"
          alt=""
        />
      </div>
    </section>

    <!-- DRINKS -->

    <!-- <section class="drinks bg-primary font-montserrat">
      <div class="container place-items-center">
        <div
          class="title flex flex-col text-center items-center justify-center"
        >
          <h2 class="text-[60px] text-accent font-bold">DRINKS</h2>
          <h3 class="text-[30px] text-secondary font-bold">
            JOIN US FOR HAPPY HOUR
          </h3>
          <p class="text-[15px] lg:text-[25px] font-bold text-secondary">
            3-6PM / 9-11PM • $1 OFF ALL BEAR | WEDNESDAYS 5-11PM • $2 SAKE
            CARAFFES
          </p>
        </div>

        <ul class="foodSelect flex gap-10 py-2">

              <?php
              if(have_rows('all_drinks')) :
                while(have_rows('all_drinks')): the_row();
                ?>


          <p class="<?php echo get_sub_field('drink_status')?>" id="<? echo get_sub_field('drink_id')?>">
            <?php echo get_sub_field('drink_text')?></p>

              <?php
          endwhile;
        else :
            echo "No content yet.";
        endif;
        ?>

        </ul>
        <div class="drinks__wrapper py-[3rem]">


        <?php
              if(have_rows('food_contents')) :
                while(have_rows('food_contents')): the_row();
                ?>

         
          <div class="<?php echo get_sub_field('food_status')?>" id="<?php echo get_sub_field('food_id')?>">
            <div class="draft gap-2 px-5">
              <div class="drafts--categ text-center">
                <h2 class="text-[30px] text-dark font-bold">DRAFT</h2>
              </div>
              <div class="draftFoods">
                <div class="flex justify-between">
                  <div class="drink--details">
                    <p class="uppercase text-2xl font-bold">PEAR-asdasSNAP</p>
                    <p class="text-sm font-semibold">
                      boiled and salted soybean pods
                    </p>
                  </div>
                  <div class="drink--Price">
                    <p class="text-2xl font-bold">$5.00</p>
                  </div>
                </div>
              </div>
              <div class="draftFoods">
                <div class="flex justify-between">
                  <div class="drink--details">
                    <p class="uppercase text-2xl font-bold">PEAR-SNAP</p>
                    <p class="text-sm font-semibold">
                      boiled and salted soybean pods
                    </p>
                  </div>
                  <div class="drink--Price">
                    <p class="text-2xl font-bold">$5.00</p>
                  </div>
                </div>
              </div>
              <div class="draftFoods">
                <div class="flex justify-between">
                  <div class="drink--details">
                    <p class="uppercase text-2xl font-bold">PEAR-SNAP</p>
                    <p class="text-sm font-semibold">
                      boiled and salted soybean pods
                    </p>
                  </div>
                  <div class="drink--Price">
                    <p class="text-2xl font-bold">$5.00</p>
                  </div>
                </div>
              </div>
              <div class="draftFoods">
                <div class="flex justify-between">
                  <div class="drink--details">
                    <p class="uppercase text-2xl font-bold">PEAR-SNAP</p>
                    <p class="text-sm font-semibold">
                      boiled and salted soybean pods
                    </p>
                  </div>
                  <div class="drink--Price">
                    <p class="text-2xl font-bold">$5.00</p>
                  </div>
                </div>
              </div>
              <div class="draftFoods">
                <div class="flex justify-between">
                  <div class="drink--details">
                    <p class="uppercase text-2xl font-bold">PEAR-SNAP</p>
                    <p class="text-sm font-semibold">
                      boiled and salted soybean pods
                    </p>
                  </div>
                  <div class="drink--Price">
                    <p class="text-2xl font-bold">$5.00</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="bottles gap-2 px-5">
              <div class="bottles--categ text-center">
                <h2 class="text-[30px] text-dark font-bold">
                  JAPANESE BOTTLES
                </h2>
              </div>
              <div class="bottleFoods">
                <div class="flex justify-between">
                  <div class="bottle--details">
                    <p class="uppercase text-2xl font-bold">SUPER DRY</p>
                    <p class="text-sm font-semibold">BEER - Asahi</p>
                  </div>
                  <div class="bottle--Price">
                    <p class="text-2xl font-bold">$5.00</p>
                  </div>
                </div>
              </div>
              <div class="bottleFoods">
                <div class="flex justify-between">
                  <div class="bottle--details">
                    <p class="uppercase text-2xl font-bold">SUPER DRY</p>
                    <p class="text-sm font-semibold">BEER - Asahi</p>
                  </div>
                  <div class="bottle--Price">
                    <p class="text-2xl font-bold">$5.00</p>
                  </div>
                </div>
              </div>
              <div class="bottleFoods">
                <div class="flex justify-between">
                  <div class="bottle--details">
                    <p class="uppercase text-2xl font-bold">SUPER DRY</p>
                    <p class="text-sm font-semibold">BEER - Asahi</p>
                  </div>
                  <div class="bottle--Price">
                    <p class="text-2xl font-bold">$5.00</p>
                  </div>
                </div>
              </div>
              <div class="bottleFoods">
                <div class="flex justify-between">
                  <div class="bottle--details">
                    <p class="uppercase text-2xl font-bold">SUPER DRY</p>
                    <p class="text-sm font-semibold">BEER - Asahi</p>
                  </div>
                  <div class="bottle--Price">
                    <p class="text-2xl font-bold">$5.00</p>
                  </div>
                </div>
              </div>
              <div class="bottleFoods">
                <div class="flex justify-between">
                  <div class="bottle--details">
                    <p class="uppercase text-2xl font-bold">SUPER DRY</p>
                    <p class="text-sm font-semibold">BEER - Asahi</p>
                  </div>
                  <div class="bottle--Price">
                    <p class="text-2xl font-bold">$5.00</p>
                  </div>
                </div>
              </div>
              <div class="bottleFoods">
                <div class="flex justify-between">
                  <div class="bottle--details">
                    <p class="uppercase text-2xl font-bold">SUPER DRY</p>
                    <p class="text-sm font-semibold">BEER - Asahi</p>
                  </div>
                  <div class="bottle--Price">
                    <p class="text-2xl font-bold">$5.00</p>
                  </div>
                </div>
              </div>
              <div class="bottleFoods">
                <div class="flex justify-between">
                  <div class="bottle--details">
                    <p class="uppercase text-2xl font-bold">SUPER DRY</p>
                    <p class="text-sm font-semibold">BEER - Asahi</p>
                  </div>
                  <div class="bottle--Price">
                    <p class="text-2xl font-bold">$5.00</p>
                  </div>
                </div>
              </div>
              <div class="bottleFoods">
                <div class="flex justify-between">
                  <div class="bottle--details">
                    <p class="uppercase text-2xl font-bold">SUPER DRY</p>
                    <p class="text-sm font-semibold">BEER - Asahi</p>
                  </div>
                  <div class="bottle--Price">
                    <p class="text-2xl font-bold">$5.00</p>
                  </div>
                </div>
              </div>
              <div class="bottleFoods">
                <div class="flex justify-between">
                  <div class="bottle--details">
                    <p class="uppercase text-2xl font-bold">SUPER DRY</p>
                    <p class="text-sm font-semibold">BEER - Asahi</p>
                  </div>
                  <div class="bottle--Price">
                    <p class="text-2xl font-bold">$5.00</p>
                  </div>
                </div>
              </div>
              <div class="bottleFoods">
                <div class="flex justify-between">
                  <div class="bottle--details">
                    <p class="uppercase text-2xl font-bold">SUPER DRY</p>
                    <p class="text-sm font-semibold">BEER - Asahi</p>
                  </div>
                  <div class="bottle--Price">
                    <p class="text-2xl font-bold">$5.00</p>
                  </div>
                </div>
              </div>
              <div class="bottleFoods">
                <div class="flex justify-between">
                  <div class="bottle--details">
                    <p class="uppercase text-2xl font-bold">SUPER DRY</p>
                    <p class="text-sm font-semibold">BEER - Asahi</p>
                  </div>
                  <div class="bottle--Price">
                    <p class="text-2xl font-bold">$5.00</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php
          endwhile;
        else :
            echo "No content yet.";
        endif;
        ?>

        </div>
      </div>
    </section> -->

     <section class="drinks bg-primary font-montserrat">
      <div class="container place-items-center">
        <div
          class="title flex flex-col text-center items-center justify-center"
        >
          <h2 class="text-[60px] text-accent font-bold">DRINKS</h2>
          <h3 class="text-[30px] text-secondary font-bold">
            JOIN US FOR HAPPY HOUR
          </h3>
          <p class="text-[15px] lg:text-[25px] font-bold text-secondary">
            3-6PM / 9-11PM • $1 OFF ALL BEAR | WEDNESDAYS 5-11PM • $2 SAKE
            CARAFFES
          </p>
        </div>
        <ul class="foodSelect flex gap-10 py-2">

        <?php 

          $args = array(
            'post_type' => 'drink',
            'posts_per_page' => -1,
          );
          $newQuery = new WP_Query($args);

          ?>

          <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post(); ?>


          <p class="drink__list active" id="tabs-<?php the_field('drink_id')?>"><?php the_title()?></p>
          
          <?php
                endwhile;
                else :
                  echo "No Available Content Yet";
                endif;
                wp_reset_postdata();
            ?>

        </ul>
        <div class="drinks__wrapper py-[3rem]">


          <!-- CONTENTS -->
          <div class="foodTabs active" id="tabs-<?php the_field('drink_id')?>-content">
            <div class="draft gap-2 px-5">
              <div class="drafts--categ text-center">
                <h2 class="text-[30px] text-dark font-bold">DRAFT</h2>
              </div>
              <div class="draftFoods">
                <div class="flex justify-between">
                  <div class="drink--details">
                    <p class="uppercase text-2xl font-bold">PEAR-asdasSNAP</p>
                    <p class="text-sm font-semibold">
                      boiled and salted soybean pods
                    </p>
                  </div>
                  <div class="drink--Price">
                    <p class="text-2xl font-bold">$5.00</p>
                  </div>
                </div>
              </div>

              <div class="draftFoods">

                  



                <div class="flex justify-between">
                  <div class="drink--details">
                    <p class="uppercase text-2xl font-bold"><?php echo get_sub_field('Name')?></p>
                    <p class="text-sm font-semibold">
                      <?php echo get_sub_field('description')?>
                    </p>
                  </div>
                  <div class="drink--Price">
                    <p class="text-2xl font-bold"><?php echo get_sub_field('price')?></p>
                  </div>
                </div>
              </div>

            </div>

            <!-- BOTTLES -->
            <div class="bottles gap-2 px-5">
              <div class="bottles--categ text-center">
                <h2 class="text-[30px] text-dark font-bold">
                  JAPANESE BOTTLES
                </h2>
              </div>

              <div class="bottleFoods">
                <div class="flex justify-between">
                  <div class="bottle--details">
                    <p class="uppercase text-2xl font-bold">SUPER DRY</p>
                    <p class="text-sm font-semibold">BEER - Asahi</p>
                  </div>
                  <div class="bottle--Price">
                    <p class="text-2xl font-bold">$5.00</p>
                  </div>
                </div>
              </div>

            </div>
          </div>


        </div>
      </div>
    </section>

    <script>


    </script>


<?php get_footer()?>