<?php
$class = isset($class) ? $class : '';
$headline = isset($headline) ? $headline : '';
$subtitle = isset($subtitle) ? $subtitle : '';
$text = isset($text) ? $text:'';
$mb = isset($mb) ? $mb:'';
$mt = isset($mt) ? $mt:'';
$download = isset($download) ? $download:'';
?>
<div class="ce-heading <?php if( !empty( $mb ) ): echo $mb; endif;?> <?php if( !empty( $mt ) ): echo $mt; endif;?>">
    <div class="<?php if( !empty( $class ) ): echo $class; endif;?>">
        <?php if( !empty( $headline ) ): ?>
            <h1 class="headline <?php if( !empty( $headlineClass ) ): echo $headlineClass; endif;?>"> <?php echo $headline ?></h1>
        <?php endif; ?>

        <?php if( !empty( $text ) ): ?>
            <p class="text <?php if( !empty( $textClass ) ): echo $textClass; endif;?>"> <?php echo $text ?></p>
        <?php endif; ?>
    </div>
</div>