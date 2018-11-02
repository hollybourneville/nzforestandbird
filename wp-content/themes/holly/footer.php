    <!-- Footers 9 -->
    <footer class="fdb-block footer-large">
      <div class="container">
        <div class="row align-items-top text-center">
          <div class="col-12 col-sm-6 col-md-4 col-lg-3 text-sm-left">
            <h3><strong>FIND</strong></h3>
            <nav class="nav flex-column">
              <a class="nav-link active" href="https://www.froala.com">Home</a>
              <a class="nav-link" href="https://www.froala.com">About</a>
              <a class="nav-link" href="https://www.froala.com">Contact Us</a>
              <a class="nav-link" href="https://www.froala.com">Volunteer</a>
              <!-- <a class="nav-link" href="https://www.froala.com">Contact Us</a> -->
            </nav>
          </div>
    
          <div class="col-12 col-sm-6 col-md-4 col-lg-3 mt-5 mt-sm-0 text-sm-left">
            <h3><strong>SUPPORT US</strong></h3>
            <nav class="nav flex-column">
              <a class="nav-link active" href="https://www.froala.com">Donate</a>
              <a class="nav-link" href="https://www.froala.com">Become a Member</a>
              <a class="nav-link" href="https://www.froala.com">Become a Sponsor</a>
              <a class="nav-link" href="https://www.froala.com">Appeals</a>
            </nav>
          </div>
    
          <div class="col-12 col-md-4 col-lg-3 text-md-left mt-5 mt-md-0">
            <h3><strong>OUR COMMUNITY</strong></h3>
            <nav class="nav flex-column">
              <a class="nav-link active" href="https://www.froala.com">Branches</a>
              <a class="nav-link" href="https://www.froala.com">Projects</a>
              <a class="nav-link" href="https://www.froala.com">Events</a>
              <a class="nav-link" href="https://www.froala.com">Lodges</a>
              <!-- <a class="nav-link" href="https://www.froala.com">Contact Us</a> -->
            </nav>
            
          </div>
    
          <div class="col-12 col-lg-2 ml-auto text-lg-left mt-4 mt-lg-0">
            <h3><strong>QUICK LINKS</strong></h3>
            <nav class="nav flex-column">
              <a class="nav-link active" href="https://www.froala.com">KCC</a>
              <a class="nav-link" href="https://www.froala.com">Shop</a>
              <a class="nav-link" href="https://www.froala.com">Blog</a>
              <!-- <a class="nav-link" href="https://www.froala.com">Volunteer</a> -->
              <!-- <a class="nav-link" href="https://www.froala.com">Contact Us</a> -->
            </nav>
          </div>
        </div>
    
        <div class="row mt-3">
          <div class="col text-center">
            © 2018 Holly Bourneville Design. All Rights Reserved
          </div>
        </div>
      </div>
    </footer>
      <script>
    var get = function(url, callback) {
      var xhr = new XMLHttpRequest();

      xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
          var txt = xhr.responseText;
          txt = txt.split('<body>')[1].split('</body>')[0];
          callback(txt);
        }
      }

      xhr.open("GET", url, false);
      xhr.send();
    }

    var chooseBlock = function(e) {
      e.preventDefault();

      get(this.href, function(resp) {
        document.querySelector('#playground').innerHTML = resp;
      })
    }

    var els = document.querySelectorAll('#navigator a');

    for (var i = 0; i < els.length; i++) {
      var el = els[i];

      el.addEventListener('click', chooseBlock);
    }

  </script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="<?php echo get_bloginfo('template_directory');?>/js/jquery.mixitup.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
   <script>
    $(document).ready(function() {
      //MixitUp
      $(function() {

        // on a links with the data-filter - on click function event
        $('a[data-filter]').on('click',function(e){

          //dont want it to jump
          e.preventDefault();
          var filter = $(this).data('filter');
          //div directly inside the contacts to fade out
          $('#contacts>div').hide();
          //contacts with the correct filter fade in
          $('#contacts>'+filter).show();
        });
        
      });

    });
  </script>
  <?php wp_footer(); ?>
  </body>
</html> 