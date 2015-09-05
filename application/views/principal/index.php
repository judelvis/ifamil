<div class="main_btm1" id="noticias">
    <div class="container">
        <div class="title">
            <hr class="team_hr team_hr_left hr_gray"/>
            <center><h1>Noticias</h1></center>
            <hr class="team_hr team_hr_left hr_gray"/>
        </div>
        <div class="main_grid">
            <?php
            if ($lst != 0) {
                $i = 0;
                foreach ($lst as $ls) {
                    if ($i == 0) echo '<div class="row-fluid team">';
                    $i++;
                    echo '
			<div class="col-md-3 span1_of_4" id="noticia_' . $ls->oid . '">
				<div class="thumbnail" style="height:300px;">
					<img src="' . __IMG__ . 'noticia/medio/' . $ls->imagen . '" alt="team 1">
					<h3>' . $ls->titulo . '</h3>
					<div class="mask">
						<a href="' . site_url("principal2/verNoticia/$ls->oid") . '">
						<h2><span >LEER</span></h2>
						</a>
					</div>
				</div>
			</div>
			';
                    if ($i == 4) {
                        echo '</div>';
                        break;
                    }
                }
            }
            ?></div>
    </div>
</div>
<div class="main_bg"><!-- start main -->
    <div class="container">
        <div class="main_grid">
            <div class="title">
                <hr class="team_hr team_hr_left hr_gray"/>
                <center><span class="line"></span><h1>Servicios</h1></center>
                <hr class="team_hr team_hr_left hr_gray"/>
            </div>
            <div class="span_of_4"><!-- start span_of_4 -->
                <div class="col-md-3 span1_of_4">
                    <div class="span4_of_list">
                        <span class="active"><i class="fa fa-suitcase "></i></span>

                        <h3>Paquetes</h3>

                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard dummy text ever since the 1500s</p>

                        <div class="read_more">
                            <a class="btn btn-2 active" href="single-page.html">view more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 span1_of_4">
                    <div class="span4_of_list">
                        <span class="active"><i class="fa fa-group"></i></span>

                        <h3>Asesoria</h3>

                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard dummy text ever since the 1500s</p>

                        <div class="read_more">
                            <a class="btn  btn-2b" href="single-page.html">view more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 span1_of_4">
                    <div class="span4_of_list">
                        <span class="active"><i class="fa fa-plane"></i></span>

                        <h3>Reservación</h3>

                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard dummy text ever since the 1500s</p>

                        <div class="read_more">
                            <a class="btn btn-2b" href="single-page.html">view more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 span1_of_4">
                    <div class="span4_of_list">
                        <span class="active"><i class="fa fa-list"></i></span>

                        <h3>Otros Servicios</h3>

                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard dummy text ever since the 1500s</p>

                        <div class="read_more">
                            <a class="btn btn-2b" href="single-page.html">view more</a>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <!-- end span_of_4 -->
        </div>
    </div>
</div>
<div class="main_btm1" id="noticias">
    <div class="container">
        <div class="title">
            <hr class="team_hr team_hr_left hr_gray"/>
            <center><h1>Twitter</h1></center>
            <hr class="team_hr team_hr_left hr_gray"/>
        </div>
        <div class="main_grid">
            <center><a class="twitter-timeline" href="https://twitter.com/ifamil_ca/favorites" data-widget-id="639939652024147968">Tweets favoritos de @ifamil_ca</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
            </center>
        </div>
    </div>
</div>
<div class="main1_bg"><!-- start main1 -->
    <div class="title">
        <hr class="team_hr team_hr_left hr_gray"/>
        <center><h1>Instagram</h1></center>
        <hr class="team_hr team_hr_left hr_gray"/>
    </div>
    <center><iframe src="http://widget.websta.me/in/ifamil_c.a/?s=180&w=4&h=2&b=1&p=5" allowtransparency="true" frameborder="0" scrolling="no" style="border:none;overflow:hidden;width:780px; height: 350px" ></iframe> <!-- websta - web.stagram.com -->
    </center>
</div>
    <!-- end banner -->
</div><iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d1961.6755529000425!2d-66.89525299865238!3d10.472963174847518!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2sve!4v1441404862591" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

<div class="main_btm"><!-- start main_btm -->
    <div class="container">
        <div class="main span_of_3">

            <br>

            <div class="cau_hide">
                <div class="cursual"><!--  start cursual  -->
                    <h4>Clientes<span class="line"></span></h4>
                </div>
                <div id="owl-demo" class="owl-carousel"><!----start-img-cursual---->
                    <div class="item">
                        <div class="cau_left">
                            <img class="lazyOwl" data-src="<?php echo __IMG__?>images/c1.png" alt="Lazy Owl Image">
                        </div>
                    </div>
                    <div class="item">
                        <div class="cau_left">
                            <img class="lazyOwl" data-src="<?php echo __IMG__?>images/c2.png" alt="Lazy Owl Image">
                        </div>
                    </div>
                    <div class="item">
                        <div class="cau_left">
                            <img class="lazyOwl" data-src="<?php echo __IMG__?>images/c3.png" alt="Lazy Owl Image">
                        </div>
                    </div>
                    <div class="item">
                        <div class="cau_left">
                            <img class="lazyOwl" data-src="<?php echo __IMG__?>images/c1.png" alt="Lazy Owl Image">
                        </div>
                    </div>
                    <div class="item">
                        <div class="cau_left">
                            <img class="lazyOwl" data-src="<?php echo __IMG__?>images/c2.png" alt="Lazy Owl Image">
                        </div>
                    </div>
                    <div class="item">
                        <div class="cau_left">
                            <img class="lazyOwl" data-src="<?php echo __IMG__?>images/c3.png" alt="Lazy Owl Image">
                        </div>
                    </div>
                    <div class="item">
                        <div class="cau_left">
                            <img class="lazyOwl" data-src="<?php echo __IMG__?>images/c1.png" alt="Lazy Owl Image">
                        </div>
                    </div>
                    <div class="item">
                        <div class="cau_left">
                            <img class="lazyOwl" data-src="<?php echo __IMG__?>images/c4.png" alt="Lazy Owl Image">
                        </div>
                    </div>
                    <div class="item">
                        <div class="cau_left">
                            <img class="lazyOwl" data-src="<?php echo __IMG__?>images/c1.png" alt="Lazy Owl Image">
                        </div>
                    </div>
                    <div class="item">
                        <div class="cau_left">
                            <img class="lazyOwl" data-src="<?php echo __IMG__?>images/c2.png" alt="Lazy Owl Image">
                        </div>
                    </div>
                    <div class="item">
                        <div class="cau_left">
                            <img class="lazyOwl" data-src="<?php echo __IMG__?>images/c3.png" alt="Lazy Owl Image">
                        </div>
                    </div>
                    <div class="item">
                        <div class="cau_left">
                            <img class="lazyOwl" data-src="<?php echo __IMG__?>images/c1.png" alt="Lazy Owl Image">
                        </div>
                    </div>
                    <div class="item">
                        <div class="cau_left">
                            <img class="lazyOwl" data-src="<?php echo __IMG__?>images/c2.png" alt="Lazy Owl Image">
                        </div>
                    </div>
                </div>
                <!----//End-img-cursual---->
            </div>
        </div>
    </div>
