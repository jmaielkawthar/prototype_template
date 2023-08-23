<?php
$class = isset($class) ? $class : '';
$headline = isset($headline) ? $headline : '';
$subtitle = isset($subtitle) ? $subtitle : '';
$text = isset($text) ? $text:'';
$mb = isset($mb) ? $mb:'';
$mt = isset($mt) ? $mt:'';
$download = isset($download) ? $download:'';
?>
<div class="ce-text <?php if( !empty( $mb ) ): echo $mb; endif;?> <?php if( !empty( $mt ) ): echo $mt; endif;?>">
    <div class="<?php if( !empty( $class ) ): echo $class; endif;?>">
        <?php if( !empty( $headline ) ): ?>
        <h4 class="headline"> <?php echo $headline ?></h4>
        <?php endif; ?>
        <?php if( !empty( $subtitle ) ): ?>
        <h4 class="subtitle"> <?php echo $subtitle ?></h4>
        <?php endif; ?>
        <?php if( !empty( $text ) ): ?>
        <p class="text"> <?php echo $text ?></p>
        <?php endif; ?>
        <?php if( !empty( $list ) ): ?>
        <ul>
            <?php echo $list ?>
        </ul>
        <?php endif; ?>
        <?php if( !empty( $image ) ): ?>
        <figure>
            <img class="image" src="<?php echo $image ; ?>" alt="text-img" title="text-img">
        </figure>
        <?php endif; ?>
    </div>
</div>