<article class="my-4">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6 <?php echo $index % 2 === 0 ? 'order-12' : ''; ?>">
        <img class="img-card" src="<?php echo get_the_post_thumbnail_url(); ?>" />
      </div>
      <div class="col-lg-6">
        <date
          class="font-size-14 light-green-color-bg green-color font-jost px-2 py-1 font-weight-bold mb-1 d-inline-block">
          <?php echo get_the_date( 'd-m-Y' ); ?></date>
        <a class="text-decoration-none black-color" href="<?php echo get_permalink(); ?>">
          <h3 class="font-archivo font-weight-bold font-size-30"><?php the_title(); ?></h3>
        </a>
        <?php
          global $post;
          $categories = get_the_category($post->ID);

          if($categories) : foreach($categories as $elem) :
        ?>
          <span class="border border-secondary badge px-2 py-1 font-size-12 font-jost ">
            <?php echo $elem->name; ?>
          </span>
        <?php endforeach; endif; ?>
        <p tabindex="0" class="font-jost gray-color-2 font-size-16 my-3"><?php echo get_the_excerpt(); ?></p>
      </div>
    </div>
  </div>
</article>
