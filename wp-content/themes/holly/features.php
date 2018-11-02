<!-- Feature 4 -->
    <section class="fdb-block bg-dark" style="background-image: url(<?php echo get_bloginfo('template_directory');?>/dist/imgs/fish.jpg)">
      <div class="container">
        <div class="row">
          <div class="col text-center">
            <h1></h1>
          </div>
        </div>
    
        <div class="row-70"></div>
    
        <div class="row text-center justify-content-sm-center no-gutters">
          

              <?php 
              //The Query
          //orderby order - first is the custom field order - can also be title and then it will be alphabetical, then the wordpress order of desc which is descending, the menu order below is from a plugin
              $args = array('post_type'=>'feature');
              $the_query = new WP_Query( $args );

              // The Loop
                // global $active;
                // $active = 'active';
                
                while ( $the_query->have_posts() ) {
                  $the_query->the_post();
                  get_template_part('content','feature');
                  // $active ='';
                
                }
               
                /* Restore original Post Data */
                wp_reset_postdata();

           ?>



              
        </div>
      </div>
    </section>