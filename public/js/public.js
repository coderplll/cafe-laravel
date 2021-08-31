$(function () {
    $(".r_home").on("click", function () {
        fetch("/admin/index", {
            //请求类型
            method: "GET",
        }).then((response) => {
            window.location = "/admin/index";
        });
    });
});
