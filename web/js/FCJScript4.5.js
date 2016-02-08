function ftoolmax() {
      $("#toolmax").animate({
        "margin-left": "0%"
    }, 1500, function () {
        document.getElementById("toolmax").style.zIndex = "1000";
        document.getElementById("toolmin").style.zIndex = "500"
    })
}
function ftoolmin() {
    strwidth = $(window).width() - 200;
    document.getElementById("toolmax").style.zIndex = "1000";
    document.getElementById("toolmin").style.zIndex = "1500";
    $("#toolmax").animate({
        "margin-left": strwidth
    }, 1500)
}