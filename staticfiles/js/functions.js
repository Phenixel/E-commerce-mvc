$("#close-ban-x").click(function() {
    $(".header").css("display", "none");
});

document.getElementById('video_bg').addEventListener('ended',myHandler,false);
function myHandler(e) {
    setTimeout(function(){
        document.getElementById('video_bg').play();
    }, 5000);
}
