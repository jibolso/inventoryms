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


echo $pnum = htmlspecialchars($_POST['pnum']) . '<br />';
echo $pname = htmlspecialchars($_POST['pname']) . '<br />';
echo $desc = htmlspecialchars($_POST['desc']) . '<br />';
echo $isp = htmlspecialchars($_POST['isp']) . '<br />';
echo $isl = htmlspecialchars($_POST['isl']) . '<br />';
echo $wp = htmlspecialchars($_POST['wp']) . '<br />';
echo $rp = htmlspecialchars($_POST['rp']) . '<br />';
echo $supplier = htmlspecialchars($_POST['supplier']) . '<br />';
echo $loccode = htmlspecialchars($_POST['loccode']) . '<br />';


if(submit){

    try {                    
        $sql = "INSERT INTO addproduct (productserial, productname,productdescription,locationcode,suppliercode,initialstocklevel,initialstockprice,wholesaleprice,retailprice)
                VALUES ('$pnum', '$Address', '$pname','$desc','$loccode', '$supplier', $isl, $isp,$wp, $rp)";
        $sth = $db->query($sql);
    } catch(PDOException $e) {
        echo $e->getMessage();
    }

    header('Location:addproduct.html?done');
}else{
    header('Location:index.html');
}

?>
