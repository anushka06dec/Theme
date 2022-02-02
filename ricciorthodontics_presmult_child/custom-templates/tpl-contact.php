<?php /* Template Name: contact */
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
            <div class="leftbar">
                <div class="info-text">
            	<?php the_field('section1_text'); ?>
                </div>
                
                <div class="info-text">
            	<?php $form=get_field('section2_form_code'); echo do_shortcode($form); ?>
                <div class="map-sec">
                <?php the_field('section2_map'); ?>
                </div>    
                </div>
                
            </div> <!-- leftbar -->
            
            <div class="sidebar">
            	<?php dynamic_sidebar('page-sidebar'); ?>
            </div> <!-- sidebar -->
        </div>
    </section>
    <!-- home-sec -->
  
    
  </div>
  <!--content-->
<?php get_footer(); ?>