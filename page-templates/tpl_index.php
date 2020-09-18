<?php
    /* Template Name: Main Page */
    /* Template Post Type: post, page, event */
?>
<?php get_header(); ?>

<section class="content">
    <div id="home" class="grid post">
        <div class="unit whole">
        <ul>
        <?php
            $the_query = new WP_Query( 'posts_per_page=5' );
            while ($the_query -> have_posts()) : $the_query -> the_post();
        ?>
            <li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
            <li><?php the_excerpt(__('(more…)')); ?></li>
        <?php
            endwhile;
            wp_reset_postdata();
        ?>
        </ul>
        </div>
    </div>
</section>

<?php get_footer( ); ?>