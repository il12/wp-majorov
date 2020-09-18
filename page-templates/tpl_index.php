<?php
    /* Template Name: Main Page */
    /* Template Post Type: post, page, event */
?>
<?php get_header(); ?>

<section class="content">
    <div id="home" class="grid post">
        <div class="unit whole">
        <ul class='grid'>
        <?php
            $the_query = new WP_Query( 'posts_per_page=5' );
            while ($the_query -> have_posts()) : $the_query -> the_post();
        ?>
            <li class='unit'>
                <div><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></div>
                <hr>
                <div><?php the_excerpt(__('(more…)')); ?></div>
            </li>
        <?php
            endwhile;
            wp_reset_postdata();
        ?>
        </ul>
        </div>
    </div>
</section>

<?php get_footer( ); ?>