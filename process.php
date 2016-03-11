<?php
/**
 * Created by PhpStorm.
 * User: akpabioignatius
 * Date: 08/03/2016
 * Time: 12:30 PM
 *
 */


$db = new PDO('mysql:host=us-cdbr-azure-southcentral-e.cloudapp.net;dbname=inventoryms;charset=utf8mb4', 'bee886bc8793e7', '362289e3',array(PDO::ATTR_EMULATE_PREPARES => false,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));


$pnum = htmlspecialchars($_POST['pnum']);
$pname = htmlspecialchars($_POST['pname']);
$desc = htmlspecialchars($_POST['desc']);
$isp = htmlspecialchars($_POST['isp']);
$isl = htmlspecialchars($_POST['isl']);
$wp = htmlspecialchars($_POST['wp']);
$rp = htmlspecialchars($_POST['rp']);
$supplier = htmlspecialchars($_POST['supplier']);
$loccode = htmlspecialchars($_POST['loccode']);

    try {                    
        $sql = "INSERT INTO addproduct (productserial, productname, productdescription, locationcode, suppliercode, initialstocklevel, initialstockprice, wholesaleprice, retailprice)
                VALUES ('$pnum', '$pname','$desc','$loccode', '$supplier', $isl, $isp,$wp, $rp)";
        $sth = $db->query($sql);
    } catch(PDOException $e) {
        echo $e->getMessage();
    }

?>
