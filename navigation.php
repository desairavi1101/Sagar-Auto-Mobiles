        <header class="mdl-layout__header no-print">
            <div class="mdl-layout__header-row">
                <!-- Title -->
                <span class="mdl-layout-title">Sagar Auto Parts</span>
                <!-- Add spacer, to align navigation to the right -->
                <div class="mdl-layout-spacer"></div>
                <!-- Navigation. We hide it in small screens. -->
                <nav class="mdl-navigation mdl-layout--large-screen-only">
                    <a class="mdl-navigation__link">
                        <b> Welcome <?php  echo $_SESSION["Name"]?></b>
                    </a>
                    <a class="mdl-navigation__link" href="retailer.php">Retailer Invoice</a>
                    <a class="mdl-navigation__link" href="wholeseller.php">WholeSaler Invoice</a>
                    <a class="mdl-navigation__link" href="changePassword.php">Change Password</a>
                    <a class="mdl-navigation__link" href="logout.php">Logout</a>
                    <form method="GET" action="search.php">
                        <div class="mdl-layout-spacer"></div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable
                                  mdl-textfield--floating-label mdl-textfield--align-right">
                            <label class="mdl-button mdl-js-button mdl-button--icon"
                               for="search_box">
                                <i class="material-icons">search</i>
                            </label>
                            <div class="mdl-textfield__expandable-holder">
                                <input class="mdl-textfield__input" type="text" name="query"
                                 id="search_box" style="border-bottom: 1px solid white" placeholder="Search anything....">
                            </div>
                        </div>
                    </form>
                </nav>
            </div>
        </header>
        <div class="mdl-layout__drawer no-print">
            <span class="mdl-layout-title">Sagar Auto Parts</span>
            <nav class="mdl-navigation">
                <a class="mdl-navigation__link" href="retailer.php">Retailer Invoice</a>
                <a class="mdl-navigation__link" href="wholeseller.php">WholeSaler Invoice</a>
                <a class="mdl-navigation__link" href="changePassword.php">Change Password</a>
                <a class="mdl-navigation__link" href="logout.php">Logout</a>
            </nav>
        </div>