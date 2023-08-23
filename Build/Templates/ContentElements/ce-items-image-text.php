<?php
$class = isset($class) ? $class : '';
$headline = isset($headline) ? $headline : '';
$video = isset($video) ? $video : '';
$text = isset($text) ? $text:'';
?>
<div class="ce-items-image-text">
    <div class="container">
        <div class="row">
            <?php foreach ($items as $item) { ?>
                <div class="col-lg-3  col-sm-6 col-12 col-items">
                    <?php if( !empty(  $item['image'] ) ): ?>
                        <figure>
                            <img class="image" src="<?php echo  $item['image'] ; ?>" alt="text-img" title="text-img">
                        </figure>
                    <?php endif; ?>
                    <?php if( !empty( $item['headline'] ) ): ?>
                        <p class="bold headline"><?php echo $item['headline'] ?></p>
                    <?php endif; ?>
                    <?php if( !empty( $item['text'])): ?>
                        <p class="text"> <?php echo $item['text'] ?></p>
                    <?php endif; ?>
                    <?php if( !empty( $item['link'] ) ): ?>
                        <a href="" class="icon-linkedin"> <?php echo $item['link'] ?></a>
                    <?php endif; ?>
                </div>
            <?php } ?>
        </div>
    </div>
</div>