<?php get_header(); ?>
      <section class="work">
         <div class="wrapper">
            <div class="copy single">
            <?php while(have_posts()) : the_post(); ?>
            <article class="content">
              <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
              <h4><?php the_date('F Y'); ?></h4>
              <div class="textleft">
                <?php the_content(); ?>
              </div>
              <div class="tags"><?php the_tags('Tagged: ', ''); ?></div><!--/.tags-->
            </article>
            <?php endwhile; ?>
            </div>
            <footer class="panel-nav grey-double-border">
              <div class="ns-button-wrap-blue">
                <button class="tothetop"><span>To The Top!</span></button>
              </div><!-- /.ns-button-wrap -->
            </footer><!-- /.panel-nav -->
        </div><!-- /.wrapper -->
      </section><!-- /.work -->
<?php get_footer(); ?>