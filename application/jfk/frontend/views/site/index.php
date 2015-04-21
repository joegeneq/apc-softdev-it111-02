<?php

use yii\helpers\Html;
/* @var $this yii\web\View */
$this->title = 'Joy For Kids';
?>

<br>
<br>
<br>
<br>
<div class="site-index">

    <!--<div class="jumbotron">     </div>-->
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="images/jfk0.JPG" alt="">
      <div class="carousel-caption">
        
      </div>
    </div>
    <div class="item">
      <img src="images/jfk1.JPG" alt="">
      <div class="carousel-caption">
        
      </div>
    </div>
      <div class="item">
      <img src="images/jfk2.JPG" alt="">
      <div class="carousel-caption">
        
      </div>
    </div>
    
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="body-content">
		<section class="section-programs">
        <div id="programs">
            <div class="row">
              <div class="col-lg-4">
                <div class="thumbnail">
                    <img src="images/events_icon.png" alt="">
                         <div class="caption">
                 <!--  <h3>Programs</h3> -->
                             <p>See the events made by JFK (Joy for Kids) and you can be part of the JFK Team.<br><br></p>
                                <p><?php echo Html::a('Events', ['site/gallery'],['class' => 'btn btn-warning'])?></p>
                          </div>
                </div>
              </div>

              <div class="col-lg-4">
                <div class="thumbnail">
                  <img src="images/donate_icon.png" alt="">
                    <div class="caption">
                    <!--  <h3>Programs</h3> -->
                     <p>Different organizations and people can help homeless Filipino children by donating old things or monetary value.<br><br></p>
                          <p>
        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
        <input type="hidden" name="cmd" value="_s-xclick">
        <input type="hidden" name="hosted_button_id" value="37GG6QCAVDR5E">
        <input type="image" src="http://i57.tinypic.com/aynitv.jpg" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
        <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
        </form>
                        </p>
                </div>
          </div>
        </div>
				
          <div class="col-lg-4">
          <div class="thumbnail">
              <img src="images/cart_icon.png" alt="">
                <div class="caption">
                 <!--  <h3>Programs</h3> -->
                     <p>You can shop for yourself, or shop and give it to the filipino children in need. The amount of price of the object will go to the Joy for Kids Foundation.</p>

                 <p><?php echo Html::a('Shop', ['site/shop'],['class' => 'btn btn-warning'])?>
    </p>
                   </div>
                </div>
             </div>
        </div>

        </div>        
    </section>
    <aside class="subscribe-aside">
    <div id="subscribe">
      <div class="row">
        <div class="col-lg-11">
          <div class="thumbnail">
              <img src="images/subscribe_icon.png" alt="">
                <div class="caption">
                  <!-- <h3>Be Updated</h3> -->
                     <p>Be updated! and get emails from the Joy For Kids foundation about the programs to be conducted.<br><br></p>
                           <p><?php echo Html::a('Subscribe', ['subsciber/create'],['class' => 'btn btn-warning'])?>
    </p>
                </div>
          </div>
        </div>
        
            </div>
    </div>
    </aside>
</div>
</div>

<script type='text/javascript'>(function () { var done = false;var script = document.createElement('script');script.async = true;script.type = 
'text/javascript';script.src = 'https://app.purechat.com/VisitorWidget/WidgetScript';document.getElementsByTagName('HEAD').item(0).appendChild(script)
;script.onreadystatechange = script.onload = function (e) {if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) 
{var w = new PCWidget({ c: '0b88eb7b-9b74-4657-b17e-2649539ce375', f: true });done = true;}};})();</script>

 