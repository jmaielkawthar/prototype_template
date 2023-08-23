<?php
$class = isset($class) ? $class : '';
$headline = isset($headline) ? $headline : '';
$subtitle = isset($subtitle) ? $subtitle : '';
$text = isset($text) ? $text:'';
$mb = isset($mb) ? $mb:'';
$mt = isset($mt) ? $mt:'';
$download = isset($download) ? $download:'';
?>
<div class="ce-two-teasercard">
    <div class="container">
        <div class="row">
            <?php foreach ($items as $item) { ?>
                <div class="col-md-6 col-teasercard">
                    <div class="teaser <?php if( !empty( $item['class'] ) ): echo $item['class']; endif;?>">                     
                        <?php if( !empty( $item['headline'])): ?>
                        <p class="bold"><?php echo $item['headline'] ?></p>
                        <?php endif; ?>
                        <?php if( !empty( $item['text'])): ?>
                            <p class="text"> <?php echo $item['text'] ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>