<?php
/**
 * Created by PhpStorm.
 * User: breyner
 * Date: 04/09/15
 * Time: 09:15 AM
 */?>
<link rel='stylesheet' id='camera-css'  href='<?php echo __SLIDER__;?>css/camera.css' type='text/css' media='all'>


<script type='text/javascript' src='<?php echo __SLIDER__;?>scripts/jquery.mobile.customized.min.js'></script>
<script type='text/javascript' src='<?php echo __SLIDER__;?>scripts/jquery.easing.1.3.js'></script>
<script type='text/javascript' src='<?php echo __SLIDER__;?>scripts/camera.min.js'></script>
<script>
    jQuery(function(){

        jQuery('#camera_wrap_1').camera({
            thumbnails: false,
            //height: '5%'
        });

    });
</script>
<div class="container">
<div class="camera_wrap camera_magenta_skin" id="camera_wrap_1">
    <div data-thumb="<?php echo __SLIDER__?>images/slides/bridge.jpg" data-src="<?php echo __SLIDER__?>images/slides/bridge.jpg">
        <div class="camera_caption fadeFromBottom">
            Camera is a responsive/adaptive slideshow. <em>Try to resize the browser window</em>
        </div>
    </div>
    <div data-thumb="<?php echo __SLIDER__?>images/slides/leaf.jpg" data-src="<?php echo __SLIDER__?>images/slides/leaf.jpg">
        <div class="camera_caption fadeFromBottom">
            It uses a light version of jQuery mobile, <em>navigate the slides by swiping with your fingers</em>
        </div>
    </div>
    <div data-thumb="<?php echo __SLIDER__?>images/slides/leaf.jpg" data-src="<?php echo __SLIDER__?>images/slides/leaf.jpg">
        <div class="camera_caption fadeFromBottom">
            <em>It's completely free</em> (even if a donation is appreciated)
        </div>
    </div>
</div>
</div>