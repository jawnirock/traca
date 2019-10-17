<?php
/**
 * Template Name: Projects
 */
get_header(); ?>
    <section class="traca-section traca-section-projectos" id="projectos">
        <div class="container">
            <h4 id="arquitectura">Projectos / Arquitectura</h4>
            <div class="traca-section-projectos-row">
                 <?php 
                    $params = array( 
                        'orderby'   => 'order',  // Return all rows 
                        'limit'   => -1,  // Return all rows 

                    ); 
                    $membros = pods( 'project', $params ); 
                    if ( 0 < $membros->total() ) { 
                        while ( $membros->fetch() ) { 
                    
                        if ($membros->display( 'category' ) === 'Arquitectura') {
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
                }
            ?>
            </div>
            <h4 id="arte">Projectos / Arte</h4>
            <div class="traca-section-projectos-row">
                 <?php 
                    $params = array( 
                        'orderby'   => 'order',  // Return all rows 
                        'limit'   => -1,  // Return all rows 
                        // 'where' => 'category = "0"',

                    ); 
                    $membros = pods( 'project', $params ); 
                    if ( 0 < $membros->total() ) { 
                        while ( $membros->fetch() ) { 
                    
                        if ($membros->display( 'category' ) === 'Arte') {
                ?> 
                            <div class="traca-section-projectos-item">
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
                            </div>
            <?php 
                        }
                    }
                }
            ?>
            </div>
            <h4 id="design">Projectos / Design</h4>
            <div class="traca-section-projectos-row">
                 <?php 
                    $params = array( 
                        'orderby'   => 'order',  // Return all rows 
                        'limit'   => -1,  // Return all rows 
                        // 'where' => 'category = "0"',

                    ); 
                    $membros = pods( 'project', $params ); 
                    if ( 0 < $membros->total() ) { 
                        while ( $membros->fetch() ) { 
                    
                        if ($membros->display( 'category' ) === 'Design') {
                ?> 
                            <div class="traca-section-projectos-item">
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
                            </div>
            <?php 
                        }
                    }
                }
            ?>
            </div>
            <h4 id="publicacoes">Projectos / Publicações</h4>
            <div class="traca-section-projectos-row">
                 <?php 
                    $params = array( 
                        'orderby'   => 'order',  // Return all rows 
                        'limit'   => -1,  // Return all rows 
                        // 'where' => 'category = "0"',

                    ); 
                    $membros = pods( 'project', $params ); 
                    if ( 0 < $membros->total() ) { 
                        while ( $membros->fetch() ) { 
                    
                        if ($membros->display( 'category' ) === 'Publicações') {
                ?> 
                            <div class="traca-section-projectos-item">
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
                            </div>
            <?php 
                        }
                    }
                }
            ?>
            </div>

        </div>
    </section>

<?php get_footer(); ?>