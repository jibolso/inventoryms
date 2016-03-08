<?php
/**
 * Created by PhpStorm.
 * User: akpabioignatius
 * Date: 08/03/2016
 * Time: 12:30 PM
 */

echo phpinfo();
/*
echo $pnum = htmlspecialchars($_POST['pnum']) . '<br>';
echo $pname = htmlspecialchars($_POST['pname']). '<br>';
echo $desc = htmlspecialchars($_POST['desc']). '<br>';
echo $isp = htmlspecialchars($_POST['isp']). '<br>';
echo $isl = htmlspecialchars($_POST['isl']) . '<br>';
echo $wp = htmlspecialchars($_POST['wp']) . '<br>';
echo $rp = htmlspecialchars($_POST['rp']) . '<br>';
echo $supplier = htmlspecialchars($_POST['supplier']). '<br>';
echo $loccode = htmlspecialchars($_POST['loccode']). '<br>';



$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "project";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // prepare sql and bind parameters
    $stmt = $conn->prepare("INSERT INTO addproduct (productserial, productname, productdescription,
 locationcode, suppliercode, initialstocklevel, initialstockprice, wholesaleprice, retailsprice)
    VALUES (:productserial, :productname, :productdescription, :locationcode, suppliercode, :initialstocklevel, :initialstockprice, :wholesaleprice, :retailprice)");
    $stmt->bindParam(':productserial', $pnum);
    $stmt->bindParam(':productname', $pname);
    $stmt->bindParam(':productdescription', $desc);
    $stmt->bindParam(':locationcode', $loccode);
    $stmt->bindParam(':suppliercode', $supplier);
    $stmt->bindParam(':initialstocklevel', $isl);
    $stmt->bindParam(':initialstockprice', $isp);
    $stmt->bindParam(':wholesaleprice', $wp);
    $stmt->bindParam(':retailprice', $rp);

    // insert a row
    $stmt->execute();

    echo "New records created successfully";
}
catch(PDOException $e)
{
    echo "Error: " . $e->getMessage();
}
$conn = null;

/*
$suppn = htmlspecialchars($_POST['suppn']);
$suppc = htmlspecialchars($_POST['suppc']);
$contp = htmlspecialchars($_POST['contp']);
$contppn = htmlspecialchars($_POST['contppn']);
$supptel = htmlspecialchars($_POST['supptel']);
$suppfax = htmlspecialchars($_POST['suppfax']);
$suppurl = htmlspecialchars($_POST['suppurl']);
$desc = htmlspecialchars($_POST['desc']);
$custadd1 = htmlspecialchars($_POST['custadd1']);
$custadd2 = htmlspecialchars($_POST['custadd2']);
$town = htmlspecialchars($_POST['town']);
$county = htmlspecialchars($_POST['county']);
$postc = htmlspecialchars($_POST['postc']);
$country = htmlspecialchars($_POST['country']);
*/

?>