<?php

$animals = array("Walrus", "Dog", "Cat", "Koala", "Cheetah", "Penguin", "Sloth", "Kangaroo", "Eagle", "Axolotl", "Octopus");
$user = $animals[random_int(0, count($animals) - 1)];
$email = strtolower($user . "@example.com");

?>

    <div id="account-container">
        <div class="switches">
            <div class="prompt-switch">
                <button class="login-switch active-prompt no-outline">Login</button>
                <button class="signup-switch not-active-prompt no-outline">Signup</button>
            </div>

            <div class="right-side-container">
                <!--
                <div class="color-switch">
                    <div class="dark-mode-switch">
                        <button class="no-outline">Dark Mode</button>
                    </div>
                    <div class="light-mode-switch">
                        <button class="no-outline">Light Mode</button>
                    </div>
                </div>
                --!>
                <div class="close">
                    <div class="empty"></div>
                    <button id="credentials-close">Close</button>
                </div>
            </div>
        </div>
        <div class="information-container">
            <div class="logo-container">
                <?php
                /*
                <logo>
                    <?php
                        // Switches automatically in: /javascript/theme.js
                        if ($_SESSION["dark_mode"]){
                            echo "<img class='logo' src='assets/logo-white.png' alt='logo'>";
                        } else {
                            echo "<img class='logo' src='assets/logo-black.png' alt='logo'>";
                        }
                    ?>
                </logo>
                */
                ?>
            </div>
            <div class="prompt-selected">
                <h1 id="prompt-select-login">
                    Login
                    <!--
                    <gradient type="text" colors="#000000 20%, #7400c2 30%, #000000 70%, #7400c2 80%" speed="5s"
                              direction="right">Login
                    </gradient>
                    --!>
                </h1>
                <h1 id="prompt-select-signup">
                    Signup
                    <!--
                    <gradient type="text" colors="#000000 10%, #7400c2 40%, #000000 80%, #7400c2 90%" speed="4s"
                              direction="right">Signup
                    </gradient>
                    --!>
                </h1>
            </div>
        </div>
        <div class="input-container">
            <form id="login-prompt" action="api/account/login.php" method="post">
                <label for="login-account" class="required">E-Mail/Account Name</label>
                <input type="text" name="login-account" id="login-account"
                       placeholder="<?php echo $email ?> / <?php echo strtolower($user) ?>" required>
                <p class="credential-error login-credentials-error">Incorrect credentials!
                    Password or email is
                    wrong!</p>
                <label for="login-password" class="required">Password</label>
                <input required type="password" name="login-password" id="login-password" placeholder="Password">
                <p class="credential-error login-credentials-error">Incorrect credentials!
                    Password or email is
                    wrong!</p>
                <div class="remember">
                    <!--suppress HtmlFormInputWithoutLabel -->
                    <input type="checkbox" name="remember" id="remember">
                    <p class="remember-me">Remember me on this device.</p>
                </div>
                <button type="submit">Login</button>
            </form>
            <form id="signup-prompt" action="api/account/create.php" method="post">
                <label for="signup-email" class="required">E-Mail</label>
                <input required type="email" name="signup-email" id="signup-email" placeholder="<?php echo $email; ?>">
                <p class="credential-error" id="signup-email-already-exists">An account with the email <span
                            id="signup-email-exits-name">%name%</span> already exists!</p>
                <label for="signup-account">
                    <span class="required">Account Name</span>
                    <span class="password-info">
                        If this field is not filled, an account name will be generated from your email address
                    </span>
                </label>

                <input type="text" name="signup-account" id="signup-account" placeholder="<?php echo $user; ?>">
                <p class="credential-error" id="signup-account-already-exists">An account named <span
                            id="signup-account-exits-name">%name%</span> already exists!</p>
                <label for="signup-password">
                    <span class="required">Password</span>
                    <span class="password-info">
                        Must be at least 10 characters.
                        Contain at least one uppercase letter, lowercase letter, special character, and a number
                    </span>
                </label>
                <input required type="password" name="signup-password" id="signup-password"
                       placeholder="Use a secure password">
                <div class="password-strength-container">
                    <label>Password Strength</label>
                    <div class="password-strength-progress">
                        <div id="password-strength-1" class="password-strength-element"></div>
                        <div id="password-strength-2" class="password-strength-element"></div>
                        <div id="password-strength-3" class="password-strength-element"></div>
                        <div id="password-strength-4" class="password-strength-element"></div>
                        <div id="password-strength-5" class="password-strength-element"></div>
                        <div id="password-strength-6" class="password-strength-element"></div>
                    </div>
                </div>
                <p class="credential-error" id="signup-password-not-strong-enough"></p>

                <label for="signup-passwordRpt" class="required">Password Repeat</label>
                <input required type="password" name="signup-passwordRpt" id="signup-passwordRpt"
                       placeholder="Repeat the secure password">
                <p class="credential-error" id="signup-passwords-do-not-match">Passwords do not match.</p>
                <button class="signup signup-form" type="submit">Signup</button>
            </form>
            <p>Every field marked with (<span class="required"></span>) is required to be filled in</p>


        </div>
        <div class="signup-hide bottom-text">
            <h3><a href="#">Forgot your password?</a></h3>
            <h3>
                <flink-d class="fake-href signup-switch">Don't have an account? Sign Up Here</flink-d>
            </h3>
        </div>
        <div class="login-hide bottom-text">
            <h3>
                <flink-d class="fake-href login-switch">Already have an account?</flink-d>
            </h3>
        </div>
    </div>
<?php

