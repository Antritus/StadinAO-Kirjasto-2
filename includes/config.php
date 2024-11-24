<?php
    SESSION_START();
    if (!isset($_SESSION["dark_mode"])) {
        $_SESSION["dark_mode"] = false;
    }
