<?php
/**
 * Created by PhpStorm.
 * User: akpabioignatius
 * Date: 11/03/2016
 * Time: 5:28 PM
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

$suppn = htmlspecialchars($_POST['suppn']);
$suppc = htmlspecialchars($_POST['suppc']);
$contp = htmlspecialchars($_POST['contp']);
$contppn = htmlspecialchars($_POST['contppn']);
$supptel = htmlspecialchars($_POST['supptel']);
$suppfax = htmlspecialchars($_POST['suppfax']);
$suppurl = htmlspecialchars($_POST['suppurl']);
$suppemail = htmlspecialchars($_POST['suppemail']);
$desc = htmlspecialchars($_POST['desc']);
$add1 = htmlspecialchars($_POST['add1']);
$add2 = htmlspecialchars($_POST['add2']);
$town = htmlspecialchars($_POST['town']);
$county = htmlspecialchars($_POST['county']);
$postcode = htmlspecialchars($_POST['postcode']);
$country = htmlspecialchars($_POST['country']);

    try {
        $sql = "INSERT INTO addsupplier (suppliername, suppliercode, contactperson, contactpersontel, telnumber, fax, url, email, description, addressline1, addressline2, town, county, postcode, country)
                VALUES ('$suppn', '$suppc','$contp','$contppn', '$supptel', '$suppfax', '$suppurl','$suppemail', '$desc','$add1', '$add2', '$town', '$county', '$postcode', '$country')";
        $sth = $db->query($sql);
    } catch(PDOException $e) {
        echo $e->getMessage();
    }
?>