<?php /* Template Name: Search Page */ ?>

<?php get_header(); ?>

<div class="container">
  <div class="row">
    <div class="twelve columns">
      <?php if(have_posts){ ?>
            <h2><?php printf(__('Search results for : %s'), '<span>' . get_search_query() . '</span>'); ?></h2>
            <?php while(have_posts()){
              the_post();?>
              <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
              <p><?php the_excerpt(); ?></p><?php
            }
          }else{?>
            <h2>Nothing was found. Please try again!</h2>
            <a href="/news/"><p>Click here to go back to the news page.</p></a>
          <?php }
      ?>
    </div>
  </div>

</div>
<?php get_footer(); ?>
