<!doctype html>
<html lang="en">
  <head>
  	<title>AFTC Mess Portal</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="css/poppins.css" rel="stylesheet">
		
		<link rel="stylesheet" href="css/myfont.css">
		<link rel="stylesheet" href="css/style.css">
		<style> 
input {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: none;
  background-color: #000000;
  color: white;
}

textarea {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: none;
  background-color: #000000;
  color: white;
}

</style>
  </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="p-4 pt-5">
		  		<a href="index.php" class="img logo rounded-circle mb-5" style="background-image: url(images/Crest_AFTC.png);"></a>
<ul class="list-unstyled components mb-5">
				          <li>
              <a href="index.php">Home</a>
	          </li>
			   <li>
              <a href="Asset_Search.php">Search Asset List</a>
	          </li>
	          <li >
	            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Add</a>
	            <ul class="collapse list-unstyled" id="homeSubmenu">
                <li>
                    <a href="add_asset.php">Asset</a>
                </li>
                <li>
                    <a href="supplier_add.php">Supplier</a>
                </li>
                <li>
                    <a href="owner_add.php">Owner</a>
                </li>
	            </ul>
	          </li>
			  <li >
	            <a href="#homeSubmenu22" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Edit</a>
	            <ul class="collapse list-unstyled" id="homeSubmenu22">
                <li>
                    <a href="all_asset_search.php">Edit Asset</a>
                </li>
                <li>
                    <a href="servicieability_edit_search.php">Change Serviceability</a>
                </li>
                <li>
                    <a href="all_owner_search.php">Edit Owner</a>
                </li>
				                <li>
                    <a href="all_supplier_search.php">Edit Supplier</a>
                </li>
	            </ul>
	          </li>
	          	          <li >
	            <a href="#homeSubmenu1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Check-Out/ Check-in</a>
	            <ul class="collapse list-unstyled" id="homeSubmenu1">
                <li>
                    <a href="checkout.php">Check-Out</a>
                </li>
                <li>
                    <a href="checkin.php">Check-in</a>
                </li>
	            </ul>
	          </li>
	          <li>
              <a href="#pageSubmenu2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Reports</a>
              <ul class="collapse list-unstyled" id="pageSubmenu2">
                <li>
                    <a href="all_asset_search2.php">All Assets</a>
                </li>
                <li>
                    <a href="Asset_Search.php">Asset Details</a>
                </li>
                <li>
                    <a href="supplier.php">Asset by Supplier</a>
                </li>
				<li>
                    <a href="borrower.php">Asset by Owner</a>
                </li>
								<li>
                    <a href="asset_item.php">Asset by Item</a>
                </li>
								<li>
                    <a href="asset_physical.php">Asset by Physical_Location</a>
                </li>
				<li>
                    <a href="servicieability.php">Asset by Serviceability</a>
                </li>
				<li>
                    <a href="lending_history.php">Owner Lending History</a>
                </li>

              </ul>
	          </li>
			  	          <li>  <a href="#homeSubmenu3" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Contact Book</a>
	            <ul class="collapse list-unstyled" id="homeSubmenu3">
                <li>
                    <a href="owner_contact.php">Owner</a>
                </li>
                <li>
                    <a href="supplier_contact.php">Supplier</a>
                </li>
	            </ul></li>

	        </ul>
				          <li>
              <a href="index.php">Home</a>
	          </li>
	          <li >
	            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Add</a>
	            <ul class="collapse list-unstyled" id="homeSubmenu">
                <li>
                    <a href="#">Asset</a>
                </li>
                <li>
                    <a href="#">Supplier</a>
                </li>
                <li>
                    <a href="#">Owner</a>
                </li>
	            </ul>
	          </li>
			  <li >
	            <a href="#homeSubmenu22" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Edit</a>
	            <ul class="collapse list-unstyled" id="homeSubmenu22">
                <li>
                    <a href="#">Edit Asset</a>
                </li>
                <li>
                    <a href="#">Change Serviceability</a>
                </li>
                <li>
                    <a href="#">Edit Owner</a>
                </li>
				                <li>
                    <a href="#">Edit Supplier</a>
                </li>
	            </ul>
	          </li>
	          	          <li >
	            <a href="#homeSubmenu1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Check-Out/ Check-in</a>
	            <ul class="collapse list-unstyled" id="homeSubmenu1">
                <li>
                    <a href="checkout.php">Check-Out</a>
                </li>
                <li>
                    <a href="checkin.php">Check-in</a>
                </li>
	            </ul>
	          </li>
	          <li>
              <a href="#pageSubmenu2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Reports</a>
              <ul class="collapse list-unstyled" id="pageSubmenu2">
                <li>
                    <a href="all_asset.php">All Assets</a>
                </li>
                <li>
                    <a href="Asset_Details.php">Asset Details</a>
                </li>
                <li>
                    <a href="supplier.php">Asset by Supplier</a>
                </li>
				<li>
                    <a href="borrower.php">Asset by Owner</a>
                </li>
				<li>
                    <a href="servicieability.php">Asset by Serviceability</a>
                </li>
				<li>
                    <a href="lending_history.php">Owner Lending History</a>
                </li>
				<li>
                    <a href="checkedout.php">Checked Out asset</a>
                </li>

              </ul>
	          </li>
			  	          <li>  <a href="#homeSubmenu3" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Contact Book</a>
	            <ul class="collapse list-unstyled" id="homeSubmenu3">
                <li>
                    <a href="owner_contact.php">Owner</a>
                </li>
                <li>
                    <a href="supplier_contact.php">Supplier</a>
                </li>
	            </ul></li>

	        </ul>

	        <div class="footer">
	        	<p>Developed by Fg Offr Vatsalya Yadav - +91-9483906554</p>
				<p>and  Fg Offr Sneha Sajumon - +91-9483402944</p>
				<p>Under Guidance of Sqn Ldr Ankit - +91-8130954996</p>
	        </div>

	      </div>
    	</nav>

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
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

