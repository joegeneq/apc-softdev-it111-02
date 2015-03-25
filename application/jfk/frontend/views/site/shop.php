<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
 $this->title = 'Shop';
//$this->params['breadcrumbs'][] = $this->title;
?>


<div class="site-shop">
<?php 

	$item_type = 'item_type';
    $price = 'price';
    $size = 'size';
    $color = 'color';
    $items_available = 'items_available';

 $conn=mysql_connect("localhost","root","");
 mysql_select_db("jfk_scds",$conn);
 // $sql_mug = mysql_query("SELECT * FROM products where item_type='Mug'");
 // $sql_shirt = mysql_query("SELECT * FROM products where id='1'");
?>

<div class="col-lg-17">
	<table border="3" width="75%" class="shop-shirt">
  <tr>
    <th colspan="5"><img src=" images/shirt.jpg"> <img src="images/shirt.jpg"></th>
  </tr>
  <tr>
    <td rowspan="7">T-SHIRTS<br></td>
    <td>Color<br></td>
    <td>Price<br></td>
    <td>Size</td>
    <td>Available<br></td>

  <tr>
			<?php 
						echo $sql_shirt = mysql_query("SELECT * FROM products where item_type='T-Shirt'");
						while($rows = mysql_fetch_assoc($sql_shirt)) { 
					?>
						<td colspan="0"><?php echo $rows[$color]; ?></td>
						<td><?php echo $rows[$price]; ?></td>
						<td><?php echo $rows[$size]; ?></td>
						<td><?php echo $rows[$items_available]; ?></td></tr>
						
					<?php   
						} 
					?>	
</table>


</div>
		</div>
		
	
