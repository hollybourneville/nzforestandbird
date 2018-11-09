<?php get_header(); ?>
    
 <div class="page-header-title">
        <h1 class="heading-title text-center"><?php the_title(); ?></h1>
      </div>
      <div class="row">
        <div class="col-3">
          <img src="<?php the_field('image')?>" alt="">
        </div>
        <div class="col-9">
          <div><?php the_content(); ?></div>
          <div><?php the_field('position'); ?></div>

        </div>
      </div>

      <div class="page-header-title">
        <h1 class="heading-title text-center">Contacts</h1>
      </div>
      <div class="row">
        <?php 

          $contactIds = get_field('contact', false, false);

          $arg = array(
          'post_type'       => 'contact',
          'post__in'      => $contactIds,

        );

        $the_query = new WP_Query($arg);

        // The Loop
                
                while ( $the_query->have_posts() ) {
                  $the_query->the_post();
                  get_template_part('content','staff-contact');
                  // $active ='';
                
                }
               
                /* Restore original Post Data */
                wp_reset_postdata();



         ?>
      </div>

<?php get_footer(); ?>