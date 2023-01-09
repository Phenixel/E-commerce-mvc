$("#close-ban-x").click(function() {
    $(".header").css("display", "none");
    localStorage.setItem("bannerClosed", true);
});

// Garde en mémoire le fait d'avoir fermé la bannière
$(document).ready(function() {
    if (localStorage.getItem("bannerClosed") === "true") {
        $(".header").css("display", "none");
    }
});


document.getElementById('video_bg').addEventListener('ended',myHandler,false);
function myHandler(e) {
    setTimeout(function(){
        document.getElementById('video_bg').play();
    }, 5000);
}

$('.password-toggle').click(function() {
    var input = $($(this).attr('data-toggle'));
    if (input.attr('type') == 'password') {
        input.attr('type', 'text');
        $(this).children('i').removeClass('fa-eye').addClass('fa-eye-slash');
    } else {
        input.attr('type', 'password');
        $(this).children('i').removeClass('fa-eye-slash').addClass('fa-eye');
    }
});

const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]')
const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl))

