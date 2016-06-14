<?php
    require 'checkSession.php';
    require 'db.php';
    if(!isset($_GET["InvoiceId"])) {
    	header("Location: dashboard.php");
    } else {
    	$invoice_id = $_GET["InvoiceId"];

    	$query = "SELECT * FROM Invoice WHERE Id=?";
    	$stmt = $db->prepare($query);
        $stmt->execute(array($invoice_id));
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if(count($rows) > 0) {
        	$invoice = $rows[0];

        	$query = "SELECT * FROM InvoiceDetails WHERE InvoiceId=?";
        	$stmt = $db->prepare($query);
        	$stmt->execute(array($invoice_id));
        	$items = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        else {
        	header("Location: dashboard.php");
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sagar Auto Parts</title>
    <!-- Meta Tags-->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!--Style Sheet References-->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.css" />

    <!-- MDL -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" href="assets/css/material.css" />
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css" />
    <link rel="stylesheet" href="assets/css/getmdl-select.min.css" />

    <!-- Custom CSS-->
    <link rel="stylesheet" href="assets/css/theme.css" />
    
</head>
<body>

    <!-- Always shows a header, even in smaller screens. -->
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
        
        <?php
            include 'navigation.php';
        ?>
        <main class="mdl-layout__content">
            <div class="page-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="no-print"><?php echo $invoice["InvoiceType"] ?> Invoice</h2>
                            <?php 
                            	if($invoice["InvoiceType"] == "Retailer") {
                            		include 'views/retailerHeader.php';	
                            	}
                            	else {
                            		include 'views/wholesellerHeader.php';
                            	}
                            	
                            ?>
                            <table class="invoice-details mdl-data-table  mdl-shadow--2dp">
                                <thead>
                                    <tr>
                                        <th>Sr No.</th>
                                        <th class="mdl-data-table__cell--non-numeric">Particulars</th>
                                        <th>Quantity</th>
                                        <th>Unit price</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                	<?php 
                                		$total = 0;

                                		for($i=0; $i < count($items) ; $i++) {
                                			$item = $items[$i];
                                			$total += $item["Quantity"] * $item["Price"];
                                			?>
                                	<tr>
                                        <td><?php echo ($i+1)?></td>
                                        <td class="mdl-data-table__cell--non-numeric"><?php echo $item["ItemName"] ?></td>
                                        <td><?php echo $item["Quantity"] ?></td>
                                        <td>&#8377; <?php echo $item["Price"] ?></td>
                                        <td>&#8377; <?php echo $item["Quantity"] * $item["Price"] ?></td>
                                    </tr>
                                			<?php
                                		}
                                	?>
                                    
                                    <tr>
                                        <th></th>
                                        <th class="mdl-data-table__cell--non-numeric" colspan="3">Grand Total</th>
                                        <th>&#8377; <?php echo $total ?></th>
                                    </tr>

                                    <tr>
                                        <td class="mdl-data-table__cell--non-numeric" colspan="4">Logo1 Logo2 Logo3</td>
                                        <td>For Sagar Auto.&nbsp;<br />&nbsp;<br />&nbsp;</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <button id="print_btn" type="button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent pull-right no-print">Print</button>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <!-- JavaScript Rerefences-->
    <!-- Bootstrap -->
    <script src="assets/js/jquery-1.12.2.js"></script>
    <script src="assets/js/bootstrap.js"></script>

    <!--MDL-->
    <script defer src="assets/js/material.js"></script>
    <script src="assets/js/getmdl-select.min.js"></script>
    <!--Custom JS-->
    <script src="assets/js/main.js"></script>
    <script>
        $(document).ready(function (e) {
            $("#print_btn").click(function (e) {
                window.print();
            });
        });
    </script>
</body>
</html>
