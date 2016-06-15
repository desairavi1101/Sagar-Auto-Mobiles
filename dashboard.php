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
	                <div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
						<div class="mdl-tabs__tab-bar">
					    	<a href="#starks-panel" class="mdl-tabs__tab is-active">Starks</a>
					    	<a href="#lannisters-panel" class="mdl-tabs__tab">Lannisters</a>
					    	<a href="#targaryens-panel" class="mdl-tabs__tab">Targaryens</a>
						</div>

						<div class="mdl-tabs__panel is-active" id="starks-panel">
							<ul>
						    	<li>Eddard</li>
						    	<li>Catelyn</li>
						    	<li>Robb</li>
						    	<li>Sansa</li>
						    	<li>Brandon</li>
						    	<li>Arya</li>
						    	<li>Rickon</li>
						    </ul>
						</div>
					  	<div class="mdl-tabs__panel" id="lannisters-panel">
					    	<ul>
					      		<li>Tywin</li>
					      		<li>Cersei</li>
					      		<li>Jamie</li>
					      		<li>Tyrion</li>
					    	</ul>
					  	</div>
					  	<div class="mdl-tabs__panel" id="targaryens-panel">
					  		<ul>
					      		<li>Viserys</li>
					      		<li>Daenerys</li>
					    	</ul>
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
