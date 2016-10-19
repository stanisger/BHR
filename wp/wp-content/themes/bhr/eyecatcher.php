

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <?php if( have_rows('slide') ): ?>
      <?php while( have_rows('slide') ): the_row(); 
      // vars head
        $title = get_sub_field('title');
        $imagen = get_sub_field('imagen');
        $subtitle = get_sub_field('subtitle');
        $extract = get_sub_field('extract');
        $link = get_sub_field('link');
        ?>
        <div class="item active" style="background: url(<?php echo $imagen; ?>) center;" >
          <div class="carousel-caption">
            <h1 class="animated  fadeInUp"><?php echo $title; ?></h1>
            <h3 class="animated  fadeInUp"><?php echo $subtitle; ?></h3>
            <hr class="animated  fadeInUp">
            <h5 class="animated  fadeInUp"><?php echo $extract; ?></h5>

            <button class="btn-blue animated  fadeInUp" id="ref" onclick="window.location.href=' <?php echo $link; ?>'">CONOCE MÁS</button>
            <i class="fa fa-arrow-circle-down animated  fadeInUp" aria-hidden="true"></i>
          </div>
        </div>
      <?php endwhile; ?>
      <?php endif; ?> 
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
    </a>

</div>