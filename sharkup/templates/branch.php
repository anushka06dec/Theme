<?php
/*==============================*/
// @package Sharkup
// @author Medical Darpan
/*==============================*/
/* Template Name: Branch */
get_header();

?>
<div class="dashboard-container d-md-flex flex-wrap justify-content-between">

    <button class="navbar-toggler collapsed d-block d-xl-none" type="button" id="toggleMenu" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <img src="<?php echo IMG.'sidebar-circle-element.png';?>" class="top-image" />
    <!-- <img src="<?php echo IMG.'sidebar-bottom.png'; ?>" class="bottom-image" /> -->
    <?php get_template_part('/template-part/sidebar');  ?>
    <div class="dashboard-right">
        <div class="container-fluid">
            <div class="row">
	            <div class="col-md-12">
					<h1>Add Branch</h1>
					<?php get_template_part('dashboard/branch'); ?>
				</div>
			</div>
        </div>
    </div>
    <div class="overlay"></div>
    <div class="close-side-menu d-block d-xl-none"><i class="fas fa-times"></i></div>
</div>
<?php

get_footer();

?>