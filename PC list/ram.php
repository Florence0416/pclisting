<html>

    </html>
<?php
$server= "localhost";
$username = "root";
$password = "";
$dbname = "new";

$conn = mysqli_connect ($server, $username, $password, $dbname);
$sql = "SELECT CompName, UserName, Department, RAM FROM pclistings where RAM = (SELECT max(RAM) from pclistings)";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

echo '<table border="1" cellspacing="2" cellpadding="2" style="border-collapse: collapse";> 
      <tr> 
          <td> <font face="Arial"> <strong>PC name</strong></font></td>
          <td> <font face="Arial"> <strong>User name</strong></font> </td> 
          <td> <font face="Arial"> <strong>Deparment</strong></font> </td> 
          <td> <font face="Arial"> <strong>Highest RAM (GB)</strong></font> </td> 
      </tr><h1>Highest RAM</h1>';

if ($resultCheck>0)
{
    while($row = mysqli_fetch_assoc($result))
    {
        $CompName = $row["CompName"];
        $UserName = $row["UserName"];
        $Department = $row["Department"];
        $RAM = $row["RAM"];
        
        echo '<tr> 
                  <td> <font face="Arial">' .$CompName.'</font></td>
                  <td> <font face="Arial">' .$UserName.'</font></td>
                  <td> <font face="Arial">' .$Department.'</font></td>
                  <td> <font face="Arial">' .$RAM.'</font></td>
                  
              </tr>';

        
    }
}


?>
<?php
$server= "localhost";
$username = "root";
$password = "";
$dbname = "new";

$conn = mysqli_connect ($server, $username, $password, $dbname);
$sql = "SELECT CompName, UserName, Department, RAM FROM pclistings where RAM = (SELECT min(RAM) from pclistings)";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

echo '<table border="1" cellspacing="2" cellpadding="2" style="border-collapse: collapse";> 
      <tr> 
          <td> <font face="Arial"> <strong>PC name</strong></font></td>
          <td> <font face="Arial"> <strong>User name</strong></font> </td> 
          <td> <font face="Arial"> <strong>Deparment</strong></font> </td> 
          <td> <font face="Arial"> <strong>Highest RAM (GB)</strong></font> </td> 
      </tr><br><h1>Lowest RAM</h1>';

if ($resultCheck>0)
{
    while($row = mysqli_fetch_assoc($result))
    {
        $CompName = $row["CompName"];
        $UserName = $row["UserName"];
        $Department = $row["Department"];
        $RAM = $row["RAM"];
        
        echo '<tr> 
                  <td> <font face="Arial">' .$CompName.'</font></td>
                  <td> <font face="Arial">' .$UserName.'</font></td>
                  <td> <font face="Arial">' .$Department.'</font></td>
                  <td> <font face="Arial">' .$RAM.'</font></td>
                  
              </tr>';

        
    }
}


?>