<?php get_header(); ?>
      <section class="work">
         <div class="wrapper">
            <header class="page-tag-blue grey-double-border">
              <h3 class="blue"><?php
							if ( is_day() ) :
								printf( __( 'Daily Archives: %s', 'toolbox' ), '<span>' . get_the_date() . '</span>' );
							elseif ( is_month() ) :
								printf( __( 'Monthly Archives: %s', 'toolbox' ), '<span>' . get_the_date( 'F Y' ) . '</span>' );
							elseif ( is_year() ) :
								printf( __( 'Yearly Archives: %s', 'toolbox' ), '<span>' . get_the_date( 'Y' ) . '</span>' );
							else :
								_e( 'Archives', 'toolbox' );
							endif;
						?></h3>
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