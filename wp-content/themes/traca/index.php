<?php get_header(); ?>
    <div class="traca-section container project">
        <div class="container">
            <div class="row">
            <div class="col-sm-4">
                <div class="project-info">
                    <h3> <b><?php echo get_post_field('post_title'); ?> </b></h3>
                    <h3> <?php echo get_post_field('year'); ?></h3>
                    <h6> <?php echo get_post_field('state'); ?></h6>
                    <h6> <?php echo get_post_field('client'); ?></h6>
                    <h6> <?php echo get_post_field('location'); ?></h6>
                    <br><br><br>
                    <h6> <?php echo get_post_field('post_content'); ?></h6><br>
                </div>
            </div>
            <div class="col-sm-8">

                <div class="project-gallery">
                    <div class="project-gallery-main">
                        <img src="<?php echo get_post_field( 'main_image.guid' ); ?>">
                    </div>
                    <div class="project-gallery-rest">
                     <?php 
                        $gallery_images = get_post_meta( $post->ID, 'gallery' );
                        foreach($gallery_images as $value){ 
                            echo pods_image( $value, 'medium' );
                        } 
                     ?>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
<?php get_footer(); ?>
