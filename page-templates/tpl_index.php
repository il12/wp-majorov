<?php
    /* Template Name: Main Page */
    /* Template Post Type: post, page, event */
?>
<?php get_header(); ?>

<section class="content">
    <div id="home" class="grid post">
        <div class="unit whole">
        <div class='post-preview-container'>
        <?php
            $the_query = new WP_Query( 'posts_per_page=3' );
            while ($the_query -> have_posts()) : $the_query -> the_post();
        ?>
            <div class='post-preview'>
                <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
                <div><?php the_excerpt(__('(more…)')); ?></div>
            </div>
        <?php
            endwhile;
            wp_reset_postdata();
        ?>
        </div>
        </div>
    </div>
</section>

<?php get_footer( ); ?>