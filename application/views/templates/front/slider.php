</div>
<header>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        
        
        <div class="carousel-inner" role="listbox">

            <?php foreach($sliders as $slider): ?>
                <?php   if($slider['active']): ?>
                  <!-- Slide One - Set the background image for this slide in the line below -->
                  <div class="carousel-item active" style="background-image: url(<?php echo site_url(); ?>assets/images/slider/<?php echo $slider['slider_image']; ?>)" >
                    <div class="carousel-caption d-none d-md-block">
                      <h3><?php echo $slider['heading']; ?></h3>
                      <p><?php echo $slider['caption']; ?></p>
                    </div>
                  </div>
                  <?php else: ?>
                  <div class="carousel-item " style="background-image: url(<?php echo site_url(); ?>assets/images/slider/<?php echo $slider['slider_image']; ?>)">
                    <div class="carousel-caption d-none d-md-block">
                      <h3><?php echo $slider['heading']; ?></h3>
                      <p><?php echo $slider['caption']; ?></p>
                    </div>
                  </div>
                  <?php endif; ?>
            <?php endforeach; ?>
      
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </header>
      <!-- Page Content -->
      <div class="container">
