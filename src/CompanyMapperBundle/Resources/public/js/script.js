$(document).ready(function () {
    $("ul.rows").sortable({
        connectWith:'.rows',
        placeholder: "ui-state-highlight",
        forcePlaceholderSize: true
    });
    $("ul.rows").disableSelection();

    $("#save-btn").click(function (e){
        e.preventDefault();

        var data = {};
        $( "ul.rows" ).each(function( ul ) {
            var id = $( this ).attr('id');
            data[id] = [];
            $( this ).find( "li p" ).each(function( li ) {
                data[id][li] = $( this ).html();
            });
        });

        $.ajax({
            type: "POST",
            url: "company/save/",
            data: {data : JSON.stringify(data)},
            success: function(response){
                if(response.status == 'success'){
                    alert( "Company List data saved successfully");
                    window.location.replace(response.url);
                }
            }
        });
    });
});