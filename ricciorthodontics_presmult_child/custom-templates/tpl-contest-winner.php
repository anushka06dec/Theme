<?php /* Template Name: Contest Winner */
get_header(); the_post(); ?> 
<div class="page-title" style="background:url(<?php the_field('banner_section_background'); ?>) no-repeat center 0;">
    <div class="container">
      <div class="page-title-head">
         <?php if(get_field('banner_section_title')){ ?>
        <h1><?php the_field('banner_section_title'); ?></h1>
		 <?php } ?>  
      </div>
      <div class="page-title-breadcrumbs">
        <ol class="breadcrumbs">
         <?php get_breadcrumb(); ?>
        </ol>
      </div>
    </div>
  </div>
  <!--close page-title-->
  
  
  <div id="content">
    <section class="page-sec">
      <div class="container">
          <div class="row">
              <?php the_field('content_section_text'); ?>
             <?php if(have_rows('content_section_block')): while(have_rows('content_section_block')): the_row(); ?> 
              <div class="col-sm-4">
               <?php the_sub_field('text'); ?>
             </div>
             <?php endwhile; endif; wp_reset_query(); ?> 
           
          </div>
          
      </div>
    </section>
    <!-- home-sec --> 
    
  </div>
  <!--content-->
<script async src="//www.instagram.com/embed.js"></script>
<?php get_footer(); ?>