<?php get_header(); ?>
    


   

      <section class="fdb-block team-4">
      <div class="container">
        <div class="row text-center justify-content-center">
          <div class="col-8">
            <h1>Team</h1>
          </div>
        </div>

        
    
        <div class="row text-center">
         
          

            <?php 
              //The Query
          //orderby order - first is the custom field order - can also be title and then it will be alphabetical, then the wordpress order of desc which is descending, the menu order below is from a plugin
              $args = array('post_type'=>'staff');
              $the_query = new WP_Query( $args );

              

              // The Loop
                // global $active;
                // $active = 'active';
                
                while ( $the_query->have_posts() ) {
                  $the_query->the_post();
                  get_template_part('content','staff');
                  // $active ='';
                
                }
               
                /* Restore original Post Data */
                wp_reset_postdata();

           ?>
          
    
          
        </div>
      </div>
    </section>

 

 
<?php get_footer(); ?>


