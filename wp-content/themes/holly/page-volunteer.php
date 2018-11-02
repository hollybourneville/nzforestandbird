<?php get_header(); ?>

 <!-- Headers 3 -->
    <header>
      <div class="container">
        <nav class="navbar navbar-expand-md">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav0" aria-controls="navbarNav0" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          <div class="collapse navbar-collapse" id="navbarNav0">
            <ul class="navbar-nav mr-auto ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="https://www.froala.com">Auckland Offices<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://www.froala.com">South Island</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://www.froala.com">North Island</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </header>
    
   <!-- Feature 19 -->
    <section class="fdb-block">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 text-left">
            <h1>Volunteer Opportunities</h1>
            <p class="text-h3">An overview of all the volunteer opportunities Forest & Bird has on offer.</p>
          </div>
        </div>
    
        <div class="row text-left mt-5">
          <?php 

            // The Query
            $args = array('post_type'=>'volunteer');
              $the_query = new WP_Query( $args );

              // The Loop
                // global $active;
                // $active = 'active';

                while ( $the_query->have_posts() ) {
                  $the_query->the_post();
                  get_template_part('content','volunteer');
                  // $active ='';
                
                }
               
                /* Restore original Post Data */
                wp_reset_postdata();


             
             ?>
    
          
        </div>
      </div>
    </section>
   

<?php get_footer(); ?>

 
    


  