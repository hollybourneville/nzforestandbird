<section class="fdb-block" style="background-image: url(<?php the_field('bgimage'); ?>);">
      <div class="container">
        <div class="row text-left">
          <div class="col-12 col-sm-10 m-auto m-md-0 col-md-8 col-lg-6">
            <div class="fdb-box">
              <div class="row justify-content-center">
                <div class="col-12 col-xl-8 text-center">
                  <h1><?php the_field('page_title'); ?></h1>
                  <div class="text-h3"><?php the_content() ?></div>
    
                  <p class="text-h3 mt-4"><a href="https://www.froala.com">Learn More &gt;</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <?php get_template_part('quad'); ?>

    <?php get_template_part('features'); ?>
    
    