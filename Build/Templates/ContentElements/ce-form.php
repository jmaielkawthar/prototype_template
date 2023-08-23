<?php
$class = isset($class) ? $class : '';
$headline = isset($headline) ? $headline : '';
$text = isset($text) ? $text:'';
?>
<div class="ce-form">
    <div class="container">
        <form action="" class="needs-validation " novalidate>
            <div class="row row-form">
                <div class="col-md-6">
                    <?php foreach ($items as $item) { ?>
                        <?php if( !empty( $item['label'])): ?>
                            <div class="form-group">
                                <label class="form-label"> <?php echo $item['label'] ?></label>
                                <input class="form-input form-control" type="text" required>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                        <?php endif; ?>
                    <?php } ?>
                    <div class="form-group">
                        <div class="textarea-section">
                            <label class="form-textarea-label" for="RadioInline2"><?php echo $textarea ?></label>
                            <textarea rows="6" class="form-control" id="form-textarea-1" name="form-textarea" required></textarea>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                    </div>
                    <div class="form-group">
                        <?php if( !empty( $text ) ): ?>
                        <p> <?php echo $text ?></p>
                        <?php endif; ?>
                    </div>

                                        <!-- <div class="form-group">
                        <div class="checkbox-section ">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="Checkbox-1" value="options1">
                                <label class="form-check-label" for="Checkbox-1">Ich stimme den Angaben zum Datenschutz  zu</label>
                            </div>
                        </div>
                    </div> -->
                    <div class="form-group">
                        <input class="primary-button" type="submit" value="<?php echo $btn ?>">
                    </div>

                </div>
                <div class="col-md-6">
                    <?php if( !empty( $maps ) ): ?>
                        <?php foreach ($maps as $item) { ?>
                        <div class="form-group map">
                        <div class="google-map w-100">
                            <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2404.7329032742564!2d13.406153815746113!3d52.50651347981113!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47a85153fb1c603f%3A0x6594527a5de7c69c!2sBrandenburg%20Gate!5e0!3m2!1sen!2sde!4v1652708882501!5m2!1sen!2sde"
                                width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
                        </div>
                            <?php foreach ($item['section'] as $val) { ?>
                                <div class="info-map">
                                    <?php if( !empty( $val['title'] ) ): ?>
                                    <p class="bold"> <?php echo $val['title'] ?></p>
                                    <?php endif; ?>
                                    <?php if( !empty( $val['text'] ) ): ?>
                                    <p> <?php echo $val['text'] ?></p>
                                    <?php endif; ?>
                                    <?php if( !empty( $val['list'] )): ?>
                                        <ul class="list">
                                            <?php foreach ($val['list'] as $li) { ?>
                                                <li> <?php echo $li['li']?></li>
                                            <?php } ?>
                                        </ul>
                                    <?php endif; ?>
                                    <?php if( !empty($val['btn']  ) ): ?>
                                    <div class="d-flex">
                                        <a href="/" class="secondary-button ">
                                            <?php echo $val['btn'] ; ?>
                                        </a>
                                    </div>
                                    <?php endif; ?>
                                </div>
                            <?php } ?>
                        </div>
    
                        <?php } ?>
                    <?php endif; ?>

                    <?php if( !empty( $fileUpload ) ): ?>
                    <div class="form-group">
                        <div class="upload-section" id="first-upload">
                            <div class="file-upload-box">
                                <div class="file-upload-message">
                                    <div class="icon-cloud-upload"></div>
                                    <p><?php echo $fileUpload ?></p>
                                </div>
                                <input type="file" id="file-uploader1" accept=".jpg, .pdf, .png" />
                            </div>
                            <div id="feedback1"></div>
                            <div class="file-upload-progress">
                                <label id="progress-info1" for="progress"></label>
                                <progress id="progress1" value="0" max="100"> </progress>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>

                </div>
            </div>
        </form>
    </div>
</div>