<?php
/**
* Template name: Главная и единственная
*/
?>

<?php get_header(); ?>
    <section id="sectionBanner">
      <div class="banner-wrapper" style="background-image: url(<?php echo fw_get_db_customizer_option('banner_bg') ? fw_get_db_customizer_option('banner_bg') : get_template_directory_uri() . '/assets/img/header-bg.png'; ?>)">
        <div class="container position-relative">
          <div class="page-count">
            <div class="page-count__number" id="dotNumber">01</div>
            <div class="page-count__dots">
              <div class="page-count__dot page-count__dot--active" id="dotOne"></div>
              <div class="page-count__dot" id="dotTwo"></div>
              <div class="page-count__dot" id="dotThree"></div>
              <div class="page-count__dot" id="dotFour"></div>
            </div>
          </div>
          <div class="banner">
            <h1 class="banner__heading"><?php echo esc_html__(fw_get_db_customizer_option('banner_title')); ?></h1>
            <button class="banner__button"><?php echo esc_html__(fw_get_db_customizer_option('banner_button_text')); ?><img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-right.png"/></button>
            <div class="scroll">
              <div class="scroll__mouse">
                <div class="scroll__wheel"></div>
              </div>
              <div class="scroll__arrow"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/banner-arrow-down.png"/></div>
              <div class="scroll__description">scroll</div>
            </div>
            <div class="banner__subtitle"><?php echo esc_html__(fw_get_db_customizer_option('banner_subtitle')); ?></div>
          </div>
        </div>
        <div class="banner-share">
          <?php wp_nav_menu(array(
              'theme_location' => 'socials_menu',
              'container'       => false, 
              'menu_class'      => 'socials', 
              'menu_id'         => 'socials'
              'echo'            => true,
          )); ?>
          <button class="banner-share__button" id="socialsButton"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/share.png"/></button>
        </div>
      </div>
    </section>
    <section id="sectionProductOne">
      <div class="container">
        <?php 
          global $post;
          $products_args = [
            'posts_per_page' => -1,
            'post_type' => 'product'
          ];
          $product_number = 0;
          $products = get_posts($products_args);
          if($products):
            foreach($products as $post): setup_postdata($post); 
              $product_number++;
              if(get_post_meta(get_the_ID(), 'product_orientation', true) === 'right'):?>
                <div class="product">
                  <div class="product-description">
                    <div class="product-description__heading"><?php echo get_post_meta(get_the_ID(), 'product_title', true); ?></div>
                    <div class="product-description__text"><?php echo get_post_meta(get_the_ID(), 'product_text', true); ?>
                    </div>
                    <div class="product-description__button"><?php echo get_post_meta(get_the_ID(), 'product_button_text', true); ?><img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-right--yellow.png"/></div>
                  </div>
                  <div class="product-img">
                    <?php 
                    $img_meta = get_field('product_pic'); ?>

                    <img src="<?php echo $img_meta['url'] ?>" alt="<?php echo $img_meta['alt']; ?>" width="<?php echo $img_meta['sizes']['product-picture-width']; ?>" height="<?php echo $img_meta['sizes']['product-picture-height']; ?>"/>

                  </div>
                  <div class="product-number">
                    <?php echo $product_number < 10 ? '0' . $product_number : $product_number; ?><span class="product-number__dot">.</span>
                  </div>
                </div>
          <?php 
              elseif(get_post_meta(get_the_ID(), 'product_orientation', true) === 'left'): ?>
                <div class="product">
                  <?php $img_meta = get_field('product_pic'); ?>
                  <div class="product-img">

                    <img src="<?php echo $img_meta['url'] ?>" alt="<?php echo $img_meta['alt']; ?>" width="<?php echo $img_meta['sizes']['product-picture-width']; ?>" height="<?php echo $img_meta['sizes']['product-picture-height']; ?>"/>
                  
                  </div>
                  <div class="product-description product-description--right">
                    <div class="product-description__heading product-description__heading--right"><?php echo get_post_meta(get_the_ID(), 'product_title', true); ?></div>
                    <div class="product-description__text product-description__text--right product-description__text--right"><?php echo get_post_meta(get_the_ID(), 'product_text', true); ?></div>
                    <div class="product-description__button product-description__button--right"><?php echo get_post_meta(get_the_ID(), 'product_button_text', true); ?><img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-right--yellow.png"/></div>
                  </div>
                  <div class="product-number product-number--two"><?php echo $product_number < 10 ? '0' . $product_number : $product_number; ?><span class="product-number__dot">.</span></div>
                </div>
          <?php endif;
            endforeach;
            wp_reset_postdata();
          endif;
        ?>
      </div>
    </section>
    <section id="sectionAdvantages">
      <div class="container">
        <div class="quality">
          <h2 class="quality__heading"><?php echo esc_html__(fw_get_db_customizer_option('advantages_title')); ?></h2>
          <p class="quality__text"><?php echo esc_html__(fw_get_db_customizer_option('advantages_subtitle')); ?></p>
        </div>
        <div class="advantages">
          <?php 
            $advantages = array(
              fw_get_db_customizer_option('advantage_one'),
              fw_get_db_customizer_option('advantage_two'),
              fw_get_db_customizer_option('advantage_three')
            );
            if($advantages):
              foreach($advantages as $advantage): ?>  
                <div class="advantage">
                  <div class="advantage__gif"><img src="<?php echo $advantage['img']['url'] ?>" alt="<?php echo $advantage['name']; ?>"/></div>
                  <div class="advantage__title"><?php echo $advantage['name']; ?></div>
                </div>
              <?php
              endforeach;
            else: ?>
              <div class="advantage">
                <div class="advantage__gif"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/advantage-1.png" alt="advantage"/></div>
                <div class="advantage__title">Innovative Design</div>
              </div>
              <div class="advantage">
                <div class="advantage__gif"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/advantage-2.png" alt="advantage"/></div>
                <div class="advantage__title">High-level Skills</div>
              </div>
              <div class="advantage">
                <div class="advantage__gif"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/advantage-3.png" alt="advantage"/></div>
                <div class="advantage__title">Quality Products</div>
              </div>
          <?php 
            endif; ?>
        </div>
      </div>
    </section>
    <section id="sectionDesign">
      <div class="design-wrapper" style="background-image: url(<?php echo fw_get_db_customizer_option('design_bg') ? fw_get_db_customizer_option('design_bg') : get_template_directory_uri() . '/assets/img/design-bg.png'; ?>);">
        <div class="design">
          <div class="container">
            <h4 class="design__title"><?php echo esc_html__(fw_get_db_customizer_option('design_title')); ?></h4>
            <p class="design__text"><?php echo esc_html__(fw_get_db_customizer_option('design_text')); ?></p>
            <button class="design__button"><?php echo esc_html__(fw_get_db_customizer_option('design_button_text')); ?></button>
          </div>
        </div>
      </div>
    </section>
    <section id="sectionAbout">
      <div class="container">
        <div class="about">
          <div class="about-img"><img src="<?php echo fw_get_db_customizer_option('about_img') ? fw_get_db_customizer_option('about_img') : get_template_directory_uri(); ?>/assets/img/about-us.png" alt="team"/></div>
          <div class="about-content">
            <h4 class="about-content__title"><?php echo esc_html__(fw_get_db_customizer_option('about_title')); ?></h4>
            <p class="about-content__text"><?php echo esc_html__(fw_get_db_customizer_option('about_text')); ?></p>
            <button class="about-content__button"><?php echo esc_html__(fw_get_db_customizer_option('about_button_text')); ?><img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-right--yellow.png"/></button>
          </div>
        </div>
      </div>
    </section>
<?php get_footer(); ?>