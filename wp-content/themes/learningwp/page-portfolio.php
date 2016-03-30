<?php
get_header();
?>

<div id="main-page">

<?php

if (have_posts()) :
    while (have_posts()) : the_post(); ?>

    <article class="post page">
        <?php the_content(); ?>
    </article>

    <?php endwhile;

else :
    echo '<p>No content found</p>';

endif;

?>

</div> <!-- #main-page -->

<?php
get_footer();
?>