<?php

/*
Template Name: Special Layout
 */

get_header();
?>

<div id="main-page">

<?php

if (have_posts()) :
    while (have_posts()) : the_post(); ?>

    <article class="post page">
        <h2><?php the_title(); ?></h2>
        <div class="info-box pull-md-right">
            <h4>Disclaimer Title</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit architecto blanditiis ipsam nihil minus officiis dolore ipsum, accusamus odit earum vero praesentium expedita cupiditate doloremque aperiam illum sapiente! Officiis, esse.</p>
        </div>
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