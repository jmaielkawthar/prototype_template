<?php
$class = isset($class) ? $class : '';
$headline = isset($headline) ? $headline : '';
$video = isset($video) ? $video : '';
$text = isset($text) ? $text:'';
?>
<div class="ce-teasercard-full-width">
    <div class="container">
        <div class="headline">
        <?php if( !empty( $headline ) ): ?>
            <h3 class="mb-23"> <?php echo $headline ?></h3>
            <?php endif; ?>
            <?php if( !empty( $subline ) ): ?>
            <h3> <span><?php echo $subline ?></span> </h3>
            <?php endif; ?>
        </div>
        <div class="teasercard-full-width">
            <div class="row no-gutters">
                <?php if( !empty( $image ) ): ?>
                <div class="col-lg-8">
                    <figure>
                        <img class="image" src="<?php echo $image ; ?>" alt="text-img" title="text-img">
                    </figure>
                </div>
                <?php endif; ?>
                <div class="col-lg-4">
                    <div class="teaser-text">
                        <?php if( !empty( $title ) ): ?>
                            <h4 class="title"> <?php echo $title ?></h4>
                        <?php endif; ?>
                        <?php if( !empty( $text ) ): ?>
                            <p class="text"> <?php echo $text ?></p>
                        <?php endif; ?>
                        <?php if( !empty( $btn ) ): ?>
                        <div class="d-flex">
                            <a href="/" class="secondary-button">
                                <?php echo $btn; ?>
                            </a>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>