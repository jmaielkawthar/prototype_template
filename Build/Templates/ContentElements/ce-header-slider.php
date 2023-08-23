<?php
$class = isset($class) ? $class : [];
$image = isset($image) ? $image:'';
$headline = isset($headline) ? $headline : '';
$text = isset($text) ? $text:'';
$btn = isset($btn) ? $btn:'';
$items = isset($items) ? $items : [];
?>
    <div class="ce-header-slider">
    <video src="https://zoricowa.cyon.site/media/pages/home/5b0f730714-1682818942/vimeo-video-427692930.mp4" autoplay="" loop="" muted="" playsinline=""  __idm_id__="61923329" ></video>
        <div class="uk-container-xlarge">
            <div class="header-slider">
                <?php foreach ($items as $item) { ?>
                    <div class="slider-item">
                        <div class="row">
                            <div class="col-lg-5 col-md-8  col-12 ml-auto">
                                <div class="teaser-header">
                                    <?php if( !empty( $item['image'] ) ): ?>
                                    <div class="teaser-image ">      
                                        <figure>
                                            <img src="<?php echo $item['image']; ?>" alt="image-header" title="image-header">
                                        </figure>
                                    </div>
                                    <?php endif; ?>
                                    <?php if( !empty( $item['headline'])): ?>
                                        <h1 class="headline">
                                            <?php echo $item['headline'] ?>
                                        </h1>
                                    <?php endif; ?>
                                </div>

                            </div>
                            <div class="col-md-4 col-sm-8 col-12 col-info">
                                <div class="teaser-info">
                                    <?php if( !empty( $item['text'])): ?>
                                        <p> <?php echo $item['text'] ?></p>
                                    <?php endif; ?>
                                    <?php if( !empty( $item['btn'] ) ): ?>
                                    <button class="primary-button"> <?php echo $item['btn'] ?></button>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>