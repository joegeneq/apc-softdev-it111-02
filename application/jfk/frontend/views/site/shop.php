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
	<table class="shop-shirt-images">
	<tr>
    <th colspan="5"><img src=" images/shirt.jpg"> <img src="images/shirt.jpg"></th>
	</tr>
	</table>
	
	<table border="2" width="80%" class="shop-shirt">
	<tr>
    <td rowspan="7"  align="center"><b>T-SHIRTS</b><br></td>
    <td align="center"><b>Color</b><br></td>
    <td align="center"><b>Price</b><br></td>
    <td align="center"><b>Size</b></td>
    <td align="center"><b>Available</b><br></td>
	</tr>
  <tr>
			<?php 
						$sql_shirt = mysql_query("SELECT * FROM products where item_type='T-Shirt'");
						while($rows = mysql_fetch_assoc($sql_shirt)) { 
					?>
						<td colspan="0" align="center"><b><?php echo $rows[$color]; ?></b></td>
						<td align="center"><?php echo $rows[$price]; ?></td>
						<td align="center"><b><?php echo $rows[$size]; ?></b></td>
						<td align="center"><?php echo $rows[$items_available]; ?></td></tr>
						
					<?php   
						} 
					?>	
</table>
<table class="shop-cap-images">
	<tr>
    <th colspan="5"><img src=" images/cap.jpg"> <img src="images/cap.jpg"></th>
	</tr>
	</table>
	
	<table border="2" width="80%" class="shop-cap">
	<tr>
    <td rowspan="4"  align="center"><b>CAP</b><br></td>
    <td align="center"><b>Color</b><br></td>
    <td align="center"><b>Price</b><br></td>
    <td align="center"><b>Available</b><br></td>
	</tr>
  <tr>
			<?php 
						$sql_cap = mysql_query("SELECT * FROM products where item_type='cap'");
						while($rows = mysql_fetch_assoc($sql_cap)) { 
					?>
						<td colspan="0" align="center"><b><?php echo $rows[$color]; ?></b></td>
						<td align="center"><?php echo $rows[$price]; ?></td>
						<td align="center"><?php echo $rows[$items_available]; ?></td></tr>
						
					<?php   
						} 
					?>	
</table>

</div>
		</div>
		
	
