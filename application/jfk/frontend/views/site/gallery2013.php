<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
$this->title = '2013 Gallery';

?>
<div class="site-events">
		</br>
		
		<div class="row">
            <div class="col-lg-11">
    <h1><?= Html::encode($this->title) ?></h1>
				</div>
			
  </div>
<!--
<table>
	<tr class="gallery-tr">
		<td class="zoom-img">
			<div class="effectback">
    		<img class="effectfront" src="images/xmas/1.jpg" />
			</div>
		</td>
		<td class="zoom-img">
			<div class="effectback">
    		<img class="effectfront" src="images/xmas/2.jpg" />
			</div>
		</td>
		<td class="zoom-img">
			<div class="effectback">
    		<img class="effectfront" src="images/xmas/3.jpg" />
			</div>
		</td>
		<td class="zoom-img">
			<div class="effectback">
    		<img class="effectfront" src="images/xmas/4.jpg" />
			</div>
		</td>
	<tr>
		<td class="zoom-img">
			<div class="effectback">
    		<img class="effectfront" src="images/xmas/5.jpg" />
			</div>
		</td>
		<td class="zoom-img">
			<div class="effectback">
    		<img class="effectfront" src="images/xmas/6.jpg"  />
			</div>
		</td>
	</tr>
	</tr>
</table> 
!-->


    <!--THE IMAGES ARE PLACED IN AN UNORDERED LIST-->
    <ul class="enlarge"> <!--We give the list a class so that we can style it seperately from other unordered lists-->

    <!--First Image-->
    <li>
    <img src="images/xmas/1.jpg" width="200px" height="150px" alt="1" /> <!--thumbnail image-->
    <span> <!--span contains the popup image-->
    <img src="images/xmas/1.jpg" alt="1" /> <!--popup image-->
    <br /> <!--caption appears under the popup image-->
    </span>
    </li>

    <!--Second Image-->
    <li>
    <img src="images/xmas/2.jpg" width="200px" height="150px" alt="2" /> <!--thumbnail image-->
    <span> <!--span contains the popup image-->
    <img src="images/xmas/2.jpg" alt="2" /> <!--popup image-->
    <br /> <!--caption appears under the popup image-->
    </span>
    </li>

    <!--Third Image-->
    <li>
    <img src="images/xmas/3.jpg" width="200px" height="150px" alt="3" /> <!--thumbnail image-->
    <span> <!--span contains the popup image-->
    <img src="images/xmas/3.jpg" alt="3" /> <!--popup image-->
    <br /> <!--caption appears under the popup image-->
    </span>
    </li>

    <!-- Fourth Image-->
     <li>
    <img src="images/xmas/4.jpg" width="200px" height="150px" alt="4" /> <!--thumbnail image-->
    <span> <!--span contains the popup image-->
    <img src="images/xmas/4.jpg" alt="3" /> <!--popup image-->
    <br /> <!--caption appears under the popup image-->
    </span>
    </li>

    <!-- Fifth Image -->
    <li>
    <img src="images/xmas/5.jpg" width="200px" height="150px" alt="5" /> <!--thumbnail image-->
    <span> <!--span contains the popup image-->
    <img src="images/xmas/5.jpg" alt="3" /> <!--popup image-->
    <br /> <!--caption appears under the popup image-->
    </span>
    </li>

    <!-- Sixth Image -->
    <li>
    <img src="images/xmas/6.jpg" width="200px" height="150px" alt="6" /> <!--thumbnail image-->
    <span> <!--span contains the popup image-->
    <img src="images/xmas/6.jpg" alt="3" /> <!--popup image-->
    <br /> <!--caption appears under the popup image-->
    </span>
    </li>

    </ul>
	<br><br>
	<div class="col-lg-1">
	<a class="back-gallery" href="http://localhost/jfk/frontend/web/index.php?r=volunteer%2Fcreate">&raquo; Back</a>
		    </div>
</div>
