$(document).ready(function(){
    $(".baj-tel").hide();
    $(".baterias").hide();
    $(".others").hide();

    $(".guitarras-show").click(function(){
        $("#products-title").text("Guitarras");
        $(".guitarras").show();
        $(".baj-tel").hide();
        $(".baterias").hide();
        $(".others").hide();
    });

    $(".baj-tel-show").click(function(){
        $("#products-title").text("Bajitos y Terceras");
        $(".guitarras").hide();
        $(".baj-tel").show();
        $(".baterias").hide();
        $(".others").hide();
    });

    $(".bat-sho").click(function(){
        $("#products-title").text("Baterias");
        $(".guitarras").hide();
        $(".baj-tel").hide();
        $(".baterias").show();
        $(".others").hide();
    });

    $(".others-sho").click(function(){
        $("#products-title").text("Accesorios y otros");
        $(".guitarras").hide();
        $(".baj-tel").hide();
        $(".baterias").hide();
        $(".others").show();
    });

});