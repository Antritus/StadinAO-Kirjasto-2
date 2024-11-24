<header>
    <div class="menu-top-container menu-top-element">
        <div class="left-align">
            <a href="#" class="menu-top-btn">Home</a>
            <a href="#" class="menu-top-btn">Videos
                <div hidden="" class="menu-top-dropdown">
                    <a href="#">Long Form</a>
                    <a href="#">Shorts</a>
                </div>
            </a>
            <a href="#" class="menu-top-btn">Gifs</a>
        </div>

        <div class="center-align">
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
        </div>
        <div class="right-align">
            <form class="menu-top-search" method="get" action="includes/search.incl.php">
                <input class="search-box" type="text" name="search" placeholder="Search for video...">
                <button class="search-button" type="submit"><i class="fa fa-search"></i></button>
            </form>

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
    </div>
</header>
