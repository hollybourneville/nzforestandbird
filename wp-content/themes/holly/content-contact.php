    <?php 


  $terms = get_the_terms(get_the_ID(),'type');

  //your tutor should write loops here
  $classes = '';
  foreach($terms as $term){

    $classes .= $term->slug .' ';
  }
  

  ?>      


    <div class="col-12 col-sm-6 col-lg-4 col-xl-4 ml-xl-auto mr-xl-auto <?php echo $classes; ?>">
      <h3><strong><?php the_field('branch_name'); ?></strong></h3>
      <p><?php the_field('address'); ?></p>
      <p><?php the_field('phone'); ?></p>
      <p><?php the_field('email'); ?></p>


    </div>