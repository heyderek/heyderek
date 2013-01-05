<?php get_header(); ?>
      <section class="work">
         <div class="wrapper">
            <header class="page-tag-blue grey-double-border">
              <h3 class="blue"><?php printf( __( '%s', 'bnb' ), single_cat_title( '', false ) ); ?></h3>
            </header><!-- /.page-tag-wrap -->
            <section class="bloginfo">
              <div class="avatar-frame"><?php echo get_avatar( 'heyderek@dereknelson.net', 300); ?></div><!--/.avatar-frame -->
              <?php $category_description = category_description(); 
              if ( ! empty( $category_description ) )
              echo apply_filters( 'category_archive_meta', '<blockquote class="content speech">' . $category_description . '</blockquote>' ); ?>
            </section>
            <?php while(have_posts()) : the_post(); ?>
            <article class="content post">
              <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
              <h4><?php the_date('F Y'); ?></h4>
              <?php the_excerpt(); ?>
              <div class="tags"><?php the_tags('Tagged: ', ''); ?></div><!--/.tags-->
            </article>
            <?php endwhile; ?>
            <footer class="panel-nav grey-double-border">
              <div class="ns-button-wrap-blue">
                <button class="tothetop"><span>To The Top!</span></button>
              </div><!-- /.ns-button-wrap -->
            </footer><!-- /.panel-nav -->
        </div><!-- /.wrapper -->
      </section><!-- /.work -->
<?php get_footer(); ?>