<?php wp_footer()?>

<section class="footer py-[5rem] bg-dark font-montserrat lg:px-[20rem]">
      <div class="container">
        <div
          class="footer__wrapper flex flex-col lg:flex-row lg:justify-between items-center text-center gap-5"
        >
          <ul class="social">
            <?php the_field('socials')?>
          </ul>
          <ul class="w-[20rem] lg:w-[70%]">
            <li>
              <h2
                class="text-white font-bold text-center text-[10px] lg:text-[20px]"
              >
                <?php the_field('location')?>
              </h2>
            </li>
          </ul>
          <ul>
            <li>
              <a href="#" class="btn bg-secondaryy text-sm"><?php  the_field('footer_btn_text')?></a>
            </li>
          </ul>
        </div>
      </div>
    </section>
    <script src="./js/toggleMenu.js"></script>
    <script src="./js/foodMenu.js"></script>
  </body>
</html>
