$(document).on("ready", inicio);


function inicio() {
    var $win = $(window) 
   transicion()
    $("#cerrarMenu").on("click", cerrarMenu)
    
    $win.on("resize", transicion);
    $win.scroll(transicion);
    $("#menuMovil").on("click", showMenu)

}
function cerrarMenu() {

    left = ($(".nav").width() + 5) * -1
    $(".nav").css("left", left)
    $("#menuMovil").addClass("displayShow")

}

function transicion() {
    var $win = $(window),
            $menu = $(".nav"),
            $container = $("#container"),
            $menuMovil = $("#menuMovil")
    $containerPos = ($win.width() / 2) - ($container.width() / 2)
console.log($win.width())
console.log($container.width())
    if ($(window).scrollTop() > 0) {
        $(".nav").height($("body").height() - 192 + 32);
    } else {
        $(".nav").height($(window).height() - 192);
    }
    if ($containerPos < 284 ) {
        left = ($menu.width() + 5) * -1
        $menu.css("left", left)
        $menuMovil.addClass("displayShow")
    } else {
        $menu.css("left", 0)
        $menuMovil.removeClass("displayShow")
    }
    console.log($containerPos)


}
function showMenu() {
    $(".nav").css("left", 0)
}

    