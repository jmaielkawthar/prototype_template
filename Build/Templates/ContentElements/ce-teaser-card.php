<?php
$class = isset($class) ? $class : '';
$headline = isset($headline) ? $headline : '';
$subtitle = isset($subtitle) ? $subtitle : '';
$text = isset($text) ? $text:'';
$mb = isset($mb) ? $mb:'';
$mt = isset($mt) ? $mt:'';
$download = isset($download) ? $download:'';
?>
<div class="ce-teaser-card ">
    <div class="headline">
        <?php if( !empty( $headline ) ): ?>
            <h4 > <?php echo $headline ?></h4>
        <?php endif; ?>
    </div>
    <?php if( !empty( $text ) ): ?>
        <p> <?php echo $text ?></p>
    <?php endif; ?>
    <?php if( !empty( $btn ) ): ?>
    <div class="d-flex">
        <a href="/" class="primary-button ">
            <?php echo $btn; ?>
        </a>
    </div>
    <?php endif; ?>

</div>
