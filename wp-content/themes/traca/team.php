<?php
/**
 * Template Name: Team
 */
get_header(); ?>

    <section class="traca-section traca-section-equipa" id="equipa">
        <div class="container">
    
             <?php 
                $params = array( 
                    'orderby'   => 'order',  // Return all rows 
                    'limit'   => -1  // Return all rows 
                ); 
                $membros = pods( 'team_member', $params ); 
                if ( 0 < $membros->total() ) { 
                    while ( $membros->fetch() ) { 
            ?> 
            
            <div class="row traca-section-equipa-row">
                <div class="col-md-4">
                    <img src="<?php echo $membros->display( 'picture' ); ?>">
                </div>
    
                <div class="col-md-8">
                    <h3>
                        <?php echo $membros->display( 'title' ); ?>,<br>
                        <?php echo $membros->display( 'job' ); ?>
                    </h3>
                    <h4>
                        <?php echo $membros->display( 'bio' ); ?>
                    </h4>
                </div>
                
            </div>
                
                
            <?php 
                    }
                }
            ?>
        </div>
    </section>
    
    <section class="traca-section traca-section-equipa" id="colaboradores">
        <div class="container">
             <?php 
                $params = array( 
                    'orderby'   => 'order',  // Return all rows 
                    'limit'   => -1  // Return all rows 
                ); 
                $membros = pods( 'colaborators', $params ); 
                if ( 0 < $membros->total() ) { 
                    while ( $membros->fetch() ) { 
            ?> 
            <div class="row traca-section-equipa-row">
                <div class="col-md-4">
                </div>
                <div class="col-md-8">
                    <h3 class="title">Colaboradores</h3>
                </div>
            </div>
            
            <div class="row traca-section-equipa-row">
                <div class="col-md-4">
                    <img src="<?php echo $membros->display( 'picture' ); ?>">
                </div>
    
                <div class="col-md-8">
                    <h3>
                        <?php echo $membros->display( 'title' ); ?>,<br>
                        <?php echo $membros->display( 'job' ); ?>
                    </h3>
                    <h4>
                        <?php echo $membros->display( 'bio' ); ?>
                    </h4>
                </div>
            </div>
                
                
            <?php 
                    }
                }
            ?>
        </div>
    </section>
    

<?php get_footer(); ?>