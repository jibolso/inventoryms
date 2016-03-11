<?php
/**
 * Created by PhpStorm.
 * User: akpabioignatius
 * Date: 11/03/2016
 * Time: 4:29 PM
 */
/**
 * Created by PhpStorm.
 * User: akpabioignatius
 * Date: 08/03/2016
 * Time: 12:30 PM
 *
 */
$db = new PDO('mysql:host=us-cdbr-azure-southcentral-e.cloudapp.net;dbname=inventoryms;charset=utf8mb4', 'bee886bc8793e7', '362289e3',array(PDO::ATTR_EMULATE_PREPARES => false,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));


$type = htmlspecialchars($_POST['type']);
$custn = htmlspecialchars($_POST['custn']);
$custc = htmlspecialchars($_POST['custc']);
$custtel = htmlspecialchars($_POST['custtel']);
$custfax = htmlspecialchars($_POST['custfax']);
$custurl = htmlspecialchars($_POST['custurl']);
$custemail = htmlspecialchars($_POST['custemail']);
$desc = htmlspecialchars($_POST['desc']);
$custadd1 = htmlspecialchars($_POST['custadd1']);
$custadd2 = htmlspecialchars($_POST['custadd2']);
$ctown = htmlspecialchars($_POST['ctown']);
$ccounty = htmlspecialchars($_POST['ccounty']);
$cpostc = htmlspecialchars($_POST['cpostc']);
$ccountry = htmlspecialchars($_POST['ccountry']);

    try {
        $sql = "INSERT INTO addcustomer (customertype, customername, customercode, telnumber, fax, url, email, description, addressline1, addressline2, town, county, postcode, country)
                VALUES ('$type', '$custn','$custc','$custtel', '$custfax', '$custurl', '$custemail','$desc', '$custadd1', '$custadd2', '$ctown', '$ccounty', '$cpostc', '$ccountry')";
        $sth = $db->query($sql);
    } catch(PDOException $e) {
        echo $e->getMessage();
    }
?>
