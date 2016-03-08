<?php
/**
 * Created by PhpStorm.
 * User: akpabioignatius
 * Date: 08/03/2016
 * Time: 12:30 PM
 *
 */

$pnum = htmlspecialchars($_POST['pnum']) ;
$pname = htmlspecialchars($_POST['pname']);
$desc = htmlspecialchars($_POST['desc']);
$isp = htmlspecialchars($_POST['isp']);
$isl = htmlspecialchars($_POST['isl']);
$wp = htmlspecialchars($_POST['wp']);
$rp = htmlspecialchars($_POST['rp']) ;
$supplier = htmlspecialchars($_POST['supplier']);
$loccode = htmlspecialchars($_POST['loccode']);



require("connection.php");

$query = mysql_query("INSERT INTO user
                             (productserial, productname, productdescription, locationcode, suppliercode, initialstocklevel, initialstockprice, wholesaleprice, retailprice
                             )
                             VALUES ('$pnum', '$pname', '$desc', '$loccode', '$supplier', {$isl}, {$isp}, {$wp}, {$rp})", $connection);

if(!$query){
    $error = mysql_error();
    $duplicate = "Duplicate entry";
    if (strpos($error,$duplicate) !== false){
        header ("Location: addproduct.html");
    }
}else{
    header ("Location: addproduct.html");
}



require("footer.php");

/*

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