if ( isset($_GET['item'])&& !empty($_GET['item']))
{
						


mysqli_query($con,"REPLACE into `assets`( `ID`,`Item`, `Description`, `Property_Book`, `Page_No`, `Acquired_Date`, `Quantity`, `q_checkout`, `Purchase_Price`, `Current_Value`, `Physical_Location`, `Manufacturer`, `Model`, `Comments`, `Supplier_Detail`, `Retired_Date`, `Warranty_Till`) VALUES ('".$_GET['ids']."','".$_GET['item']."','".$_GET['description']."','".$_GET['property_book']."','".$_GET['page_num']."','".$_GET['acquired_date']."','".$_GET['quantity']."','".$_GET['quantity']."','".$_GET['purchase_price']."','".$_GET['current_value']."','".$_GET['physical_location']."','".$_GET['manufacturer']."','".$_GET['model']."','".$_GET['comments']."','".$_GET['supplier']."','".$_GET['retire']."','".$_GET['warranty']."')");

	echo "<script>  window.open('Asset_Search.php?itemid=".$_GET['ids']."','_self'); </script>" ;

						

}
if (isset($_GET['id'])&& !empty($_GET['id']) and $_GET['id'])
{ $row3= mysqli_fetch_array(mysqli_query($con,"SELECT * from assets Where ID = ".$_GET['id']));

echo" <table width=\"600px\"><form action=\"add_asset_edit.php?id=".$row3['ID']."?\" method=\"get\">
<tr>
<td>
 <label for=\"ids\">ID</label>
</td>
<td>
<input type=\"text\" name=\"ids\" maxlength=\"50\" size=\"30\" readonly value=".$row3['ID'].">
</td>
</tr>
<tr>
<td>
 <label for=\"item\">Item</label>
</td>
<td>
<input type=\"text\" name=\"item\" maxlength=\"50\" size=\"30\" required value=".$row3['Item'].">
</td>
</tr>
<tr>
<td>
 <label for=\"property_book\">Property Book</label>
</td>
<td>
<input type=\"text\" name=\"property_book\" maxlength=\"50\" size=\"30\" required value=".$row3['Property_Book'].">
</td>
</tr>
<tr>
<td>
 <label for=\"page_num\">Page Number</label>
</td>
<td>
<input type=\"number\" name=\"page_num\" maxlength=\"50\" size=\"30\" required value=".$row3['Page_No'].">
</td>
</tr>
<tr>
<td>
 <label for=\"manufacturer\">Manufacturer</label>
</td>
<td>
<input type=\"text\" name=\"manufacturer\" maxlength=\"50\" size=\"30\" required value=".$row3['Manufacturer'].">
</td>
</tr>
<tr>
<td>
 <label for=\"model\">Model</label>
</td>
<td>
	<input type=\"text\" name=\"model\" maxlength=\"50\" size=\"30\" required value=".$row3['Model'].">
</td>
</tr>
<tr>
<td>
 <label for=\"acquired_date\">Acquired Date</label>
</td>
<td>
	<input type=\"date\" id=\"adate\"
       min=\"2018-01-01\" name=\"acquired_date\" maxlength=\"50\" size=\"30\" required value=".$row3['Acquired_Date'].">
</td>
</tr>
<tr>
<td>
 <label for=\"purchase_price\">Purchase Price</label>
</td>
<td>
<input type=\"text\" name=\"purchase_price\" maxlength=\"50\" size=\"30\" required value=".$row3['Purchase_Price'].">
</td>
</tr>
<tr>
<td>
 <label for=\"quantity\">Quantity</label>
</td>
<td>
<input type=\"number\" name=\"quantity\" maxlength=\"50\" size=\"30\" required value=".$row3['Quantity'].">
</td>
</tr>
<tr>
<td>
 <label for=\"current_value\">Current Value</label>
</td>
<td>
<input type=\"text\" name=\"current_value\" maxlength=\"50\" size=\"30\" required value=".$row3['Current_Value'].">
</td>
</tr>

<tr>
<td>
 <label for=\"physical_location\">Physical Location</label>
</td>
<td>
<input type=\"text\" name=\"physical_location\" maxlength=\"50\" size=\"30\" required  value=".$row3['Physical_Location'].">
</td>
</tr>
<tr>
<td>
 <label for=\"supplier\">Supplier Detail</label></td><td>			<select name=\"supplier\" required> ";



if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM supplier Order by SiNo");


while($row = mysqli_fetch_array($result))
{
	if (strcmp($row3['Supplier_Detail'],$row['Name'])==0)
	{
	echo "<option selected value=\"".$row['SiNo']."\">".$row['Name']."</option>";}
	else
	{echo "<option  value=\"".$row['SiNo']."\">".$row['Name']."</option>";}

}


echo"
</select>  
</td>
</tr>
<tr>
<td>
 <label for=\"warranty\">Warranty Till</label>
</td>
<td>
<input type=\"date\" name=\"warranty\" maxlength=\"50\" size=\"30\" required value=".$row3['Warranty_Till'].">
</td>
</tr>
<tr>
<td>
 <label for=\"retire\">Retire Date</label>
</td>
<td>
<input type=\"date\" name=\"retire\" maxlength=\"50\" size=\"30\" required value=".$row3['Retired_Date'].">
</td>
</tr>
<tr>
<td>
 <label for=\"comments\">Comments</label>
</td>
<td>
<textarea name=\"comments\" maxlength=\"1000\" cols=\"25\" rows=\"3\"  placeholder=\"NIL\" value=".$row3['Comments']."> 
</textarea>
</td>
</tr>

<tr>
<td>
 <label for=\"description\">Description</label>
</td>
<td>
<textarea name=\"description\" maxlength=\"1000\" cols=\"25\" rows=\"6\" value=".$row3['Description']." > ";}

mysqli_close($con);
?>
</textarea>
</td>
</tr>
<br>
<br>



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
  </body>
</html>