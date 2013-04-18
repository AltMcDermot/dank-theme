<?php get_header(); ?>
    <div id="wrap">
        <div class="content-home">
            <?php while ( have_posts() ) : the_post(); ?>
                    <article class="posts">
                            <a href="<?php the_permalink() ?>" rel="bookmark" title="Read <?php the_title_attribute(); ?>">
                        <?php if ( has_post_thumbnail() ) {
                        the_post_thumbnail();
                        } else { ?>
                        <img src="<?php bloginfo('template_directory'); ?>/img/default.png" alt="<?php the_title(); ?>" />
                        <?php } ?>
                        </a>    
                        <h2 class="post-title">
                        <a href="<?php the_permalink() ?>" rel="bookmark" title="Read <?php the_title_attribute(); ?>">
                        <?php the_title(); ?></a>
                        </h2>
                    </article>
                    <?php endwhile; ?>
            <article class="meta">
                <h2><?php bloginfo('name'); ?></h2>
                <?php dynamic_sidebar( 'aside' ); ?>
                <p>Twitter</p>
                <p>facebook</p>
                <p>tumblr</p>
                <p>soundcloud</p>
            </article>
            
            <section class="bottom-nav"><?php previous_posts_link('Older',''); ?><?php next_posts_link('Newer',''); ?></section>
        </div>
    </div>
<?php get_footer(); ?>

