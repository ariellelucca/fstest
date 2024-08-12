(function ($) {
    $(document).ready(function () {
        $("#searchHome").on("submit", function(e){
            e.preventDefault();
            
            let searchTerm = $("#search-term").val();

            $.ajax({
                url: customjs.ajaxurl,
                type: 'post',
                datatype: 'text',
                data: {
                    's': searchTerm,
                    'action': 'populate_search_results',
                    'nonce': customjs.nonce
                },
                success:function(response) {
                    $("#searchResults").html(response);
                }
            })
        })
        // Include jquery functions calls to manipulate the elements inside widgets
        // <ul>, <li>, and <a>
        // using as a selector the class default-sidebar
    })
}(jQuery))