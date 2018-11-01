<!-- Teams 4 -->

<?php 


$post = get_post(67);



 ?>
    <section class="fdb-block team-4">
      <div class="container">
        <div class="row text-center justify-content-center">
          <div class="col-8">
            <h1><?php echo $post->post_title; ?></h1>
            <h3><?php echo $post->post_content; ?></h3>
          </div>
        </div>
    
        <div class="row text-center">

             <?php 

            // The Query
            $args = array('post_type'=>'quad');
              $the_query = new WP_Query( $args );

              // The Loop
                // global $active;
                // $active = 'active';

                while ( $the_query->have_posts() ) {
                  $the_query->the_post();
                  get_template_part('content','quad');
                  // $active ='';
                
                }
               
                /* Restore original Post Data */
                wp_reset_postdata();


             
             ?>


          
    
          
        </div>
      </div>
    </section>