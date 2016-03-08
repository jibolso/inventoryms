<?php
/**
 * Created by PhpStorm.
 * User: akpabioignatius
 * Date: 08/03/2016
 * Time: 12:30 PM
 *
 */



/*
    $dbhost = "localhost";
    $dbname = "project";
    $dbusername = "root";
    $dbpassword = "root";

    $link = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbusername, $dbpassword);
    $link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    try {
        $statement = $link->prepare("INSERT INTO addproduct
                             (productserial, productname, productdescription, locationcode, suppliercode, initialstocklevel, initialstockprice, wholesaleprice, retailprice
                             )
            VALUES ('$pnum', '$pname', '$desc', '$loccode', '$supplier', $isl, $isp, $wp, $rp)\", $connection)");

        //$statement->execute(array("Bob","Desaunois",18));
        $statement->execute();
    } catch(PDOException $e) {
        echo $e->getMessage();
    }



*/

//MySQL connection details.
$host = 'us-cdbr-azure-southcentral-e.cloudapp.net';
$user = 'bee886bc8793e7';
$pass = '362289e3';
$database = 'inventoryms';

$pnum = htmlspecialchars($_POST['pnum']) ;
$pname = htmlspecialchars($_POST['pname']);
$desc = htmlspecialchars($_POST['desc']);
$isp = htmlspecialchars($_POST['isp']);
$isl = htmlspecialchars($_POST['isl']);
$wp = htmlspecialchars($_POST['wp']);
$rp = htmlspecialchars($_POST['rp']) ;
$supplier = htmlspecialchars($_POST['supplier']);
$loccode = htmlspecialchars($_POST['loccode']);

//Custom PDO options.
$options = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_EMULATE_PREPARES => false
);

//Connect to MySQL and instantiate our PDO object.
$pdo = new PDO("mysql:host=$host;dbname=$database", $user, $pass, $options);


$sql = "INSERT INTO `addproduct` (`productserial`, `productname`, `productdescription`, `locationcode`,
 `suppliercode`, `initialstocklevel`, `initialstockprice`, `wholesaleprice`, `retailprice`) VALUES (:productserial, :productname, :productdescription, :locationcode,
 :suppliercode, :initialstocklevel, :initialstockprice, :wholesaleprice, :retailprice)";


//Prepare our statement.
$statement = $pdo->prepare($sql);


//Bind our values to our parameters (we called them :make and :model).
$statement->bindValue(':productserial', '$pnum');
$statement->bindValue(':productname', '$pname');
$statement->bindValue(':productdescription', '$desc');
$statement->bindValue(':locationcode', '$loccode');
$statement->bindValue(':suppliercode', '$supplier');
$statement->bindValue(':initialstocklevel', $isl);
$statement->bindValue(':initialstockprice', $isp);
$statement->bindValue(':wholesaleprice', $wp);
$statement->bindValue(':retailprice', $rp);
//Execute the statement and insert our values.
$inserted = $statement->execute();


//Because PDOStatement::execute returns a TRUE or FALSE value,
//we can easily check to see if our insert was successful.
if($inserted){
    echo 'Row inserted!<br>';
}





/*

define('DB_SERVER', "localhost");
define('DB_USER', "root");
define('DB_PASSWORD', "root");
define('DB_DATABASE', "project");
define('DB_DRIVER', "mysql");





try {
    $db = new PDO(DB_DRIVER, DB_DATABASE, DB_SERVER, DB_USER, DB_PASSWORD);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $db->prepare("INSERT INTO addproduct(productserial, productname, productdescription, locationcode, suppliercode, initialstocklevel, initialstockprice, wholesaleprice, retailprice
                             ) VALUES (:productserial, :productname, :productdescription, :locationcode, :suppliercode, :initialstocklevel, :initialstockprice, :wholesaleprice, :retailprice
                             ");

    $stmt->bindParam(':productserial', $pnum, PDO::PARAM_STR, 100);
    $stmt->bindParam(':productname', $pname, PDO::PARAM_STR, 100);
    $stmt->bindParam(':productdescription', $desc, PDO::PARAM_STR, 100);
    $stmt->bindParam(':locationcode', $loccode, PDO::PARAM_STR, 100);
    $stmt->bindParam(':suppliercode', $supplier, PDO::PARAM_STR, 100);
    $stmt->bindParam(':initialstocklevel', $isl, PDO::PARAM_STR, 100);
    $stmt->bindParam(':initialstockprice', $isp, PDO::PARAM_STR, 100);
    $stmt->bindParam(':wholesaleprice', $wp, PDO::PARAM_STR, 100);
    $stmt->bindParam(':retailprice', $rp, PDO::PARAM_STR, 100);

    if($stmt->execute()) {
        echo '1 row has been inserted';
    }

    $db = null;
} catch(PDOException $e) {
    trigger_error('Error occured while trying to insert into the DB:' . $e->getMessage(), E_USER_ERROR);
}



/*
require("connection.php");

$query = mysql_query("INSERT INTO addproduct
                             (productserial, productname, productdescription, locationcode, suppliercode, initialstocklevel, initialstockprice, wholesaleprice, retailprice
                             )
                             VALUES ('$pnum', '$pname', '$desc', '$loccode', '$supplier', $isl, $isp, $wp, $rp)", $connection);

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