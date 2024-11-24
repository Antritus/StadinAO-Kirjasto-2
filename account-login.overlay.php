<style>
    #login-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: rgba(0, 0, 0, 0.5);
        z-index: 1000;
    }

    .login-overlay-content {
        max-width: 800px;
        width: 100%;
        box-sizing: border-box;
        text-align: center;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 20px;
    }

    @media (max-width: 600px) {
        .login-overlay-content {
            width: 90%;
            max-width: none;
            font-size: 14px;
        }
    }

    @media (max-width: 1000px) {
        .login-overlay-content {
            width: 90%;
            max-width: none;
            font-size: 16px;
        }
    }
</style>
<div id="login-overlay">
    <div class="login-overlay-content">
        <noscript>
            <div style="text-align: center; color: white; background: black; padding: 10px;">
                Please enable JavaScript to access the login overlay functionality.
            </div>
        </noscript>
        <div class="js-enabled" style="display: none !important;">
            <?php
            include_once "account-login.php";
            ?>
        </div>
    </div>
</div>

<script>
    $(document).ready(function (){
        $("#login-overlay").on("click", function(e) {
            if (e.target !== this) return;
            hideLoginPrompt();
        });
    })
</script>
