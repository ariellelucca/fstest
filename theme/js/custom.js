(function ($) {
    $(document).ready(function () {
        $("#searchHome").on("submit", function(e){
            alert('test');
            e.preventDefault();

            console.log('test');
            
            let s = $("#search-term").val();

            $.ajax({
                url: customjs.ajaxurl,
                type: 'post',
                datatype: 'text',
                data: {
                    's': s,
                    'action': 'populate_search_results',
                    'nonce': customjs.nonce
                },
                success:function(response) {
                    console.log(response);
                }
            })
        })
        // Include jquery functions calls to manipulate the elements inside widgets
        // <ul>, <li>, and <a>
        // using as a selector the class default-sidebar
    })
}(jQuery))