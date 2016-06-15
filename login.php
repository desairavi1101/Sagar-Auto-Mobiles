<?php
    require 'session.php';
    require 'db.php';
    if(isset($_POST["Login"])) {
        $query = "SELECT * FROM admin WHERE Email=? AND Password=?";
        
        $email = $_REQUEST["Email"];
        $password = $_REQUEST["Password"];

        $stmt = $db->prepare($query);
        $stmt->execute(array($email,$password));

        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if(count($rows) > 0) {
            $_SESSION["Email"] = $rows[0]["Email"];
            $_SESSION["Name"] = $rows[0]["FirstName"] . " " . $rows[0]["LastName"];
            header("Location: dashboard.php");

        } else {
            $error = "Invalid email or password";
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

    <!-- Custom CSS-->
    <link rel="stylesheet" href="assets/css/theme.css" />
    
</head>
<body>

    <!-- Always shows a header, even in smaller screens. -->
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
        
        <main class="mdl-layout__content">
            <div class="page-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <form method="POST" action="login.php">
                                <div class="demo-card-wide mdl-card mdl-shadow--2dp">
                                    <div class="mdl-card__title">
                                        <h2 class="mdl-card__title-text">Welcome Admin !!!</h2>
                                    </div>
                                    <div class="mdl-card__supporting-text">
                                        <?php
                                            if(isset($error)) {
                                            ?>
                                        <div class="alert alert-danger">
                                            <?php echo $error; ?>
                                        </div>
                                            <?php
                                            }
                                        ?>
                                        
                                        <div>
                                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                                <input name="Email" class="mdl-textfield__input" type="text" id="Email" required>
                                                <label class="mdl-textfield__label" for="Email">Email</label>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                                <input name="Password" class="mdl-textfield__input" type="password" id="Password" required>
                                                <label class="mdl-textfield__label" for="Password">Password</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mdl-card__actions mdl-card--border">
                                        <button name="Login" type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored mdl-js-ripple-effect pull-right no-print">
                                            Get Started
                                        </button>
                                    </div>
                                </div>
                            </form>
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
