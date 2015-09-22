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
            height: '30%'
        });

    });
</script>

<div class="camera_wrap  camera_red_skin" id="camera_wrap_1" style="background-color: #FFFFFF;margin-right: 0px auto">
    <div style="width: 100%" data-src="<?php echo __IMG__ ?>images/turismo2.jpg">
        <!--<div class="camera_caption fadeFromBottom">
            Camera is a responsive/adaptive slideshow. <em>Try to resize the browser window</em>
        </div>-->
    </div>
    <div data-thumb="<?php echo __SLIDER__ ?>images/slides/leaf.jpg"
         data-src="<?php echo __IMG__ ?>images/juangriego.jpg">

    </div>
    <div data-thumb="<?php echo __SLIDER__ ?>images/slides/leaf.jpg"
         data-src="<?php echo __IMG__ ?>images/servicios1.jpg">

    </div>
    <div data-thumb="<?php echo __SLIDER__ ?>images/slides/leaf.jpg" data-src="<?php echo __IMG__ ?>images/merida.jpg">

    </div>
    <div data-thumb="<?php echo __SLIDER__ ?>images/slides/leaf.jpg" data-src="<?php echo __IMG__ ?>images/fortinlagalera.jpg">

    </div>
</div>


<div class="clearfix"></div>