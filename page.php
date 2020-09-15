<?php
    /* Template Name: Шаблон страницы */
    /* Template Post Type: post, page, event */
?>
<?php get_header()?>

<section class="content">
    <div class="grid post">
        <div class="unit whole">
                <?php the_content() ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
</body>
</html>