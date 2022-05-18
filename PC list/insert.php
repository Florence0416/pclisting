<html>
    hi, this is

    <form method="POST" action="index.php">
      <input type="submit" value="Back to home"/>
</form>
</html>
<?php
$server= "localhost";
$username = "root";
$password = "";
$dbname = "new";

$conn = mysqli_connect ($server, $username, $password, $dbname);

if(isset($_POST['submit']))
{
    if(!empty($_POST['No']) && !empty($_POST['CompName']) && !empty($_POST['Location']) && !empty($_POST['UserName']) && !empty($_POST['Department']) && !empty($_POST['Model']) && !empty($_POST['Spec']) && !empty($_POST['Antivirus'])  && !empty($_POST['cpuCore'])  && !empty($_POST['coreGen'])  && !empty($_POST['RAM'])  && !empty($_POST['SSD'])  && !empty($_POST['OS'])  && !empty($_POST['office'])  && !empty($_POST['officeProductKey'])  && !empty($_POST['OSL'])  && !empty($_POST['autocadViewer'])  && !empty($_POST['autocad'])  && !empty($_POST['microsoftProject'])  && !empty($_POST['SQLava'])  && !empty($_POST['WPE'])  && !empty($_POST['WarrantyStatus'])  && !empty($_POST['SOP'])  && !empty($_POST['years'])  && !empty($_POST['Invoice'])  && !empty($_POST['remarks']))
    {
        $No = $_POST['No'];
        $CompName = $_POST['CompName'];
        $Location = $_POST['Location'];
        $UserName = $_POST['UserName'];
        $Department = $_POST['Department'];
        $Model = $_POST['Model'];
        $Spec = $_POST['Spec'];
        $Antivirus = $_POST['Antivirus'];
        $cpuCore = $_POST['cpuCore'];
        $coreGen = $_POST['coreGen'];
        $RAM = $_POST['RAM'];
        $SSD = $_POST['SSD'];
        $OS = $_POST['OS'];
        $office = $_POST['office'];
        $officeProductKey = $_POST['officeProductKey'];
        $OSL = $_POST['OSL'];
        $autocadViewer = $_POST['autocadViewer'];
        $autocad = $_POST['autocad'];
        $microsoftProject = $_POST['microsoftProject'];
        $SQLava = $_POST['SQLava'];
        $WPE = $_POST['WPE'];
        $WarrantyStatus = $_POST['WarrantyStatus'];
        $SOP = $_POST['SOP'];
        $years = $_POST['years'];
        $Invoice = $_POST['Invoice'];
        $remarks = $_POST['remarks'];

        $query = "insert into pclistings(No, CompName, Location, UserName, Department, Model, Spec, Antivirus, cpuCore, coreGen, RAM, SSD, OS, office, officeProductKey, OSL, autocadViewer, autocad, microsoftProject,SQLava,WPE,WarrantyStatus,SOP, years, Invoice, remarks) values ('$No', '$CompName', '$Location', '$UserName', '$Department', '$Model', '$Spec', '$Antivirus', '$cpuCore', '$coreGen', '$RAM', '$SSD', '$OS', '$office', '$officeProductKey', '$OSL', '$autocadViewer', '$autocad', '$microsoftProject','$SQLava','$WPE','$WarrantyStatus','$SOP', '$years', '$Invoice', '$remarks')";

        $run = mysqli_query($conn, $query) or die (mysqli_error());

        if($run)
        {
            echo "success";
        }else
        {
            echo "not submitted";
        }
    }else
    {
        echo "all fields required";
    }
}


?>