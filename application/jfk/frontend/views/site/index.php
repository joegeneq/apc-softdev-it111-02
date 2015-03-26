<?php
/* @var $this yii\web\View */
$this->title = 'Joy For Kids';
?>
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
                <h2>Programs</h2>

                <p>See the events made by JFK (Joy for Kids) and you can be part of the JFK Team.</p>

                <p><a class="btn btn-warning" href="http://localhost/jfk/frontend/web/index.php?r=volunteer%2Fcreate">Programs &raquo;</a></p>
				<!--<p><a class="btn btn-default" href="http://localhost/jfk/frontend/web/index.php?r=subsciber%2Fcreate">Subscibe &raquo;</a></p>-->
            </div>
            <div class="col-lg-4">
                <h2>Donate</h2>

                <p>Different organizations and people can help homeless Filipino children by donating old things or monetary value.</p>

                <!--<p><a class="btn btn-default" href="http://localhost/jfk/frontend/web/index.php?r=site%2Fdonate">Donate &raquo;</a></p>-->
				
				<p>
				
				<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
					<input type="hidden" name="cmd" value="_s-xclick">
					<input type="hidden" name="hosted_button_id" value="XVAZL3TFJQF7S">
					<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
					<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
				</form>

				
				<!--Button to Dummy Account-->
				<!--<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" target="_top">
					<input type="hidden" name="cmd" value="_s-xclick">
					<input type="hidden" name="hosted_button_id" value="VSWZAXSJQADEA">
					<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
					<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
				</form>-->
				
				<!--<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
					<input type="hidden" name="cmd" value="_s-xclick">
					<input type="hidden" name="hosted_button_id" value="XB94QHPV6MMRJ">
					<input type="image" src="https://www.sandbox.paypal.com/en_US/i/btn/btn_donate_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
					<img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
				</form>-->
				
				</p>
				
				
            </div>
            <div class="col-lg-4">
                <h2>Shop</h2>

                <p>You can shop for yourself, or shop and give it to the filipino children in need. The amount of price of the object will go to the JFK (Joy for Kids Foundation).</p>

                <p><a class="btn btn-warning" href="http://localhost/jfk/frontend/web/index.php?r=site%2Fshop">Shop &raquo;</a></p>
      </div>
            
        </div>
    </div>
    </section>
    
    </div>
    <aside class="subscribe-aside">
        <div id="subscribe">
              <div class="row">
                    <div class="col-lg-11">
                    <h2>Be Updated!</h2>
                    <p>Get emails from the Joy For KIds foundation about the programs to be conducted</p>
                    <p><a class="btn btn-warning" href="http://localhost/jfk/frontend/web/index.php?r=subsciber%2Fcreate">Subscibe &raquo;</a></p>
                    </div>
        </div>  
        </div>
      </aside>
    </div>
</div>
