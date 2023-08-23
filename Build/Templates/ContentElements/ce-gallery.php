<?php
$class = isset($class) ? $class : [];
$image = isset($image) ? $image:'';
$headline = isset($headline) ? $headline : '';
$text = isset($text) ? $text:'';
$btn = isset($btn) ? $btn:'';
$items = isset($items) ? $items : [];
?>
    <div class="ce-gallery">
        <div class="container">
            <?php if( !empty( $headline ) ): ?>
                <h4 class="headline mb-30"> <?php echo $headline ?></h4>
            <?php endif; ?>
            <div class="row">
                <?php foreach ($items as $item) { ?>
                    <div class="col-md-4">
                        <div class="gallery-item">
                            <?php if( !empty( $item['image'] ) ): ?>
                                <a href="<?php echo $item['image']; ?>" data-fancybox="images" data-caption="<?php if( !empty( $item['text'] ) ): echo $item['text']; endif;?>">
                                    <figure>
                                        <img src="<?php echo $item['image']; ?>" alt="image-header" title="image-header">
                                    </figure>
                                </a>
                            <?php endif; ?>
                            <?php if( !empty( $item['text'])): ?>
                                <p> <?php echo $item['text'] ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>