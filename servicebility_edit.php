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
		<h2 class="mb-4">      &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Edit Item Serviceability</h2>

			<div class="wrap-table100">
				<div class="table100">
				
<?php 

						
$con=mysqli_connect("localhost","root","","aftc_mess");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

if ( isset($_GET['ids'])&& !empty($_GET['ids']))
{
mysqli_query($con,"Replace INTO `conditions`(`ID`, `serv`, `repair`, `BER`, `unserv`) VALUES  ('".$_GET['ids']."','".$_GET['serv']."','".$_GET['repair']."','".$_GET['ber']."','".$_GET['unserv']."')");

	echo "<script>  window.open('servicieability.php?itemid=".$_GET['ids']."','_self'); </script>" ;
}

if (isset($_GET['id'])&& !empty($_GET['id']) and $_GET['id'])
{ $row3= mysqli_fetch_array(mysqli_query($con,"SELECT * from conditions Where ID = ".$_GET['id']));

echo "
<form action=\"servicebility_edit.php\" method=\"get\">
<table width=\"200px\">
</tr>
<br>
<br>
<br>
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
 <label for=\"serv\">Total Serviceabile</label>
</td>
<td>
<input type=\"number\" name=\"serv\" maxlength=\"50\" size=\"30\" value=".$row3['serv'].">
</td>
</tr>
<tr>
<td>
 <label for=\"unserv\">Total Unserviceabile</label>
</td>
<td>
<input type=\"number\" name=\"unserv\" maxlength=\"50\" size=\"30\" value=".$row3['unserv'].">
</td>
</tr><tr>
<td>
 <label for=\"repair\">Total Under Repair</label>
</td>
<td>
<input type=\"number\" name=\"repair\" maxlength=\"50\" size=\"30\" value=".$row3['repair'].">
</td>
</tr><tr>
<td>
 <label for=\"ber\">Total BER</label>
</td>
<td>
<input type=\"number\" name=\"ber\" maxlength=\"50\" size=\"30\" value=".$row3['BER'].">
</td>
</tr>
<tr>
<td colspan=\"2\" style=\"text-align:center\">
<br>
<br>
<input type=\"Submit\" value=\"Submit\">
</td>
</tr>
</table>
</form>	";
}
mysqli_close($con);
?>
      </div>
		</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>