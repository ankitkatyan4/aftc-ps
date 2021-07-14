<!doctype html>
<html lang="en">
<?php include 'header.php';?>
  <body>
		<?php include 'left_menu.php';?>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">

            <button type="button" id="sidebarCollapse" class="btn btn-primary">

			  <img src="images/menu.png">
              <span class="sr-only">Toggle Menu</span>
            </button>
            <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
			</br>
 
            </div>
          </div>
        </nav>

       	<div class="limiter">


	
<link rel="stylesheet" type="text/css" href="table/css/main2.css">
		<div class="container-table100">
		<h2 class="mb-4">      &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Add Asset</h2>

			<div class="wrap-table100">
				<div class="table100">
				
<?php 

$con=mysqli_connect("localhost","root","","aftc_mess");
$varz=0;
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

if ( isset($_GET['item'])&& !empty($_GET['item']))
{
						
$varz=1;

mysqli_query($con,"INSERT into `assets`( `Item`, `Description`, `Property_Book`, `Page_No`, `Acquired_Date`, `Quantity`, `q_checkout`, `Purchase_Price`, `Current_Value`, `Physical_Location`, `Manufacturer`, `Model`, `Comments`, `Supplier_Detail`, `Retired_Date`, `Warranty_Till`) VALUES ('".$_GET['item']."','".$_GET['description']."','".$_GET['property_book']."','".$_GET['page_num']."','".$_GET['acquired_date']."','".$_GET['quantity']."','".$_GET['quantity']."','".$_GET['purchase_price']."','".$_GET['current_value']."','".$_GET['physical_location']."','".$_GET['manufacturer']."','".$_GET['model']."','".$_GET['comments']."','".$_GET['supplier']."','".$_GET['retire']."','".$_GET['warranty']."')");

$result =mysqli_fetch_array( mysqli_query($con,"SELECT ID FROM `assets` WHERE ID =(SELECT MAX(ID) from assets)"));

mysqli_query($con,"INSERT INTO `conditions`(`ID`, `serv`, `repair`, `BER`, `unserv`) VALUES ('".$result['ID']."','".$_GET['quantity']."','0','0','0')");
	

}					

if ( isset($_GET['checkoutradio'])&& !empty($_GET['checkoutradio'])&& strcmp($_GET['checkoutradio'],"yes")==0)
{ 

$result =mysqli_fetch_array( mysqli_query($con,"SELECT ID FROM `assets` WHERE ID =(SELECT MAX(ID) from assets)"));

	
	echo "<script>  window.open('checkedout2.php?id=".$result['ID']."','_self'); </script>" ;

	
}
else
{
	if($varz==1)
	{
	echo "<script>  window.open('Asset_Search.php?itemid=".$result['ID']."','_self'); </script>" ;
}}

?>
<table width="600px"><form action="add_asset.php" method="get">
<tr>
<td>
 <label for="item">Item</label>
</td>
<td>
<input type="text" name="item" maxlength="50" size="30" required >
</td>
</tr>
<tr>
<td>
 <label for="property_book">Property Book</label>
</td>
<td>
<input type="text" name="property_book" maxlength="50" size="30" required >
</td>
</tr>
<tr>
<td>
 <label for="page_num">Page Number</label>
</td>
<td>
<input type="number" name="page_num" maxlength="50" size="30" required >
</td>
</tr>
<tr>
<td>
 <label for="manufacturer">Manufacturer</label>
</td>
<td>
<input type="text" name="manufacturer" maxlength="50" size="30" required >
</td>
</tr>
<tr>
<td>
 <label for="model">Model</label>
</td>
<td>
	<input type="text" name="model" maxlength="50" size="30" required >
</td>
</tr>
<tr>
<td>
 <label for="acquired_date">Acquired Date</label>
</td>
<td>
	<input type="date" id="adate"
       min="2018-01-01" name="acquired_date" maxlength="50" size="30" required >
</td>
</tr>
<tr>
<td>
 <label for="purchase_price">Purchase Price</label>
</td>
<td>
<input type="text" name="purchase_price" maxlength="50" size="30" required>
</td>
</tr>
<tr>
<td>
 <label for="quantity">Quantity</label>
</td>
<td>
<input type="number" name="quantity" maxlength="50" size="30" required >
</td>
</tr>
<tr>
<td>
 <label for="current_value">Current Value</label>
</td>
<td>
<input type="text" name="current_value" maxlength="50" size="30" required >
</td>
</tr>

<tr>
<td>
 <label for="physical_location">Physical Location</label>
</td>
<td>
<input type="text" name="physical_location" maxlength="50" size="30" required >
</td>
</tr>
<tr>
<td>
 <label for="supplier">Supplier Detail</label></td><td>			<select name="supplier" required> ";

<?php

if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM supplier Order by SiNo");


while($row = mysqli_fetch_array($result))
{
echo "<option  value=\"".$row['SiNo']."\">".$row['Name']."</option>";

}

?>

</select>  
</td>
</tr>

<tr>
<td>
 <label for="warranty">Warranty Till</label>
</td>
<td>
<input type="date" name="warranty" maxlength="50" size="30" required >
</td>
</tr>
<tr>
<td>
 <label for="retire">Retire Date</label>
</td>
<td>
<input type="date" name="retire" maxlength="50" size="30" required >
</td>
</tr>
<tr>
<td>
 <label for="comments">Comments</label>
</td>
<td>
<textarea name="comments" maxlength="1000" cols="25" rows="3"  placeholder="NIL" >Comments</textarea>
</td>
</tr>

<tr>
<td>
 <label for="description">Description</label>
</td>
<td>
<textarea name="description" maxlength="1000" cols="25" rows="6"  >Description</textarea>
</td>
</tr>
<br>
<br>
<tr>
<td>
 <label for="retire">Check Out Asset?</label>
</td>
<td>
<input type="checkbox" name="checkoutradio"  value="yes">
</td>
</tr>

<tr>
<td colspan="2" style="text-align:center">
<br>
<br>
<input type="Submit" value="Submit">
</td>
</tr>
</table></form>
      </div>
		</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
	<?php include 'footer.php';?>
  </body>
</html>