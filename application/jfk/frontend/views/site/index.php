<script src="assets/26dcc90f/js/jquery-1.9.1.min.js"></script>
<script src="assets/26dcc90f/js/jssor.slider.mini.js"></script>
<script>
    jQuery(document).ready(function ($) {    

        var options = {
            $AutoPlay: true,
            $SlideDuration: 500,
            $ArrowKeyNavigation: true,
            $BulletNavigatorOptions: {
                    $Class: $JssorBulletNavigator$,
                    $ChanceToShow: 2,
                    $AutoCenter: 1,
                    $Steps: 1,
                    $Lanes: 1,
                    $SpacingX: 1,
                    $SpacingY: 1,
                    $Orientation: 1
                }        
        };
        var slideMain = new $JssorSlider$('slideMain', options);

    });
</script>
<?php
/* @var $this yii\web\View */
$this->title = 'JFK';
?>
<div class="site-index">

    <div class="jumbotron">
	  <center>
            <div id="slideMain">           
                <div class="slideDiv" u="slides">
                    <div><img class="slideImg" u="image" src="images/Slide/world.png" /></div>
                    <div><img class="slideImg" u="image" src="images/Slide/City-Tour.jpg" /></div>
                    <div><img class="slideImg" u="image" src="images/Slide/Street-Market-Shopping.jpg" /></div>
                    
                </div>

                <!-- BULLET NAVIGATOR -->
                <style>                   
                    .slideBullet div, .slideBullet div:hover, .slideBullet .av
                    {
                        background: url(images/Navigator/b06.png) no-repeat;
                        overflow:hidden;
                        cursor: pointer;
                    }
                    .slideBullet div { background-position: -6px -6px; 
                            margin-top: 640px;
                    }
                    .slideBullet div:hover, .slideBullet .av:hover { background-position: -36px -6px; }
                    .slideBullet .av { background-position: -66px -6px; }
                    .slideBullet .dn, .slideBullet .dn:hover { background-position: -96px -6px; }
                </style>
                <div u="navigator" class="slideBullet">
                    <div u="prototype" style="position: absolute; width: 12px; height: 12px; left: 0px; top: 0px;" class=""></div>
                    <div u="prototype" style="position: absolute; width: 12px; height: 12px; left: 15px; top: 0px;" class=""></div>
                    <div u="prototype" style="position: absolute; width: 12px; height: 12px; left: 30px; top: 0px;" class=""></div>
                    <div u="prototype" style="position: absolute; width: 12px; height: 12px; left: 50px; top: 0px;" class=""></div>
                </div>

            </div>
        </center>

        
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Events</h2>

                <p>See the events made by JFK (Joy for Kids) and if you are interested you can create one yourself with the help of the JFK Team.</p>

                <p><a class="btn btn-default" href="http://localhost/jfk/frontend/web/index.php?r=site%2Fevents">Events &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Donate</h2>

                <p>Different organizations and people can help homeless Filipino children by donating old things or monetary value.</p>

                <p><a class="btn btn-default" href="http://localhost/jfk/frontend/web/index.php?r=site%2Fdonate">Donate &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Shop</h2>

                <p>You can shop for yourself, or shop and give it to the filipino children in need. The amount of price of the object will go to the JFK (Joy for Kids Foundation).</p>

                <p><a class="btn btn-default" href="http://localhost/jfk/frontend/web/index.php?r=site%2Fshop">Shop &raquo;</a></p>
            </div>
        </div>

    </div>
</div>
