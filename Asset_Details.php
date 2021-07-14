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
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
  width:100px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
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


	
<div >
		<h2 class="mb-4">All Asset Details Report</h2><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Date/Time: <span id="datetime"></span></p><script>var dt = new Date();
document.getElementById("datetime").innerHTML=dt.toLocaleString();</script> </div >
<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;



	<table id="customers">
						<?php 
$con=mysqli_connect("localhost","root","","aftc_mess");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM assets");


while($row = mysqli_fetch_array($result))
{$result2 = mysqli_query($con,"SELECT Name FROM supplier where SiNo= \"".$row['Supplier_Detail']."\"");
$row2 = mysqli_fetch_array($result2);
$row3= mysqli_fetch_array(mysqli_query($con,"SELECT * FROM conditions where ID= \"".$row['ID']."\""));
if ( isset($row2)){}
						else {$row2['Name']="";}
echo "<tr >";
echo " <th colspan=\"2\" > <b>Asset Name : </b> ".$row['Item'] ." </th>
<th colspan=\"2\" > <b>Asset ID : </b> ".$row['ID'] ." </th>
</tr>

  <tr>
    <td><b>Property Book</b></td>
    <td>".$row['Property_Book'] ."</td>
    <td><b>Page number</b></td>
    <td>".$row['Page_No'] ."</td>
  </tr>
  <tr>
  <td><b>Manufacturer </b></td>
    <td>".$row['Manufacturer'] ."</td>
   
    <td><b>Model</b></td>
    <td>".$row['Model'] ."</td>
  </tr>
    <tr>
	 
	    
    <td><b>Purchase Value</b></td>
    <td>".$row['Purchase_Price'] ."</td>
	<td><b>Current Value</b></td>
    <td>".$row['Current_Value']."</td>

  </tr>
  <tr>
    <td><b>Quantity</b></td>
    <td>".$row['Quantity'] ."</td>
	<td><b>Price per Piece </b></td>
    <td>".$row['Purchase_Price']/$row['Quantity'] ."</td>

  </tr>
    <tr>
    <td><b>Available Quantity </b></td>
    <td>".$row['q_checkout'] ."</td>
	    <td><b>Physical Location</b></td>
    <td>".$row['Physical_Location'] ."</td>
   
  </tr>
      <tr>
     <td><b>Supplier</b></td>
    <td>".$row2['Name'] ."</td>
	    <td><b>Acquired Date</b></td>
    <td>".$row['Acquired_Date'] ."</td>

  </tr>
   <tr>
    <td><b>Retired Date</b> </td>
    <td>".$row['Retired_Date']."</td>
<td><b>Warrenty Till  </b></td>
    <td>".$row['Warranty_Till'] ."</td>
  </tr>
<tr>
    <td colspan=\"4\"><b>Serviceability</b></td>
  </tr>
    <tr>
	
    <td><b>Serviceable</b> </td>
    <td>".$row3['serv']."</td>
<td><b>Unserviceable  </b></td>
    <td>".$row3['unserv'] ."</td>
  
  <tr>
    <td><b>Under Repair</b> </td>
    <td>".$row3['repair']."</td>
<td><b>BER</b></td>
    <td>".$row3['BER'] ."</td>
  </tr>

     <tr>
    <td colspan=\"4\"><b>Description</b></td>
  </tr>
    <tr>
     
    <td colspan=\"4\">".$row['Description'] ."</td>
  </tr>

     <tr>
    <td colspan=\"4\"><b>Comments</b></td>
  </tr>
    </tr>
    
    <td colspan=\"4\">";
	if (empty($row['Comments'])) {
      	echo "NIL </td>
  </tr>";
      
    } else {
      	echo $row['Comments']."</td>
  </tr>";
    }
  
}

echo "</table>";

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