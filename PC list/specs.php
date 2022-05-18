<html>
<h1>PC with good specification</h1>
    </html>
<?php
$server= "localhost";
$username = "root";
$password = "";
$dbname = "new";

$conn = mysqli_connect ($server, $username, $password, $dbname);
$sql = "SELECT * from pclistings where cpuCore = 'i5' && SSD like '%SSD%' && coreGen>7 && RAM>=8";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

echo '<table border="1" cellspacing="2" cellpadding="2" style="border-collapse: collapse";> 
      <tr> 
          <td> <font face="Arial"> <strong>PC name</strong></font></td>
          <td> <font face="Arial"> <strong>User name</strong></font> </td>
          <td> <font face="Arial"> <strong>Department</strong></font> </td> 
          <td> <font face="Arial"> <strong>CPU core</strong></font> </td>
          <td> <font face="Arial"> <strong>Antivirus</strong></font> </td>
          <td> <font face="Arial"> <strong>SSD/HDD</strong></font> </td>
          <td> <font face="Arial"> <strong>Core Gen</strong></font> </td>
          <td> <font face="Arial"> <strong>RAM (GB)</strong></font> </td> 
      </tr>';

if ($resultCheck>0)
{
    while($row = mysqli_fetch_assoc($result))
    {
        $CompName = $row["CompName"];
        $UserName = $row["UserName"];
        $Department = $row["Department"];
        $cpuCore = $row["cpuCore"];
        $Antivirus = $row['Antivirus'];
        $SSD = $row['SSD'];
        $coreGen = $row['coreGen'];
        $RAM = $row['RAM'];

        echo '<tr> 
                  <td> <font face="Arial">'.$CompName.'</font></td> 
                  <td> <font face="Arial">'.$UserName.'</font></td> 
                  <td> <font face="Arial">'.$Department.'</font></td>
                  <td> <font face="Arial">'.$cpuCore.'</font></td>
                  <td> <font face="Arial">'.$Antivirus.'</font></td>
                  <td> <font face="Arial">'.$SSD.'</font></td>
                  <td> <font face="Arial">'.$coreGen.'</font></td>
                  <td> <font face="Arial">'.$RAM.'</font></td>
              </tr>';
        
    }
}


?>