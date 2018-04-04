<div class="main-carousel">
  <div class="carousel-cell">slide 1</div>
  <div class="carousel-cell">slide 2</div>
  <div class="carousel-cell">slide 3</div>

  <?php

    $images = get_field('gallery');
    $size = 'full'; // (thumbnail, medium, large, full or custom size)

    if( $images ): ?>
        <ul>
            <?php foreach( $images as $image ): ?>
                <li>
                	<?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>


</div>
