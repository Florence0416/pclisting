<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
<style>
table{
border-collapse: collapse;
width: 50%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
margin-left: auto;
margin-right: auto;
}
th {
background-color: black;
color: white;
padding: 20px;
}
tr:nth-child(even) {background-color: #f2f2f2}
tr{text-align: center}

h1{text-align: center}

#AddAsset{margin-left: auto;
margin-right: auto;}


</style>
</head>
<body>
<h1>List of assets</h1>
<form method="POST" action="addAsset.php">
      <input type="submit" value="Add new asset"/>
</form><br><br>
Check out the PC with:<br><br>
<a href="specs.php">Good specification</a> &nbsp;&nbsp;
<a href="antivirus.php">Antivirus</a>&nbsp;&nbsp;
<a href="cpuCore.php">CPU core</a>&nbsp;&nbsp;
<a href="ram.php">RAM</a>&nbsp;&nbsp;
<a href="warranty.php">Warranty Expired</a>&nbsp;&nbsp;

<table>
<tr>

<br><br>
<th>No</th>
<th>PC Name</th>
<th>Location </th>
<th>Current User</th>
<th>Department</th>
<th>Model</th>
<th>Specification</th>
<th>Antivirus</th>
<th>CPU core</th>
<th>Core Gen</th>
<th>RAM (GB)</th>
<th>SSD/HDD</th>
<th>O/S</th>
<th>Office</th>
<th>Office Product Keys</th>
<th>Other Software License</th>
<th>Autocad Viewer</th>
<th>Autocad</th>
<th>Microsoft Project</th>
<th>SQL</th>
<th>Warranty Period Expire Date</th>
<th>Warranty Status</th>
<th>Year of Purchase</th>
<th>Years</th>
<th>Invoce</th>
<th>Remakrs</th>
</tr>



<?php
$conn = mysqli_connect("localhost", "root", "", "new");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT No,CompName, Location, UserName, Department, Model, Spec, Antivirus, cpuCore, coreGen, RAM, SSD, OS, office, officeProductKey, OSL, autocadViewer, autocad, microsoftProject, SQLava, WPE, WarrantyStatus, SOP, years, Invoice, remarks FROM pclistings";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
    
    echo "<tr><td>" 
    . $row["No"] . "</td><td>" 
    . $row["CompName"] . "</td><td>" 
    . $row["Location"] . "</td><td>" 
    . $row["UserName"] . "</td><td>" 
    . $row["Department"] . "</td><td>"
    . $row["Model"] . "</td><td>" 
    . $row["Spec"] . "</td><td>" 
    . $row["Antivirus"] . "</td><td>" 
    . $row["cpuCore"] . "</td><td>" 
    . $row["coreGen"] . "</td><td>" 
    . $row["RAM"] . "</td><td>" 
    . $row["SSD"] . "</td><td>" 
    . $row["OS"] . "</td><td>" 
    . $row["office"] . "</td><td>" 
    . $row["officeProductKey"] . "</td><td>" 
    . $row["OSL"] . "</td><td>" 
    . $row["autocadViewer"] . "</td><td>" 
    . $row["autocad"] . "</td><td>" 
    . $row["microsoftProject"] . "</td><td>" 
    . $row["SQLava"] . "</td><td>" 
    . $row["WPE"] . "</td><td>" 
    . $row["WarrantyStatus"] . "</td><td>" 
    . $row["SOP"] . "</td><td>" 
    . $row["years"] . "</td><td>" 
    . $row["Invoice"] . "</td><td>" 
    . $row["remarks"] .
    "</td></tr>" ;
    
    }
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>


 
 

</table>
</body>


</html>


