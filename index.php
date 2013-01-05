<?php get_header(); ?>
      <section class="work">
         <div class="wrapper">
            <header class="page-tag-blue grey-double-border">
              
              <h3 class="blue"><?php printf( __( '%s', 'bnb' ), single_cat_title( '', false ) ); ?></h3>
            </header><!-- /.page-tag-wrap -->
            <?php while(have_posts()) : the_post(); ?>
            <article class="content post">
              <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
              <?php the_content(); ?>
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