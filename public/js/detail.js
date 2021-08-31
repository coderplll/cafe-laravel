$(function () {
    $(".drink").on("click", function () {
        console.log();
        if (!$("#drinkCollapse").hasClass("show")) {
            $(".drink .nav-text")
                .removeClass("text-body")
                .addClass("text-danger");
        } else {
            $(this).css({
                "border-left": "0px",
            });
            $(".drink .nav-text")
                .removeClass("text-danger")
                .addClass("text-body");

            $(".drink .navbar-toggler img").css({
                transform: "rotate(0deg)",
            });

            $(".drink>img").attr(
                "src",
                "http://localhost/cafe/imgs/svg/cup.svg"
            );
        }
    });

    $(".food").on("click", function () {
        if (!$("#foodCollapse").hasClass("show")) {
            $(this).css({
                "border-left": "3px solid #f13757",
            });
            $(".food .nav-text")
                .removeClass("text-body")
                .addClass("text-danger");

            $(".food .navbar-toggler img").css({
                transform: "rotate(90deg)",
            });

            $(".food>img").attr(
                "src",
                "http://localhost/cafe/imgs/svg/cake-fill.svg"
            );
        } else {
            $(this).css({
                "border-left": "0px",
            });
            $(".food .nav-text")
                .removeClass("text-danger")
                .addClass("text-body");

            $(".food .navbar-toggler img").css({
                transform: "rotate(0deg)",
            });

            $(".food>img").attr(
                "src",
                "http://localhost/cafe/imgs/svg/cake.svg"
            );
        }
    });
});
