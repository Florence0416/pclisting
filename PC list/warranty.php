<?php
$server= "localhost";
$username = "root";
$password = "";
$dbname = "new";

$conn = mysqli_connect ($server, $username, $password, $dbname);
$sql = "SELECT * from pclistings where WarrantyStatus='Expired'";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

echo '<table border="1" cellspacing="2" cellpadding="2" style="border-collapse: collapse";> 
      <tr> 
          <td> <font face="Arial"> <strong>PC name</strong></font></td>
          <td> <font face="Arial"> <strong>User name</strong></font> </td> 
          <td> <font face="Arial"> <strong>Deparment</strong></font> </td> 
      </tr><br><h1>PC with expired warranty</h1>';

if ($resultCheck>0)
{
    while($row = mysqli_fetch_assoc($result))
    {
        $CompName = $row["CompName"];
        $UserName = $row["UserName"];
        $Department = $row["Department"];
        
        

        echo '<tr> 
                  <td> <font face="Arial">' .$CompName.'</font></td>
                  <td> <font face="Arial">' .$UserName.'</font></td>
                  <td> <font face="Arial">' .$Department.'</font></td>
                  
              </tr>';

        
    }
}


?>