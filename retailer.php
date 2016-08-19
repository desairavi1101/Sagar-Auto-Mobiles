<?php
    require 'checkSession.php';
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
                <div class="container">
                    <form method="POST" action="addinvoice.php">
                        <div class="row">
                            <div class="col-md-12">
                                <h2 class="no-print">Retailer Invoice</h2>
                                <table class="invoice-details mdl-data-table  mdl-shadow--2dp">
                                    <tbody>
                                        <tr>
                                            <td class="mdl-data-table__cell--non-numeric">Name</td>
                                            <td class="mdl-data-table__cell--non-numeric">
                                                <div class="mdl-textfield mdl-js-textfield">
                                                    <input name="Name" class="mdl-textfield__input" type="text" id="Name" required>
                                                    <label class="mdl-textfield__label" for="Name">Name</label>
                                                </div>
                                            </td>
                                            <td class="mdl-data-table__cell--non-numeric">Date</td>
                                            <td class="mdl-data-table__cell--non-numeric">
                                                <div class="mdl-textfield mdl-js-textfield">
                                                    <input name="InvoiceDate" class="mdl-textfield__input" type="date" id="Date" required>
                                                    <label class="mdl-textfield__label" for="Date"></label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="mdl-data-table__cell--non-numeric">Mobile Numer </td>
                                            <td class="mdl-data-table__cell--non-numeric">
                                                <div class="mdl-textfield mdl-js-textfield">
                                                    <input name="MobileNo" class="mdl-textfield__input" type="tel" id="Mobile">
                                                    <label class="mdl-textfield__label" for="Mobile">Mobile</label>
                                                </div>
                                            </td>
                                            <td class="mdl-data-table__cell--non-numeric">Vehicle Type </td>
                                            <td class="mdl-data-table__cell--non-numeric">
                                                <div class="mdl-textfield mdl-js-textfield">
                                                    <input name="VehicleType" class="mdl-textfield__input" type="text" id="VehicleNo">
                                                    <label class="mdl-textfield__label" for="VehicleType">Vehicle Type</label>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="mdl-data-table__cell--non-numeric">Vehicle Numer </td>
                                            <td class="mdl-data-table__cell--non-numeric">
                                                <div class="mdl-textfield mdl-js-textfield">
                                                    <input name="VehicleNo" class="mdl-textfield__input" type="text" id="VehicleNo">
                                                    <label class="mdl-textfield__label" for="VehicleNo">Vehicle Number</label>
                                                </div>
                                            </td>
                                            <td class="mdl-data-table__cell--non-numeric">Kms</td>
                                            <td class="mdl-data-table__cell--non-numeric">
                                                <div class="mdl-textfield mdl-js-textfield">
                                                    <input name="Kms" class="mdl-textfield__input" type="number" id="Kms">
                                                    <label class="mdl-textfield__label" for="Kms">Kms</label>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <button id="clear_btn" type="reset" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored pull-left no-print">Clear</button>
                                <button name="Next" id="next_btn" type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent pull-right no-print">Next</button>
                            </div>
                            <input type="hidden" name="InvoiceType" value="Retailer">
                        </div>
                    </form>
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
