<?php
    /* Template Name: Шаблон страницы */
    /* Template Post Type: post, page, event */
?>
<?php get_header()?>

<section class="content">
    <div class="grid post">
        <div class="unit whole">
                <h2><?php wp_title("", true); ?></h2>
                <?php the_content(); ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>