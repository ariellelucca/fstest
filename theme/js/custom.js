(function ($) {
    $(document).ready(function () {
        // Search function
        $("#searchHome").on("submit", function(e){
            e.preventDefault();
            
            let searchTerm = $("#search-term").val();

            $.ajax({
                url: customjs.ajaxurl,
                type: "post",
                datatype: "text",
                data: {
                    "s": searchTerm,
                    "action": "populate_search_results",
                    "nonce": customjs.nonce
                },
                success:function(response) {
                    $("#searchResults").html(response);
                }
            })
        })

        if ($(".widget-area").length > 0) {
            $(".widget-area").each(function(i){
                $(".widget-area").find(".wp-block-group").addClass("card");

                $(".widget-area .card").find("p").addClass("card-header");

                $(".widget-area").find("ul").removeClass();
                $(".widget-area").find("ul").addClass("list-group");

                $(".widget-area").find("li").removeClass();
                $(".widget-area").find("li ").addClass("list-group-item");

                $(".widget-area").find("li a").removeClass();
                $(".widget-area").find("li a").addClass("link-underline-primary");

                $(".widget-area").find(".list-group").css("border-radius", "0");
            })
        }
        // Include jquery functions calls to manipulate the elements inside widgets
        // <ul>, <li>, and <a>
        // using as a selector the class default-sidebar
    })
}(jQuery))