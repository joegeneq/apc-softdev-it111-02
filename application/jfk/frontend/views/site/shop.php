<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
 $this->title = 'Shop';
//$this->params['breadcrumbs'][] = $this->title;
?>


<div class="site-shop">


<?php 

	$id = 'id';
	$item_type = 'item_type';
    $price = 'price';
    $size = 'size';
    $color = 'color';
    $items_available = 'items_available';

 $conn=mysql_connect("localhost","root","");
 mysql_select_db("jfk_scds",$conn);
 // $sql_mug = mysql_query("SELECT * FROM products where item_type='Mug'");
 $sql_shirt = mysql_query("SELECT item_type FROM products where item_type='T-Shirt'");
?>

<div class="col-lg-17">
	<div class="body-content">
		<div class="row">
			<div class="col-lg-4">
				<table class="jfk-items" border="1px" width="100%">
					<tr align="center" class="items">
						<td>
							<?= Html::img('images/shirt.jpg');?>
						</td>
							
						<td>
							<?= Html::img('images/cap.jpg');?>
						</td>
						<td>
							<?= Html::img('images/mug.jpg');?>
						</td>
					</tr>
				
						<?php 
						while($rows = mysql_fetch_array($sql_shirt)) { 
					?>
						<tr><td colspan="0"><?php echo $rows[$item_type]; ?></td>
						
							<td> <?php // echo $rows[$price].$rows[$size].$rows[$color].$rows[$items_available]; ?></td>
							<td></td></tr>
						<!-- And so on--> 
					<?php   
						} 
					?> 
							
					
				</table>
			</div>
		</div>
		</div>
		</div>
		</div>
		
	<table border="2" width="100%">
  <tr>
    <th colspan="5"><?= Html::img('images/shirt.jpg');?></th>
    <th colspan="5"><?= Html::img('images/cap.jpg');?></th>
    <th colspan="5"><?= Html::img('images/mug.jpg');?></th>
  </tr>
  <tr>
    <td rowspan="5">T-SHIRTS<br></td>
    <td>Color<br></td>
    <td>Price<br></td>
    <td>Size</td>
    <td>Available<br></td>
    <td rowspan="5">CAP</td>
    <td>Color</td>
    <td>Price</td>
    <td>Size</td>
    <td>Avalable</td>
    <td rowspan="5">MUG</td>
    <td>Color</td>
    <td>Price<br></td>
    <td>Size</td>
    <td>Available</td>
  </tr>
  <tr>
    <td>R</td>
    <td><?php echo $rows[$price]; ?></td>
    <td>1</td>
    <td>1</td>
    <td>1</td>
    <td>1</td>
    <td>1</td>
    <td>1</td>
    <td>1</td>
    <td>1</td>
    <td>1</td>
    <td>1</td>
  </tr>
  <tr>
    <td>G</td>
    <td>1</td>
    <td>1</td>
    <td>1</td>
    <td>1</td>
    <td>1</td>
    <td>1</td>
    <td>1</td>
    <td>1</td>
    <td>1</td>
    <td>1</td>
    <td>1</td>
  </tr>
  <tr>
    <td>B</td>
    <td>1</td>
    <td>1</td>
    <td>1</td>
    <td>1</td>
    <td>1</td>
    <td>1</td>
    <td>1</td>
    <td>1</td>
    <td>1</td>
    <td>1</td>
    <td>1</td>
  </tr>
  <tr>
    <td>S</td>
    <td>1</td>
    <td>1</td>
    <td>1</td>
    <td>1</td>
    <td>1</td>
    <td>1</td>
    <td>1</td>
    <td>1</td>
    <td>1</td>
    <td>1</td>
    <td>1</td>
  </tr>
</table>
</div>
