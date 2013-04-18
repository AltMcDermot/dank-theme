<?php get_header(); ?>
    <div id="wrap"> 
            <?php while ( have_posts() ) : the_post(); ?>
        <div class="content-single">
        
            <div id="left">
                <div class="meta">
                    <p>
                        <h2 class="post-title">
                        <?php the_title(); ?>
                        </h2>
                        <span class="post-date"><?php the_time('F jS, Y') ?> <!-- by <?php the_author() ?> --></span><br>
                        <?php  edit_post_link();?><br>
                        <span class="categories"><?php _e("Filed in", "tmelt");?> <?php the_category(', '); ?></span><br>
                        <span class="tags"><?php the_tags(__('Tagged with ', 'tmelt'),', ','<br>'); ?></span>
                        <span class="comments"><?php comments_popup_link(__('<span>no fools blabbin</span>',
                        'tmelt'), __('1 <span>comment</span>', 'tmelt'), __('% <span>comments</span>', 'tmelt'),'', ''); ?></span>
                    </p>
                </div>
                 <!--  -->
            </div>  
            
            <article class="entry">

                <?php  the_content(); ?>
            </article> 
            <div class="comment-single"><div class="commentlist">
            <?php comments_template(); ?> 
            </div></div>
        </div>
        <?php endwhile; ?>
        
    </div>
<?php get_footer(); ?>