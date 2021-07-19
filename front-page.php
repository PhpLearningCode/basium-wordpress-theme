<?php get_header();?>

<div id="carouselExampleIndicators" class="carousel carousel-dark slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/car1.png" class="d-block w-100" alt="promo1">
    </div>
    <div class="carousel-item">
      <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/car2.png" class="d-block w-100" alt="promo2">
    </div>
    <div class="carousel-item">
      <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/car3.png" class="d-block w-100" alt="promo3">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div class="top-categories">
  <p>Categorias Principais</p>
  <?php 
    $categories = get_categories( array('taxonomy' => 'product_cat', 'title_li'  => '') ); 
    foreach($categories as $cat) {
      echo '<button class="cat-btn"><a href="' . get_term_link($cat->slug, 'product_cat') .'">' . $cat->name . '</button>';
    }
  ?> 
</div>

<a href="#">
  <div class="separator">
    <div class="left-line"></div>DESTAQUES<div class="right-line"></div>
  </div>
</a>

<div class="products"> 
  <?php  
      $args = array(
          'post_type'      => 'product',
          'posts_per_page' => 10,
      );

      $loop = new WP_Query( $args );

      while ( $loop->have_posts() ) : $loop->the_post();
          global $product;
          echo '<a href="'.get_permalink().'">' . woocommerce_get_product_thumbnail().'</br> '.get_the_title();
          echo '<p>R$' . wc_get_product()->get_price() . '</p></a>';
      endwhile;

      wp_reset_query();
  ?>
</div>

<?php get_footer();?>