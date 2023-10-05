<?php
$class = isset($class) ? $class : '';
$headline = isset($headline) ? $headline : '';
$video = isset($video) ? $video : '';
$text = isset($text) ? $text:'';
?>
<div class="ce-teaser-image-text">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-image">
                <?php if( !empty( $image ) ): ?>
                    <figure>
                        <img class="image" src="<?php echo $image ; ?>" alt="text-img" title="text-img">
                    </figure>
                <?php endif; ?>
            </div>
            <div class="col-md-6">
                <?php if( !empty( $headline ) ): ?>
                    <p class="bold headline"><?php echo $headline ?></p>
                <?php endif; ?>
                <?php if( !empty( $text ) ): ?>
                    <p class="text"> <?php echo $text ?></p>
                <?php endif; ?>
                <?php if( !empty( $link ) ): ?>
                    <a href="" class="icon-linkedin"> <?php echo $link ?></a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>