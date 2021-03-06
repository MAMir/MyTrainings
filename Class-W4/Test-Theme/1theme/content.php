<div id="preloader-container">
<div id="container">
  
<?php

  $args = array(
    'post_type' => 'post',
    'category_name' => 'تست',
    'orderby' => 'title',
    'order' => 'ASC',
  );

  $class_name = "portfolio";

  $query = new WP_Query($args);

  //$categories = get_categories( $args );
  //print_r($categories);

  while($query->have_posts()){
  $query->the_post();

  $categories = get_the_category();
  foreach($categories as $category) {
    $class_name  .= " " . $category->slug;
  }
?>
  <div class="widget <?php echo $class_name ?> web homepage">
    <div class="entry-container span4">
    
      <!-- Portfolio Image -->
      <?php if(has_post_thumbnail()){ ?>
      <div class="entry-image">
        <a href="<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>" class="fancybox">
          <span class="entry-image-overlay"></span>
          <?php the_post_thumbnail('medium'); ?>
        </a>
      </div>
      <?php 
        }
        else{
          ?>
            <div class="entry-image">
              <a href="images/noimage.png" class="fancybox">
                <span class="entry-image-overlay"></span>
                <img src="images/noimage.png" alt="">
              </a>
            </div>
      <?php 
        }
      ?>

      <div class="entry drop-shadow curved ">

        <!-- Portfolio Heading -->
        <h5 class="heading">
          <a href="portfolio-single.html">
            <?php the_title(); ?>
          </a>
        </h5>
        <div class="entry-footer">
          <ul>
            <li class="left">گرافیک</li>
            <li class="right no-margin"><div class="icon like"></div> 3</li>
          </ul>
        </div>

        <p><?php the_excerpt(); ?></p><br />
        
        <p>
        نوشته شده توسط: <?php the_author(); ?><br />
          <?php the_category(); ?><br />
          <?php the_tags(); ?><br />
        </p>
        <div class="stripes"></div>
      </div>      
    </div>
  </div>

<?php 
  } 
?>
</div>
</div>
