<?php get_header(); ?>
      <section class="work">
         <div class="wrapper">
            <header class="page-tag-blue grey-double-border">
              <h3 class="blue"><?php printf( __( 'Tag Archives: %s', 'toolbox' ), '<span>' . single_tag_title( '', false ) . '</span>' ); ?></h3>
            </header><!-- /.page-tag-wrap -->
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