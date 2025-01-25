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
                            echo "<img class='logo' src='../assets/logo-white.png' alt='logo'>";
                        } else {
                            echo "<img class='logo' src='../assets/logo-black.png' alt='logo'>";
                        }
                        ?>
                    </logo>
                </a>
                !-->
                <a href="#" class="menu-top-btn">Home</a>


                <!-- Lisää uusia kirjoja --!>
                <a href="#" class="menu-top-btn">Lisää Kirja</a>
            </div>
            <div class="right-align">
                <button class="menu-top-btn menu-top-account">
                    <account-logo>
                        <?php
                        // Switch between dark and light mode logos
                        if (isset($_SESSION["dark_mode"]) && $_SESSION["dark_mode"]) {
                            echo "<img class='logo' src='../assets/user-white.png' alt='logo'>";
                        } else {
                            echo "<img class='logo' src='../assets/user-black.png' alt='logo'>";
                        }
                        ?>
                    </account-logo>
                </button>

                <button class="menu-top-btn dark-mode-switch">Dark Mode</button>
                <button class="menu-top-btn light-mode-switch">Light Mode</button>
                <a href="../index.php" class="menu-top-btn"><button class="menu-top-btn">Asiakas Sivut</button></a>
            </div>
        </window-max-width>
    </div>
</header>