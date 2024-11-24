$(document).ready(function() {
    $('.required').each(function() {
        $(this).html($(this).html() + '<span class="required-field">*</span>');
    });

    $('#login-prompt').show();
    $('#signup-prompt').hide();
    $("#prompt-select-signup").hide();
    $("#signup-email-already-exists").hide();
    $("#signup-account-already-exists").hide();
    $("#signup-passwords-do-not-match").hide();
    $(".login-credentials-error").hide()
    $(".login-hide").hide();
    $(".signup-hide").show();

    $(".login-switch").on("click", function() {
        $(".login-switch").addClass("active-prompt").removeClass("not-active-prompt");
        $(".signup-switch").removeClass("active-prompt").addClass("not-active-prompt");
        $("#prompt-select-login").show();
        $("#prompt-select-signup").hide();
        $("#login-prompt").show();
        $("#signup-prompt").hide();
        $(".login-hide").hide();
        $(".signup-hide").show();
    });

    $(".signup-switch").on("click", function() {
        $(".login-switch").removeClass("active-prompt").addClass("not-active-prompt");
        $(".signup-switch").addClass("active-prompt").removeClass("not-active-prompt");
        $("#prompt-select-login").hide();
        $("#prompt-select-signup").show();
        $("#login-prompt").hide();
        $("#signup-prompt").show();
        $(".login-hide").show();
        $(".signup-hide").hide();
    });

    $("#credentials-close").on("click", function (){
        hideLoginPrompt();
    })


    function checkStrength(password) {
        let strength = 0;

        if (password.length >= 4) strength += 5;
        if (password.length >= 8) strength += 5;
        if (password.length >= 12) strength += 10;
        if (password.length >= 16) strength += 10;
        if (password.length >= 20) strength += 5;
        if (/[A-Z]/.test(password)) strength += 15;
        if (/[a-z]/.test(password)) strength += 15;
        if (/[0-9]/.test(password)) strength += 15;
        if (/[\W_]/.test(password)) strength += 20;

        return Math.min(strength, 100);
    }

    function passwordsMatch(){
        var password = $("#signup-password").val().trim();
        var passwordRpt = $("#signup-passwordRpt").val().trim();
        console.log("Typing");

        if (!passwordRpt || !password){
            $("#signup-passwords-do-not-match").hide();
            return;
        }

        if (password===passwordRpt) {
            $("#signup-passwords-do-not-match").hide();
        } else {
            $("#signup-passwords-do-not-match").show();
        }

    }
    function updatePasswordStrength(passwordStrengthness) {
        if (passwordStrengthness === 0) {
            $(".password-strength-container").hide();
            return;
        } else if (passwordStrengthness >= 95) {
            $("#password-strength-1").addClass("success-background").removeClass("danger-background").removeClass("error-background").removeClass("warning-background");
            $("#password-strength-2").addClass("success-background").removeClass("danger-background").removeClass("error-background").removeClass("warning-background");
            $("#password-strength-3").addClass("success-background").removeClass("danger-background").removeClass("error-background").removeClass("warning-background");
            $("#password-strength-4").addClass("success-background").removeClass("danger-background").removeClass("error-background").removeClass("warning-background");
            $("#password-strength-5").addClass("success-background").removeClass("danger-background").removeClass("error-background").removeClass("warning-background");
            $("#password-strength-6").addClass("success-background").removeClass("danger-background").removeClass("error-background").removeClass("warning-background");
        } else if (passwordStrengthness >= 85){
            $("#password-strength-1").addClass("success-background").removeClass("danger-background").removeClass("error-background").removeClass("warning-background");
            $("#password-strength-2").addClass("success-background").removeClass("danger-background").removeClass("error-background").removeClass("warning-background");
            $("#password-strength-3").addClass("success-background").removeClass("danger-background").removeClass("error-background").removeClass("warning-background");
            $("#password-strength-4").addClass("success-background").removeClass("danger-background").removeClass("error-background").removeClass("warning-background");
            $("#password-strength-5").addClass("success-background").removeClass("danger-background").removeClass("error-background").removeClass("warning-background");
            $("#password-strength-6").addClass("warning-background").removeClass("success-background").removeClass("error-background").removeClass("danger-background");
        } else if (passwordStrengthness >= 75) {
            $("#password-strength-1").addClass("success-background").removeClass("danger-background").removeClass("error-background").removeClass("warning-background");
            $("#password-strength-2").addClass("success-background").removeClass("danger-background").removeClass("error-background").removeClass("warning-background");
            $("#password-strength-3").addClass("success-background").removeClass("danger-background").removeClass("error-background").removeClass("warning-background");
            $("#password-strength-4").addClass("warning-background").removeClass("success-background").removeClass("error-background").removeClass("danger-background");
            $("#password-strength-5").addClass("warning-background").removeClass("success-background").removeClass("error-background").removeClass("danger-background");
            $("#password-strength-6").addClass("warning-background").removeClass("success-background").removeClass("error-background").removeClass("danger-background");
        } else if (passwordStrengthness >= 50) {
            $("#password-strength-1").addClass("success-background").removeClass("danger-background").removeClass("error-background").removeClass("warning-background");
            $("#password-strength-2").addClass("success-background").removeClass("danger-background").removeClass("error-background").removeClass("warning-background");
            $("#password-strength-3").addClass("error-background").removeClass("success-background").removeClass("warning-background").removeClass("danger-background");
            $("#password-strength-4").addClass("warning-background").removeClass("success-background").removeClass("error-background").removeClass("danger-background");
            $("#password-strength-5").addClass("warning-background").removeClass("success-background").removeClass("error-background").removeClass("danger-background");
            $("#password-strength-6").addClass("warning-background").removeClass("success-background").removeClass("error-background").removeClass("danger-background");
        } else if (passwordStrengthness >= 25) {
            $("#password-strength-1").addClass("success-background").removeClass("danger-background").removeClass("error-background").removeClass("warning-background");
            $("#password-strength-2").addClass("error-background").removeClass("danger-background").removeClass("success-background").removeClass("warning-background");
            $("#password-strength-3").addClass("error-background").removeClass("success-background").removeClass("warning-background").removeClass("danger-background");
            $("#password-strength-4").addClass("warning-background").removeClass("success-background").removeClass("error-background").removeClass("danger-background");
            $("#password-strength-5").addClass("warning-background").removeClass("success-background").removeClass("error-background").removeClass("danger-background");
            $("#password-strength-6").addClass("warning-background").removeClass("success-background").removeClass("error-background").removeClass("danger-background");
        } else {
            $("#password-strength-1").addClass("danger-background").removeClass("success-background").removeClass("error-background").removeClass("warning-background");
            $("#password-strength-2").addClass("error-background").removeClass("danger-background").removeClass("success").removeClass("warning-background");
            $("#password-strength-3").addClass("error-background").removeClass("success-background").removeClass("warning-background").removeClass("danger-background");
            $("#password-strength-4").addClass("warning-background").removeClass("success-background").removeClass("error-background").removeClass("danger-background");
            $("#password-strength-5").addClass("warning-background").removeClass("success-background").removeClass("error-background").removeClass("danger-background");
            $("#password-strength-6").addClass("warning-background").removeClass("success-background").removeClass("error-background").removeClass("danger-background");
        }
        $(".password-strength-container").show();
    }

    $("#signup-password").on("input", function () {
        let strength = checkStrength(this.value);
        updatePasswordStrength(strength);
        passwordsMatch();
    }).ready(function (){
        if (this.value == null || this.value.length===0){
            $(".password-strength-container").hide();
        }
    });

    $("#signup-passwordRpt").on("input", function (){
        passwordsMatch();
    }).ready(function () {
        if (this.value == null || this.value.length===0){
            $("#signup-passwords-do-not-match").hide();
        }else {
        }
    });

}).on('keydown', function(e) {
    if (e.key.toLowerCase() === "escape") {
        if ($("#login-overlay") != null){
            hideLoginPrompt();
        }
    }
})

function hideLoginPrompt(){
    if ($("#login-overlay") != null){
        $("#login-overlay").fadeOut(300);
    } else {
        $("#account-container").show();
    }
}
function revealLoginPrompt(){
    if ($("#login-overlay") != null){
        $("#login-overlay").fadeIn(500);
    } else {
        $("#account-container").show();
    }
}