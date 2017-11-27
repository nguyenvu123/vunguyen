<?php
/*
    Template Name: Contact1234
*/
if(have_posts()) : while(have_posts()): the_post();

    the_content();
endwhile;
endif;