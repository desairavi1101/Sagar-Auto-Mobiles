<?php
    require 'checkSession.php';
    require 'db.php';
    if(isset($_GET["query"])) {
        $search_string = $_GET["query"];
        $query = "SELECT * FROM `invoice` Where Name LIKE '%$search_string%' OR Id = '$search_string' ";
        
        if(is_numeric($search_string)) {
            if(strlen($search_string) >= 4) {
                $query = $query . "OR VehicleNo LIKE '%$search_string%' OR 
                MobileNo LIKE '%$search_string%' ";
            }
        }
        else {
            $query = $query . "OR VehicleNo LIKE '%$search_string%' ";
        }

        $query = $query . "ORDER BY Id";

        $stmt = $db->prepare($query);
        $stmt->execute();

        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
    }
    else 
    {
        header("Location: dashboard.php");
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
                <?php
                    if(count($rows) == 0) {
                        ?>
                            <div class="container">
                                <h2>No Records found. </h2>
                            </div>
                        <?php
                    } 
                    else {
                        for($i=0; $i < count($rows); $i++) {
                            $invoice = $rows[$i];
                            $is_retailer = false;
                            if($invoice["InvoiceType"] == "Retailer") {
                                $is_retailer = true;
                            }
                        
                        ?>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="demo-card-wide mdl-card mdl-shadow--2dp" style="width: 800px">
                                        <div class="mdl-card__title" style="height:60px">
                                            <h2 class="mdl-card__title-text">Invoice No: <?php echo $invoice["Id"] ?></h2>
                                        </div>
                                        <div class="mdl-card__supporting-text">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <b>Customer Name:</b> <?php echo $invoice["Name"] ?>
                                            </div>
                                            <?php
                                                if($is_retailer) {
                                            ?>
                                                <div class="col-md-6">
                                                    <b>Contact Number:</b> <?php echo $invoice["MobileNo"] ?>
                                                </div>
                                                <div class="col-md-6">
                                                    <b>Vehicle Number:</b> <?php echo $invoice["VehicleNo"]?>
                                                </div>
                                            <?php
                                                }
                                                else
                                                {
                                            ?>
                                                <div class="col-md-12">
                                                    <b>Address:</b><br/> <?php echo $invoice["Address"] ?>
                                                </div>
                                            <?php

                                                }
                                            ?>
                                        </div>    
                                            
                                        </div>
                                        <div class="mdl-card__actions mdl-card--border">
                                            <a  href="additems.php?InvoiceId=<?php echo $invoice["Id"] ?>" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored mdl-js-ripple-effect pull-right no-print">
                                                View Invoice
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                    }
                ?>
                
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
