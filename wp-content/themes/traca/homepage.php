<?php
/**
 * Template Name: Page
 */
get_header(); ?>
<main>
    
    <section class="traca-section traca-section-equipa" id="intro">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-interval="3000" data-ride="carousel">
            <div class="carousel-inner">

             <?php 
                $postcount = 0;
                $params = array( 
                    'orderby'   => 'order',  // Return all rows 
                    'limit'   => -1,  // Return all rows 

                ); 
                $membros = pods( 'project', $params ); 
                if ( 0 < $membros->total() ) { 
                    while ( $membros->fetch() ) { 
                if (!empty($membros->display( 'slideshow_image' ))) {
                    $postcount++;

            ?> 
               <?php 

               if ($postcount == 1) : // if this is the first post & first page ?>
                <div class="carousel-item active">
                <?php else : 
                 echo '<div class="carousel-item">';
                 endif; 
                 ?>
                    <div class="col traca-section-projectos-item">
                        

                        
                        <a href="<?php the_permalink($membros->display( 'id' )); ?>">
                            <img src="<?php echo $membros->display( 'slideshow_image' ); ?>">
                        </a>
                        <br>
                    </div>
                </div>
                    
            <?php 
                        }
                    }
                }
            ?>

          </div>
        </div>
        <div class="container">
                <div class="traca-section-projectos-row">
                     <?php 
                        $params = array( 
                            'orderby'   => 'order',  // Return all rows 
                            'limit'   => -1,  // Return all rows 
    
                        ); 
                        $membros = pods( 'project', $params ); 
                        if ( 0 < $membros->total() ) { 
                            while ( $membros->fetch() ) { 
                        
                    ?> 
                                <div class="traca-section-projectos-item">
                                    <a href="<?php the_permalink($membros->display( 'id' )); ?>">
                                        <img src="<?php echo $membros->display( 'main_image' ); ?>">
                                        <span class="traca-section-projectos-item-desc">
                                            <b><?php echo $membros->display( 'title' ); ?> / </b>
                                            <?php echo $membros->display( 'year' ); ?> 
                                            <?php 
                                                if (!empty($membros->display( 'state' ))) {
                                                    echo '/ '.$membros->display( 'state' );
                                                }
                                            ?>
                                        </span>
                                    </a>
                                </div>
                <?php 
                        }
                    }
                ?>
                </div>
            </div>
    </section>
    
    
    
    <section class="traca-section traca-section-equipa" id="sobre">
    	<div class="container">
        <?php 
            echo get_post_field('post_content');
            $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
            echo "<img src='".$feat_image."'>";
        ?>
        </div>
    </section>

    </div>
</main><!-- .wrap -->
<footer class="footer">


</footer>

<?php get_footer(); ?>