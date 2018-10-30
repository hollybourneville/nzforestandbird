<?php get_header(); ?>
    
    
   
    
<!-- Contents 3 -->
    <section class="fdb-block">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col col-md-8 text-center">
            <h1>Froala Design Blocks</h1>
            <p class="text-h3">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far <a href="https://www.froala.com">World of Grammar</a>.</p>
          </div>
        </div>
      </div>
    </section>
   

    <!-- Contents 34 -->
    <section class="fdb-block pb-0" style="background-image: url(https://picsum.photos/500/300);">
      <div class="container">
        <div class="row text-left justify-content-end">
          <div class="col-12 col-md-6 col-xl-4">
            <div class="fdb-box br-0">
              <h2><strong>Design Blocks</strong></h2>
              <p class="text-h3">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
    
              <p class="text-h3 mt-4"><a href="https://www.froala.com">Read More</a></p>
            </div>
          </div>
        </div>
      </div>
    </section>

 
    


    <!-- Footers 9 -->
    <footer class="fdb-block footer-large">
      <div class="container">
        <div class="row align-items-top text-center">
          <div class="col-12 col-sm-6 col-md-4 col-lg-3 text-sm-left">
            <h3><strong>Group 1</strong></h3>
            <nav class="nav flex-column">
              <a class="nav-link active" href="https://www.froala.com">Home</a>
              <a class="nav-link" href="https://www.froala.com">Features</a>
              <a class="nav-link" href="https://www.froala.com">Pricing</a>
              <a class="nav-link" href="https://www.froala.com">Team</a>
              <a class="nav-link" href="https://www.froala.com">Contact Us</a>
            </nav>
          </div>
    
          <div class="col-12 col-sm-6 col-md-4 col-lg-3 mt-5 mt-sm-0 text-sm-left">
            <h3><strong>Group 2</strong></h3>
            <nav class="nav flex-column">
              <a class="nav-link active" href="https://www.froala.com">Privacy Policy</a>
              <a class="nav-link" href="https://www.froala.com">Terms</a>
              <a class="nav-link" href="https://www.froala.com">FAQ</a>
              <a class="nav-link" href="https://www.froala.com">Support</a>
            </nav>
          </div>
    
          <div class="col-12 col-md-4 col-lg-3 text-md-left mt-5 mt-md-0">
            <h3><strong>About Us</strong></h3>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          </div>
    
          <div class="col-12 col-lg-2 ml-auto text-lg-left mt-4 mt-lg-0">
            <h3><strong>Follow Us</strong></h3>
            <p class="text-h3">
              <a href="https://www.froala.com"><i class="fab fa-twitter" aria-hidden="true"></i></a>&nbsp;&nbsp;
              <a href="https://www.froala.com"><i class="fab fa-facebook" aria-hidden="true"></i></a>&nbsp;&nbsp;
              <a href="https://www.froala.com"><i class="fab fa-instagram" aria-hidden="true"></i></a>&nbsp;&nbsp;
              <a href="https://www.froala.com"><i class="fab fa-pinterest" aria-hidden="true"></i></a>&nbsp;&nbsp;
              <a href="https://www.froala.com"><i class="fab fa-google" aria-hidden="true"></i></a>
            </p>
          </div>
        </div>
    
        <div class="row mt-3">
          <div class="col text-center">
            © 2017 Froala. All Rights Reserved
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

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html> 