<?php
/**
 * Created by PhpStorm.
 * User: breyner
 * Date: 04/09/15
 * Time: 09:15 AM
 */ ?>
<link rel='stylesheet' id='camera-css' href='<?php echo __SLIDER__; ?>css/camera.css' type='text/css' media='all'>


<script type='text/javascript' src='<?php echo __SLIDER__; ?>scripts/jquery.mobile.customized.min.js'></script>
<script type='text/javascript' src='<?php echo __SLIDER__; ?>scripts/jquery.easing.1.3.js'></script>
<script type='text/javascript' src='<?php echo __SLIDER__; ?>scripts/camera.min.js'></script>
<script>
    jQuery(function () {

        jQuery('#camera_wrap_1').camera({
            thumbnails: false,
            pagination: false,
            alignment: 'center',
            time: 400,
            //loader: 'none',
            height: '30%'
        });

    });
</script>
<div class="header_bg x" >
    <div class="camera_wrap  camera_red_skin" id="camera_wrap_1" style="background-color: #fff;width: 100%;">
        <div data-src="<?php echo __IMG__ ?>images/A-01-min.jpg"></div>
        <div data-src="<?php echo __IMG__ ?>images/B-02-min.jpg"></div>
        <div data-src="<?php echo __IMG__ ?>images/C-03-min.jpg">

        </div>
        <div data-src="<?php echo __IMG__ ?>images/D-04-min.jpg">
            <!--<div class="camera_caption fadeFromBottom">
                Camera is a responsive/adaptive slideshow. <em>Try to resize the browser window</em>
            </div>-->
        </div>
        <div data-src="<?php echo __IMG__ ?>images/E-05-min.jpg">
            <!--<div class="camera_caption fadeFromBottom">
                Camera is a responsive/adaptive slideshow. <em>Try to resize the browser window</em>
            </div>-->
        </div>
    </div>
</div>