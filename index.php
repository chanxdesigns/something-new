<?php get_header(); ?>

<header>

</header>
<div class="container fluid">
    <div class="recent-posts">
        <?php if (have_posts()) : ?>
            <h3></h3>
            <?php while (have_posts()) : the_post() ?>

            <?php endwhile; ?>
        <?php endif; ?>
    </>
</div>
</body>
</html>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
