<header>
    <div class="menu-top-element extended-menu-top-container">
        <window-max-width class="menu-top-container">
            <div class="left-align">
               <!--
                <a href="index.php" class="menu-top-logo">
                    <logo>
                        <?php
                        // Switch between dark and light mode logos
                        if (isset($_SESSION["dark_mode"]) && $_SESSION["dark_mode"]) {
                            echo "<img class='logo' src='assets/logo-white.png' alt='logo'>";
                        } else {
                            echo "<img class='logo' src='assets/logo-black.png' alt='logo'>";
                        }
                        ?>
                    </logo>
                </a>
                !-->
                <a href="index.php" class="menu-top-btn">Kirjis</a>
                <a href="#" class="menu-top-btn">Home</a>
                <a href="#" class="menu-top-btn">Gifs</a>
            </div>
            <div class="right-align">
                <button class="menu-top-btn menu-top-account">
                    <account-logo>
                        <?php
                        // Switch between dark and light mode logos
                        if (isset($_SESSION["dark_mode"]) && $_SESSION["dark_mode"]) {
                            echo "<img class='logo' src='assets/user-white.png' alt='logo'>";
                        } else {
                            echo "<img class='logo' src='assets/user-black.png' alt='logo'>";
                        }
                        ?>
                    </account-logo>
                </button>
                <button class="menu-top-btn dark-mode-switch">Dark Mode</button>
                <button class="menu-top-btn light-mode-switch">Light Mode</button>
            </div>
        </window-max-width>
        <window-max-width>
            <div class="menu-top-search" hidden="">
                <form method="get" action="includes/search.incl.php">
                    <!--suppress HtmlFormInputWithoutLabel -->
                    <input type="text" name="search" placeholder="Something to search for....">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
                <div class="input-suggestions">
                    <!-- Suggestions will appear here -->
                </div>
            </div>
        </window-max-width>
    </div>
</header>