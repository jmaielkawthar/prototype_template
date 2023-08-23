<?php
$class = isset($class) ? $class : '';
$headline = isset($headline) ? $headline : '';
$subtitle = isset($subtitle) ? $subtitle : '';
$text = isset($text) ? $text:'';
$mb = isset($mb) ? $mb:'';
$mt = isset($mt) ? $mt:'';
$download = isset($download) ? $download:'';
?>
<div class="ce-accordion">
    <div class="container">
        <?php if( !empty( $headline ) ): ?>
            <h4 class="headline"> <?php echo $headline ?></h4>
        <?php endif; ?>
        <div id="accordion">
            <?php foreach ($items as $item) { ?>
            <div class="card">
                <?php if( !empty( $item['headline'])): ?>
                    <div class="card-header">
                        <h5 class="mb-0">
                            <button type="button" data-toggle="collapse" data-target="#<?php if( !empty( $item['class'] ) ): echo $item['class']; endif;?>"
                                aria-expanded="false">
                                <?php echo $item['headline'] ?>
                            </button>
                        </h5>
                    </div>
                <?php endif; ?>
                <?php if( !empty( $item['text'])): ?>
                    <div id="<?php if( !empty( $item['class'] ) ): echo $item['class']; endif;?>" class="collapse"  aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                            <?php echo $item['text'] ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
            <?php } ?>
        </div>
    </div>
</div>