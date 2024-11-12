<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Michi Ramen</title>
  
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    />
    <?php wp_head()?>
  </head>
  <body>


  <?php if(is_front_page()){ ?>
    <div style="background-image:url('<?php the_field('banner_background')?>'); background-repeart:no-repeat; background-size:cover;" class=" lg:h-screen h-[100vh] relative">
    
    <?php }else{ ?>
    
    <div style = "background-color:gray; background-size:cover;" class="lg:h-screen h-[100vh] relative">


    <?php }?>
    
    <!-- Header -->
    <header class="header py-10 font-montserrat">
        <div class="container">
          <div
            class="header__wrapper flex flex-row justify-between items-center"
          >
            <div class="header__logo">
              <?php the_custom_logo()?>
            </div>
            <ul
              class="header__nav font-semibold flex flex-col justify-center items-center bg-black/100 lg:bg-transparent p-0 lg:flex lg:flex-row gap-10 items-center text-[15px] lg:text-[15px] lg:flex lg:flex-row lg:gap-[6rem] lg:items-center fixed duration-700 top-0 right-[-100%] h-[100%] lg:static lg:w-auto w-full"
            >
              <?php wp_menu_li()?>
              <a
                href="#"
                class="btn bg-secondaryy text-[clamp(40px, 5vw, 100px)]"
                >ORDER ONLINE</a
              >
            </ul>
            <div
              class="toggle__menu transition-all rounded-full hover:border-8 hover:border-gray-400 hover:bg-gray-400 cursor-pointer"
            >
              <span></span>
              <span></span>
              <span></span>
            </div>
          </div>
        </div>
      </header>