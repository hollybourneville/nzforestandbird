<?php get_header(); ?>
    

<header>
      <div class="container">
        <nav class="navbar navbar-expand-md">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav0" aria-controls="navbarNav0" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          <div class="collapse navbar-collapse" id="navbarNav0">
            <ul class="navbar-nav mr-auto ml-auto">
            	<?php 

              //get the terms, make sure right dimension name is below
              $terms = get_terms('type',array('hide_empty'=>false));

            //loop through the terms and make a link for each term
              foreach($terms as $term){
                echo '<a class="nav-link" data-filter=".'.$term->slug.'">'.$term->name.'</a>';
              }

             ?>
             <!--  <li class="nav-item active">
                <a class="nav-link" href="https://www.froala.com">Auckland Offices<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://www.froala.com">South Island</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://www.froala.com">Northland</a>
              </li> -->
            </ul>
          </div>
        </nav>
      </div>
    </header>
    <!-- Feature 2 -->
    <section class="fdb-block">
      <div class="container">



    <?php 
          if ( have_posts() ) {
            while ( have_posts() ) {
              the_post(); 
              //
              get_template_part('content','contact-page');
              //
            } // end while
          } // end if
      ?>


        
        <div id="contacts" class="row text-left justify-content-sm-center fadeInUpQuick" data-wow-delay="0.8s">


             <?php 

            // The Query
            $args = array('post_type'=>'contact');
              $the_query = new WP_Query( $args );

              // The Loop
                // global $active;
                // $active = 'active';

                while ( $the_query->have_posts() ) {
                  $the_query->the_post();
                  get_template_part('content','contact');
                  // $active ='';
                
                }
               
                /* Restore original Post Data */
                wp_reset_postdata();


             
             ?>

        </div>
    
<!--         <div class="row text-left justify-content-sm-center pt-3 pt-lg-5">
          <div class="col-12 col-sm-6 col-lg-3 col-xl-2 ml-xl-auto mr-xl-auto">
            <h3><strong>Feature 5</strong></h3>
            <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
          </div>
          <div class="col-12 col-sm-6 col-lg-3 col-xl-2 ml-xl-auto mr-xl-auto pt-3 pt-md-0 pt-lg-0">
            <h3><strong>Feature 6</strong></h3>
            <p>Separated they live in Bookmarksgrove right at the coast of the.</p>
          </div>
          <div class="col-12 col-sm-6 col-lg-3 col-xl-2 ml-xl-auto mr-xl-auto pt-3 pt-lg-0">
            <h3><strong>Feature 7</strong></h3>
            <p>A small river named Duden flows by their place and supplies it with.</p>
          </div>
    
          <div class="col-12 col-sm-6 col-lg-3 col-xl-2 ml-xl-auto mr-xl-auto pt-3 pt-lg-0">
            <h3><strong>Feature 8</strong></h3>
            <p>But nothing the copy said could convince her and so it didn’t take long</p>
          </div>
        </div> -->
      </div>
    </section>
    <!-- Contacts 2 -->
    <section class="fdb-block bg-dark" style="background-image: url(imgs/bg_0.svg)">
      <div class="container">
        <div class="row text-center justify-content-center">
          <div class="col-12 col-md-8 col-lg-7">
            <h1>Contact Us</h1>
            <h2>We love to hear from you!</h2>
          </div>
        </div>
    
        <div class="row pt-4">
          <div class="col-12">
            <form>
              <div class="row">
                <div class="col-12 col-md">
                  <input type="text" class="form-control" placeholder="Name">
                </div>
                <div class="col-12 col-md mt-4 mt-md-0">
                  <input type="text" class="form-control" placeholder="Email">
                </div>
                <div class="col-12 col-md mt-4 mt-md-0">
                  <input type="text" class="form-control" placeholder="Phone (optional)">
                </div>
              </div>
    
              <div class="row mt-4">
                <div class="col">
                  <input type="email" class="form-control" placeholder="Subject">
                </div>
              </div>
    
              <div class="row mt-4">
                <div class="col">
                  <textarea class="form-control" name="message" rows="3" placeholder="How can we help?"></textarea>
                </div>
              </div>
              <div class="row mt-4">
                <div class="col text-center">
                  <button type="submit" class="btn">Submit</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
 



<?php get_footer(); ?>