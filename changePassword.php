<?php
    require 'checkSession.php';
    require 'db.php';
    if(isset($_POST["Change"])) {
        $old_password = $_REQUEST["OldPassword"];
        $new_password = $_REQUEST["NewPassword"];

        $email = $_SESSION["Email"];

        $query = "UPDATE Admin SET Password = ? WHERE Email=? AND Password=?";
        $stmt = $db->prepare($query);
        $stmt->execute(array($new_password,$email,$old_password));

        $count = $stmt->rowCount();

        if($count == 0) {
            $message = "Old password doesn not match";
            $class = "alert alert-danger";
        }
        else {
            $message = "Password is changed successfully";
            $class = "alert alert-success";
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
                <br>
                    <form method="POST" onsubmit="return checkPassword();" action="changePassword.php">
                        <div>
                            <div id="message" class="alert alert-danger hide">
                                New password and retyped password does not match.
                            </div>
                            <?php 
                                if(isset($message)) {
                                    ?>
                            <div class="<?php echo $class ?>">
                                <?php echo $message ?>
                            </div>
                                    <?php
                                }
                            ?>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mdl-textfield mdl-js-textfield">
                                    <input name="OldPassword" class="mdl-textfield__input" type="password" id="OldPassword" required>
                                    <label class="mdl-textfield__label" for="OldPassword">Old Password...</label>
                                </div>
                            </div>

                            <div class="col-md-12">

                                <div class="mdl-textfield mdl-js-textfield">
                                    <input name="CNewPassword" class="mdl-textfield__input" type="password" id="CNewPassword" required>
                                    <label class="mdl-textfield__label" for="CNewPassword">Retype New Password...</label>
                                </div>
                            </div>

                            <div class="col-md-12">

                                <div class="mdl-textfield mdl-js-textfield">
                                    <input name="NewPassword" class="mdl-textfield__input" type="password" id="NewPassword" required>
                                    <label class="mdl-textfield__label" for="NewPassword">New Password...</label>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <button name="Change" id="Change" type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent pull-left no-print">Change</button>  
                            </div>
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


        function checkPassword() {
            var newPassword = $("#NewPassword").val();
            var cPassword = $("#CNewPassword").val();
            if(newPassword != cPassword) {
                $("#message").removeClass("hide");
                return false;
            }
            else {
                return true;
            }
        }
    </script>
</body>
</html>
