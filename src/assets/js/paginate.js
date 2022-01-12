$(document).ready(function() {
    $("#content").load("show/1");
    $(".page-link").click(function() {
        var id = $(this).attr("data-id");
        var select_id = $(this).parent().attr("id");
        $.ajax({
            url: "/show",
            type: "GET",
            data: {
                page: id
            },
            cache: false,
            success: function(dataResult) {
                $("#content").html(dataResult);
                $(".pageitem").removeClass("active");
                $("#" + select_id).addClass("active");
            }
        });
    });
});