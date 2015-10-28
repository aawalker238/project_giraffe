<?php $this->load->view('partials/customers') ?>
<style>
  
body {
    /*background-image: url("assets/pics/motorcycle04.jpg");*/
    background-color: black;
    color: #fff;
}

img{
  border: 3px solid #fff;
  opacity: 0.7;
  -webkit-transition: -webkit-transform .15s linear;
  -webkit-box-shadow: 0 3px 6px rgba(0,0,0,.25);
  -moz-box-shadow: 0 3px 6px rgba(0,0,0,.25);
}


img:hover{
  border: 3px solid #fff;
  opacity: 1;
  -webkit-transform: scale(1.25);
  -moz-transform: scale(1.25);
  position: relative;
  z-index: 5;
}

#intro { 
    background: url(assets/pics/helmet01.jpg) 50% 0 fixed; 
    height: auto;  
    margin: 0 auto; 
    width: 100%; 
    position: relative; 
    box-shadow: 0 0 50px rgba(0,0,0,0.8);
    padding: 100px 0;
}
#home { 
    background: url(assets/pics/motorcycle04.jpg) 50% 0 fixed; 
    height: auto;  
    margin: 0 auto; 
    width: 100%; 
    position: relative; 
    box-shadow: 0 0 50px rgba(0,0,0,0.8);
    padding: 200px 0;
}
#about { 
    background: url(assets/pics/helmet01.jpg) 50% 0 fixed; 
    height: auto;
    margin: 0 auto; 
    width: 100%; 
    position: relative; 
    box-shadow: 0 0 50px rgba(0,0,0,0.8);
    padding: 100px 0;
    color: #fff;
}
.quote p {
  font-size: 2em;
  width: auto;
  background: black 0.5;
}

.quote {
  background: black;
  opacity: 0.7;
}
</style>
<script type="text/javascript">
$(document).ready(function(){
   // cache the window object
   $window = $(window);
 
   $('section[data-type="background"]').each(function(){
     // declare the variable to affect the defined data-type
     var $scroll = $(this);
                     
      $(window).scroll(function() {
        // HTML5 proves useful for helping with creating JS functions!
        // also, negative value because we're scrolling upwards                             
        var yPos = -($window.scrollTop() / $scroll.data('speed')); 
         
        // background position
        var coords = '50% '+ yPos + 'px';
 
        // move the background
        $scroll.css({ backgroundPosition: coords });    
      }); // end window scroll
   });  // end section function
}); // close out script
</script>
<body>

  <!-- Section 1 -->
  <section id="intro" data-speed="6" data-type="background">
    <div class="row">
      <div class="container col-md-2">
           <div class="btn-group-vertical">
              <h5><b>View by Category:</b></h5>
              <a href="/mains/productsInCategory" class="btn btn-primary" role="button">Sport</a>
              <a href="/mains/productsInCategory" class="btn btn-primary" role="button">Dirt Bike</a>
              <a href="/mains/productsInCategory" class="btn btn-primary" role="button">Cross Country</a>
              <a href="/mains/productsInCategory" class="btn btn-primary" role="button">Electric</a>
              <a href="/mains/productsInCategory" class="btn btn-primary" role="button">Cruiser</a>
           </div>  
      </div>
      <div class="quote col-md-9">
          <p><i class="fa fa-quote-left fa-3x"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br> tempor incididunt ut labore et dolore magna aliqua. Ut enim ad<i class="fa fa-quote-right fa-3x"></i></p>
      </div>
    </div>
  </section>
  <!-- Section 2 -->
  <section id="home" data-speed="4" data-type="background">
  
            <h2>All Products</h2> 
            <?php foreach($products as $product){ ?>
              <?= $product['name'] ?>
              <a href="/mains/oneProduct/<?= $product['id']?>"><img width="200px" height="200px" src="/assets/pics/img (<?=$product['id']?>).jpg" data-toggle="tooltip" title="View"></a>
            <?php } ?>
      
  </section>
  <!-- Section 3 -->
  <section id="about" data-speed="2" data-type="background">
      <div class="container">
          
      </div>
  </section>
</body>
</html>