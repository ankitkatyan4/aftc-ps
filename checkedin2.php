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
input[type=number] {
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
		<h2 class="mb-4">      &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Check In  </h2>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
<div>


<script type="text/javascript">
    function myFunction2() {
        //Create an Array.
       var quantity = new Array();
 
        //Reference the Table.
        var tblcheck = document.getElementById("tblcheck");
 
        //Reference all the CheckBoxes in Table.
           var chks = tblcheck.getElementsByTagName("INPUT");
			//var id=tblcheck.getElementsByClassName("myclass");
        // Loop and push the checked CheckBox value in Array.
        for (var i = 0; i < chks.length; i++) {
         
                quantity.push(chks[i].value);
				//itemid.push(id[i].value);
            
        }
		
		//var resp = window.prompt(result);



        //Display the selected CheckBox values.
      
			
			var resp = window.prompt("Enter name of current Store IC");
			window.open(window.location.href.concat("&quantity=").concat(quantity).concat("&store=").concat(resp),"_self");	
        
		
    };
</script>
<form id="myform"  action="javascript:void(0);" onSubmit="myFunction2()"><input type="submit" value="Click to Check In"  >
			<div class="wrap-table100">
				<div class="table100">
					<table id="tblcheck">
						<thead>
							<tr class="table100-head">
								<th class="column3">ID</th>
								<th class="column3">Item</th>
								<th class="column2">Description</th>
								<th class="column4">Physical Location</th>
								<th class="column3">Checked-Out Quantity</th>
								<th class="column4">Quantity to Check-Out</th>

							</tr>
						</thead>
						<tbody>
						<?php if ( isset($_GET['id'])&& !empty($_GET['id'])){$var = " loanee_staus.serial IN (".$_GET['id'].")";}
						else {$var = " loanee_staus.serial =-1";}
						
					$con=mysqli_connect("localhost","root","","aftc_mess");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}	
if ( isset($_GET['quantity'])&& !empty($_GET['quantity']) and isset($_GET['store'])&& !empty($_GET['store'])){
	
	$quantities = explode("," , $_GET['quantity']); //explode marks data
	$id= explode("," , $_GET['id']);
	$i=0;
  foreach($id as $itemid)
  {	 $quan=$quantities[$i];
	if($quan !=0)
	{ $rowz= mysqli_fetch_array(mysqli_query($con,"SELECT * from loanee_staus Where serial =".$itemid));
	mysqli_query($con,"INSERT INTO `asset_history`(`outin`, `Asset_ID`, `Checked_Out_to`, `Entry_by`, `Quantity`) VALUES ('0','".$rowz['item_si']."','".$rowz['loanee_si']."','".$_GET['store']."','".$quan."')");
	
	mysqli_query($con,"UPDATE `loanee_staus` SET quantity=quantity-".$quan." WHERE item_si=".$rowz['item_si']." and  loanee_si=".$rowz['loanee_si']);
	mysqli_query($con,"UPDATE `assets` SET  q_checkout=q_checkout+".$quan." WHERE ID=".$rowz['item_si']);
	
	}$i=$i+1;
	
  }mysqli_query($con,"DELETE FROM loanee_staus WHERE quantity=0");
	echo "<script>  window.open('loan_card.php','_self'); </script>" ;

	}					
$result1 = mysqli_query($con,"SELECT DISTINCT loanee_staus.loanee_si from loanee_staus order by loanee_staus.loanee_si");



while($row1 = mysqli_fetch_array($result1))

{
$result = mysqli_query($con,"SELECT assets.ID,assets.Item, assets.Description,assets.Physical_location,owner.Name, loanee_staus.loanee_si, loanee_staus.quantity, loanee_staus.serial FROM loanee_staus LEFT JOIN owner ON loanee_staus.loanee_si=owner.SiNo LEFT JOIN assets ON loanee_staus.item_si=assets.ID WHERE loanee_staus.loanee_si=".$row1['loanee_si']." and ".$var);
echo "<tr style=\"color:black;font-size:12px;\">";
$result2 = mysqli_query($con,"SELECT Name FROM owner where SiNo=".$row1['loanee_si']);
$row3 = mysqli_fetch_array($result2);
echo "<th colspan=\"7\" > <b>Owner Name  : </b> ".$row3['Name'] ." </th></tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td class=\"myclass\">" . $row['ID'] . "</td>";
echo "<td>" . $row['Item'] . "</td>";
echo "<td>" . $row['Description'] . "</td>";
echo "<td>" . $row['Physical_location'] . "</td>";
echo "<td>" . $row['quantity'] . "</td>";
echo "<td><input type=\"number\" name=\"quantity[]\" id=\"quantity\" value='0' min=\"0\" max=\"". $row['quantity'] ."\" required> </td>";


echo "</tr>";
}}
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