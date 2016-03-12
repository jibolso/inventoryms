<!DOCTYPE html>
<html lang="en">
<head>
    <title> PRODUCT LIST </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href = "styling.css"/>
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>

</head>
<body>
<div style="margin-left:70px">
    <header id = "headlogin">
        <h1> RGU Oil Services </h1>
        <h2> Inventory Management Made Easy </h2>
    </header>
    <div id = "form1">
        <section>
            <?php
            $db = new PDO('mysql:host=us-cdbr-azure-southcentral-e.cloudapp.net;dbname=inventoryms;charset=utf8mb4', 'bee886bc8793e7', '362289e3',array(PDO::ATTR_EMULATE_PREPARES => false,
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

            if ($db->connect_errno) {
                die('Connection failed:'.connect_error);
            }

            //Step 3: Execute the SQL query

                $sql = "SELECT * FROM `addproduct`";

            $result = $db->query($sql);

            //Step 4: Process a set of results

            while ($row = $result->fetch_array()) {

                //Step 5: Process an individual (row) result

                $newhtml = <<<NEWHTML
                            <article>
                                <p class="BorderShadow"><strong>{$row['productserial']}</strong></p>
                                <p class="BorderShadow">{$row['productname']}</p>
                                <p class="BorderShadow">{$row['productdescription']}</p>
                                <p class="BorderShadow"><strong>{$row['locationcode']}</strong></p>
                                <p class="BorderShadow">{$row['suppliercode']}</p>
                                <p class="BorderShadow">{$row['initialstocklevel']}</p>
                                <p class="BorderShadow">{$row['initialstockprice']}</p>
                                <p class="BorderShadow">{$row['wholesaleprice']}</p>
                                <p class="BorderShadow">{$row['retailprice']}</p>
                            </article>

                            <div class="HBar BorderShadow"></div>
NEWHTML;

                print($newhtml);

            }



            //Clean up

            $result->close();
            $db->close();

            ?>
        </section>
    </div>
    <footer id= "footlogin">
        <p>&copy; Akpabio Ignatius, 2016</p>
    </footer>
</body>
</html>