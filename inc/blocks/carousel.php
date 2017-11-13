<!-- carousel -->
<div class="block_carousel">
    <div class="container">

        <div class="row ">
            <div class="block_carousel_images">

                <div>

                    <?php if( $images = theme( 'carousel' ) ) { ?>
                    <?php foreach( $images as $i => $image ) { ?>

                    <img src="<?php echo $image['url']; ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" width='300px' />

                    <?php } ?>
                    <?php } ?>

                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                <div class="block_carousel_content">

                </div>
                <div class="col-md-4">

                    <a>
                        <?php echo theme('button_one') ?> 
                    </a>                 
                   

                </div>
        </div>

    </div>  
</div>