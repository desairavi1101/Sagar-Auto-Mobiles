<?php
    require 'checkSession.php';
    if(isset($_POST["Name"])) {

        require 'db.php';

        $name =  isset($_REQUEST["Name"]) ? $_REQUEST["Name"] : "";
        $mobile_no = isset($_REQUEST["MobileNo"]) ? $_REQUEST["MobileNo"] : "";
        $vehicle_type = isset($_REQUEST["VehicleType"]) ? $_REQUEST["VehicleType"] : "";
        $vehicle_no = isset($_REQUEST["VehicleNo"]) ? $_REQUEST["VehicleNo"] : "";
        $invoice_date = isset($_REQUEST["InvoiceDate"]) ? $_REQUEST["InvoiceDate"] : "";
        $kms = isset($_REQUEST["Kms"]) ? $_REQUEST["Kms"] : "";
        $address = isset($_REQUEST["Address"]) ? $_REQUEST["Address"] : "";
        $invoice_type = isset($_REQUEST["InvoiceType"]) ? $_REQUEST["InvoiceType"] : "Retailer";

        $query = "INSERT INTO Invoice (Name,MobileNo,VehicleType,VehicleNo,InvoiceDate,Kms,Address,InvoiceType) VALUES (?,?,?,?,?,?,?,?)";

        $stmt = $db->prepare($query);
        $stmt->execute(array($name,$mobile_no,$vehicle_type,$vehicle_no,$invoice_date,$kms,$address,$invoice_type));

        $invoice_id = $db->lastInsertId();

        header("Location: additems.php?InvoiceId=$invoice_id");
        
    }
?>