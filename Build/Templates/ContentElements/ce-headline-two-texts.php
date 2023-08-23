<?php
$class = isset($class) ? $class : '';
$headline = isset($headline) ? $headline : '';
$text = isset($text) ? $text:'';

?>
<div class="ce-headline-two-texts">
    <div class="container">
        <div class="headline">
        <?php if( !empty( $headline ) ): ?>
            <h3 class="mb-23"> <?php echo $headline ?></h3>
            <?php endif; ?>
            <?php if( !empty( $subline ) ): ?>
            <h3> <span><?php echo $subline ?></span> </h3>
            <?php endif; ?>
        </div>
        <?php if( !empty( $title ) ): ?>
        <h4 class="title"> <?php echo $title ?></h4>
        <?php endif; ?>
        <div class="row">
            <?php foreach ($items as $item) { ?>
            <div class="col-md-6">
                <div class="teaser-text">
                <?php if( !empty( $item['title']  ) ): ?>
                    <h4  class="title"> <?php echo $item['title'] ?></h4>
                    <?php endif; ?>
                    <?php if( !empty( $item['text'])): ?>
                    <p class="text"> <?php echo $item['text'] ?></p>
                    <?php endif; ?>
                    <?php if( !empty( $item['btn'] ) ): ?>
                    <div class="d-flex">
                        <a href="/" class="secondary-button">
                            <?php echo $item['btn']; ?>
                        </a>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>