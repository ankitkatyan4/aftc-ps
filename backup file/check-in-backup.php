<!doctype html>
<html lang="en">
  <head>
  	<title>AFTC Mess Portal</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="css/poppins.css" rel="stylesheet">
		
		<link rel="stylesheet" href="css/myfont.css">
		<link rel="stylesheet" href="css/style.css">
  </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="p-4 pt-5">
		  		<a href="#" class="img logo rounded-circle mb-5" style="background-image: url(images/Crest_AFTC.png);"></a>
<ul class="list-unstyled components mb-5">
				          <li>
              <a href="#">Home</a>
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
	            <a href="#homeSubmenu1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Check-Out/ Check-in</a>
	            <ul class="collapse list-unstyled" id="homeSubmenu1">
                <li>
                    <a href="#">Check-Out</a>
                </li>
                <li>
                    <a href="#">Check-in</a>
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
</br></br></br></br></br>
	        <div class="footer">
	        	<p>Developed by Fg Offr Vatsalya Yadav</p>
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
		<h2 class="mb-4">      &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Owner Report  </h2>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Date/Time: <span id="datetime"></span></p><script>var dt = new Date();
document.getElementById("datetime").innerHTML=dt.toLocaleString();</script> 
<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
<select name="title" id="title">
        <option value="" selected>All</option>
		 
<?php

$con=mysqli_connect("localhost","root","","aftc_mess");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM owner Order by SiNo");


while($row = mysqli_fetch_array($result))
{
echo "<option value=\" WHERE SiNo = ".$row['SiNo']."\">".$row['Name']."</option>";

}
mysqli_close($con)

?>
</select>&nbsp;&nbsp;&nbsp;

<script>
function myFunction() {
var e = document.getElementById("title");
var result = e.options[e.selectedIndex].value;
window.open("check-in.php?id=".concat(result),"_self");
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                
}
</script>




<button type="button"  onclick="myFunction()">Submit</button>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
<button input type = 'submit' name = 'submit' value = Submit>Check-in</button>

<?php 
      
    // Check if form is submitted successfully 
    if(isset($_POST["submit"]))  
    { 
        // Check if any option is selected 
        if(isset($_POST["checkin"]))  
        { 
            // Retrieving each selected option 
            foreach ($_POST['checkin'] as $checkin)  
                echo "You selected $checkin<br/>"; 
        } 
    else
        echo "Select an option first !!"; 
    } 
?>
</div>
			<div class="wrap-table100">
				<div class="table100">
			
					<table>
						<thead>
							<tr class="table100-head">
								<th class="column3">Item</th>
								<th class="column2">Description</th>
								<th class="column3">Condition</th>
								<th class="column3">Manufacture</th>
								<th class="column3">Model</th>
								<th class="column4">Physical Location</th>
								<th class="column3">Checked-Out To</th>
								<th class="column3">Check-Out Date</th>
							</tr>
						</thead>
						<tbody>
						<?php 
						if ( isset($_GET['id'])){$var = $_GET['id'];}
						else {$var="";}
						if(isset($_GET['select2']))
						{foreach ($_GET['select2'] as $selectedOption)
							echo $selectedOption."\n";}
						else {$var2="";}
$con=mysqli_connect("localhost","root","","aftc_mess");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


$result1 = mysqli_query($con,"SELECT * FROM owner ".$var."  Order by SiNo  ");


while($row1 = mysqli_fetch_array($result1))

{
$result = mysqli_query($con,"SELECT * FROM assets Where Check_out_to= ".$row1['SiNo']);
echo "<tr style=\"color:black;font-size:12px;\">";
echo " <th colspan=\"7\" > <b>Owner Name  : </b> ".$row1['Name'] ." </th>
</tr>
<form id=\"form1\" name=\"form1\" method=\"get\" action=\"check-in.php\">";
while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td><input type=\"checkbox\" multiple=\"multiple\" name=\"select2[]\" value=\"".$row['ID']."\"></td>";
echo "<td>" . $row['Item'] . "</td>";
echo "<td>" . $row['Description'] . "</td>";
echo "<td>" . $row['Serviceability'] . "</td>";
echo "<td>" . $row['Manufacturer'] . "</td>";
echo "<td>" . $row['Model'] . "</td>";
echo "<td>" . $row['Physical_Location'] . "</td>";
echo "<td>" . $row['Check_out_to'] . "</td>";
echo "<td>" . $row['Checkout_out_on'] . "</td>";
echo "</tr>";
}}
echo "</form></table>";

mysqli_close($con);
 
if(isset($_POST['sub']))  
{ 
$host="localhost";//host name  
$username="root"; //database username  
$word="";//database word  
$db_name="aftc_mess";//database name  
$con=mysqli_connect("$host", "$username", "$word","$db_name")or die("cannot connect");//connection string  
$checkbox1=$_POST['techno'];  
$chk="";  
foreach($checkbox1 as $chk1)  
   {  
      $chk .= $chk1.",";  
   }  
echo $checkbox1;
}
?>  

      </div>
		</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>